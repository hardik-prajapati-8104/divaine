/**
 * Keeps the details sidebar fully visible while it is "stuck".
 * CSS makes the sidebar sticky; this script only sets its `top` offset:
 *  - short sidebar  -> sticks just below the header
 *  - tall sidebar   -> scrolls until its bottom edge reaches the viewport,
 *                      then sticks, so nothing is ever clipped.
 */
(function () {
    'use strict';

    var HEADER_OFFSET = 110; // sticky header height + breathing room
    var BOTTOM_GAP = 20;
    var sidebars = document.querySelectorAll('.services__sidebar');
    if (!sidebars.length) { return; }

    function update(el) {
        if (window.innerWidth < 992) { el.style.top = ''; return; }
        var top = Math.min(HEADER_OFFSET, window.innerHeight - el.offsetHeight - BOTTOM_GAP);
        el.style.top = top + 'px';
    }

    Array.prototype.forEach.call(sidebars, function (el) {
        update(el);
        if (window.ResizeObserver) { new ResizeObserver(function () { update(el); }).observe(el); }
    });

    window.addEventListener('resize', function () {
        Array.prototype.forEach.call(sidebars, update);
    });
    window.addEventListener('load', function () {
        Array.prototype.forEach.call(sidebars, update);
    });
})();
