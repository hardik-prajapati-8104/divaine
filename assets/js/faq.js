/* Divaine Tech – FAQ page: category filter + live search */
(function () {
    'use strict';
    var items  = Array.prototype.slice.call(document.querySelectorAll('.faq-item'));
    var tabs   = document.querySelectorAll('.faq-tab');
    var search = document.getElementById('faqSearch');
    var empty  = document.getElementById('faqEmpty');
    if (!items.length) return;

    var filter = 'all', term = '';
    var originals = items.map(function (it) {
        return it.querySelector('.faq-q').textContent;
    });

    function esc(s) { return s.replace(/[.*+?^${}()|[\]\\]/g, '\\$&'); }

    function apply() {
        var shown = 0;
        items.forEach(function (it, i) {
            var q = it.querySelector('.faq-q');
            var text = (originals[i] + ' ' + it.querySelector('.accordion-body').textContent).toLowerCase();
            var ok = (filter === 'all' || it.dataset.cat === filter) && (!term || text.indexOf(term) !== -1);
            var was = !it.classList.contains('is-hidden');
            it.classList.toggle('is-hidden', !ok);
            if (ok) {
                shown++;
                if (!was) { it.classList.remove('faq-show'); void it.offsetWidth; it.classList.add('faq-show'); }
                q.innerHTML = term
                    ? originals[i].replace(new RegExp('(' + esc(term) + ')', 'ig'), '<mark>$1</mark>')
                    : originals[i];
            }
        });
        empty.hidden = shown !== 0;
    }

    tabs.forEach(function (t) {
        t.addEventListener('click', function () {
            tabs.forEach(function (x) { x.classList.remove('active'); });
            t.classList.add('active');
            filter = t.dataset.filter;
            apply();
        });
    });

    var timer;
    search.addEventListener('input', function () {
        clearTimeout(timer);
        timer = setTimeout(function () { term = search.value.trim().toLowerCase(); apply(); }, 120);
    });
})();
