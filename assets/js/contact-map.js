/**
 * Office selector: clicking "View on map" highlights that office and loads its map.
 */
(function () {
    'use strict';

    var list = document.getElementById('office-list');
    var frame = document.getElementById('office-map');
    if (!list || !frame) { return; }

    list.addEventListener('click', function (e) {
        var link = e.target.closest ? e.target.closest('a[data-map]') : null;
        if (!link) { return; }
        e.preventDefault();

        var items = list.querySelectorAll('.contact__office');
        for (var i = 0; i < items.length; i++) { items[i].classList.remove('is-active'); }
        link.closest('.contact__office').classList.add('is-active');

        var url = link.getAttribute('data-map');
        if (url && frame.getAttribute('src') !== url) { frame.setAttribute('src', url); }

        // On small screens the map sits below the list: bring it into view.
        var rect = frame.getBoundingClientRect();
        if (rect.top > window.innerHeight - 120 || rect.bottom < 0) {
            frame.scrollIntoView({ behavior: 'smooth', block: 'center' });
        }
    });
})();
