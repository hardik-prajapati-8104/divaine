/**
 * Switches page content (service / project details, blog list) without a full
 * page refresh.
 *
 * Markup contract (on the section that wraps the content):
 *   data-switcher                      enables the script
 *   data-swap="#a,#b,#c"               regions whose innerHTML is replaced
 *   data-scroll="#a"                   region scrolled into view after a swap
 *   data-link="a[data-ajax]" (optional) selector of links to handle (default a[data-slug])
 *   data-list="#list"        (optional) list whose <a data-slug> gets .active
 * Forms with [data-ajax-form] are submitted the same way (GET only).
 *
 * The server-rendered page stays the single source of markup: the target URL
 * is fetched, the regions are copied over, and history is updated.
 * Falls back to a normal page load if anything goes wrong.
 */
(function () {
    'use strict';

    var root = document.querySelector('[data-switcher]');
    if (!root || !window.fetch || !window.DOMParser) { return; }

    var selectors = (root.getAttribute('data-swap') || '').split(',')
        .map(function (s) { return s.trim(); }).filter(Boolean);
    var scrollSel = root.getAttribute('data-scroll') || selectors[0];
    var linkSel = root.getAttribute('data-link') || 'a[data-slug]';
    var list = root.getAttribute('data-list') ? document.querySelector(root.getAttribute('data-list')) : null;
    var cache = {};
    var controller = null;

    // Identity of a URL: path + query (ignores the #hash).
    function keyOf(url) {
        var u = new URL(url, location.href);
        return u.pathname + u.search;
    }

    function slugOf(url) {
        return new URL(url, location.href).searchParams.get('slug') || '';
    }

    function setActive(slug) {
        if (!list) { return; }
        var links = list.querySelectorAll('a[data-slug]');
        for (var i = 0; i < links.length; i++) {
            var on = links[i].getAttribute('data-slug') === slug;
            links[i].classList.toggle('active', on);
            if (on) { links[i].setAttribute('aria-current', 'page'); }
            else { links[i].removeAttribute('aria-current'); }
        }
    }

    // Instant feedback: mark the clicked pagination number active before the response arrives.
    function markPagination(link) {
        var nav = link.closest('.pagination__wrap');
        var li = link.closest('li');
        if (!nav || !li || !link.hasAttribute('data-page')) { return; }
        var items = nav.querySelectorAll('li');
        for (var i = 0; i < items.length; i++) { items[i].classList.remove('active'); }
        li.classList.add('active');
    }

    function load(url) {
        var key = keyOf(url);
        if (cache[key]) { return Promise.resolve(cache[key]); }
        if (controller) { controller.abort(); }
        controller = new AbortController();
        return fetch(url, { signal: controller.signal, credentials: 'same-origin' })
            .then(function (res) {
                if (!res.ok) { throw new Error('HTTP ' + res.status); }
                return res.text();
            })
            .then(function (html) {
                var doc = new DOMParser().parseFromString(html, 'text/html');
                var parts = {};
                for (var i = 0; i < selectors.length; i++) {
                    var el = doc.querySelector(selectors[i]);
                    if (!el) { throw new Error('Missing ' + selectors[i]); }
                    parts[selectors[i]] = el.innerHTML;
                }
                return (cache[key] = parts);
            });
    }

    function refreshWidgets() {
        // Re-run the animated counters for the new content.
        var $ = window.jQuery;
        if ($ && $.fn && $.fn.counterUp) {
            $(root).find('.counter-number').counterUp({ delay: 10, time: 2000 });
        }
    }

    function show(url, push) {
        root.classList.add('is-loading');
        setActive(slugOf(url));

        load(url).then(function (parts) {
            selectors.forEach(function (sel) {
                var el = document.querySelector(sel);
                if (el) { el.innerHTML = parts[sel]; }
            });
            if (push) { history.pushState({ key: keyOf(url) }, '', url); }
            root.classList.remove('is-loading');
            refreshWidgets();

            // Bring the new content into view if the user has scrolled past its top.
            var target = document.querySelector(scrollSel);
            if (target) {
                var top = target.getBoundingClientRect().top;
                if (top < 100) {
                    window.scrollTo({ top: window.pageYOffset + top - 120, behavior: 'smooth' });
                }
            }
            document.dispatchEvent(new CustomEvent('detail:switched', { detail: { url: url } }));
        }).catch(function (err) {
            if (err && err.name === 'AbortError') { return; }
            location.href = url; // graceful fallback
        });
    }

    root.addEventListener('click', function (e) {
        var link = e.target.closest ? e.target.closest(linkSel) : null;
        if (!link || !link.href) { return; }
        // Let the browser handle new-tab / modified clicks.
        if (e.defaultPrevented || e.button !== 0 || e.metaKey || e.ctrlKey || e.shiftKey || e.altKey) { return; }
        e.preventDefault();
        if (keyOf(link.href) === keyOf(location.href)) { return; }
        markPagination(link);
        show(link.href, true);
    });

    root.addEventListener('submit', function (e) {
        var form = e.target;
        if (!form.matches || !form.matches('form[data-ajax-form]')) { return; }
        e.preventDefault();
        var url = new URL(form.getAttribute('action') || location.pathname, location.href);
        url.search = '';
        new FormData(form).forEach(function (value, name) {
            value = String(value).trim();
            if (value !== '') { url.searchParams.set(name, value); }
        });
        if (keyOf(url.href) === keyOf(location.href)) { return; }
        show(url.href, true);
    });

    window.addEventListener('popstate', function () { show(location.href, false); });
    history.replaceState({ key: keyOf(location.href) }, '', location.href);
})();
