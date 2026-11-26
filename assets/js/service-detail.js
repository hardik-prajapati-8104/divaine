/**
 * Loads a service into the details page without a full page refresh.
 * The server-rendered page is the single source of markup: we fetch the
 * target URL, take the parts that change, and swap them in.
 * Falls back to a normal page load if anything goes wrong.
 */
(function () {
    'use strict';

    var list = document.getElementById('service-list');
    var detail = document.getElementById('service-detail');
    if (!list || !detail || !window.fetch || !window.DOMParser) { return; }

    var titleEl = document.getElementById('service-title');
    var crumbEl = document.getElementById('service-crumb');
    var cache = {};
    var controller = null;

    function setActive(slug) {
        var links = list.querySelectorAll('a[data-slug]');
        for (var i = 0; i < links.length; i++) {
            var on = links[i].getAttribute('data-slug') === slug;
            links[i].classList.toggle('active', on);
            if (on) { links[i].setAttribute('aria-current', 'page'); }
            else { links[i].removeAttribute('aria-current'); }
        }
    }

    function slugOf(url) {
        return new URL(url, location.href).searchParams.get('slug') || '';
    }

    function fetchPage(url) {
        if (cache[url]) { return Promise.resolve(cache[url]); }
        if (controller) { controller.abort(); }
        controller = new AbortController();
        return fetch(url, { signal: controller.signal, credentials: 'same-origin' })
            .then(function (res) {
                if (!res.ok) { throw new Error('HTTP ' + res.status); }
                return res.text();
            })
            .then(function (html) {
                var doc = new DOMParser().parseFromString(html, 'text/html');
                var d = doc.getElementById('service-detail');
                var t = doc.getElementById('service-title');
                var c = doc.getElementById('service-crumb');
                if (!d || !t || !c) { throw new Error('Unexpected response'); }
                cache[url] = { detail: d.innerHTML, title: t.textContent, crumb: c.textContent };
                return cache[url];
            });
    }

    function show(url, push) {
        var slug = slugOf(url);
        detail.classList.add('is-loading');
        setActive(slug);

        fetchPage(url).then(function (data) {
            detail.innerHTML = data.detail;
            titleEl.textContent = data.title;
            crumbEl.textContent = data.crumb;
            if (push) { history.pushState({ slug: slug }, '', url); }

            detail.classList.remove('is-loading');

            // Bring the new content into view if the user has scrolled past its top.
            var top = detail.getBoundingClientRect().top;
            if (top < 100) {
                window.scrollTo({ top: window.pageYOffset + top - 120, behavior: 'smooth' });
            }
        }).catch(function (err) {
            if (err && err.name === 'AbortError') { return; }
            location.href = url; // graceful fallback
        });
    }

    list.addEventListener('click', function (e) {
        var link = e.target.closest ? e.target.closest('a[data-slug]') : null;
        if (!link) { return; }
        // Let the browser handle new-tab / modified clicks.
        if (e.defaultPrevented || e.button !== 0 || e.metaKey || e.ctrlKey || e.shiftKey || e.altKey) { return; }
        e.preventDefault();
        if (link.classList.contains('active')) { return; }
        show(link.href, true);
    });

    window.addEventListener('popstate', function () {
        show(location.href, false);
    });

    history.replaceState({ slug: slugOf(location.href) }, '', location.href);
})();
