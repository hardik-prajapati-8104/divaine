 
<!-- About Solve Section Start -->
<section class="ab-section" id="ab-section" aria-labelledby="ab-title">
    <div class="ab-wrap">

        <!-- ===== Gradient banner ===== -->
        <div class="ab-banner" id="ab-banner">
            <div class="ab-top">
                <div class="ab-top-left">
                    <span class="ab-badge ab-reveal" style="--d:0">About Us</span>
                    <h2 id="ab-title" class="ab-reveal" style="--d:1">We Solve Technology<br>Challenges.</h2>
                </div>
                <div class="ab-top-right ab-reveal" style="--d:2">
                    <p>Your IT Services Partner! We offer customized IT solutions, from managed services to cloud computing and cybersecurity. Empower your business with our expertise for growth and efficiency.</p>
                    <a href="contact-us.php" class="ab-link">Join us today!</a>
                </div>
            </div>

            <div class="ab-stats">
                <div class="ab-stat ab-reveal" style="--d:3">
                    <strong class="ab-num"><span class="ab-count" data-count="25">25</span><span class="ab-suffix ab-suffix-word">Years</span></strong>
                    <span class="ab-label">Years experiences</span>
                </div>
                <div class="ab-stat ab-reveal" style="--d:4">
                    <strong class="ab-num"><span class="ab-count" data-count="2">2</span><span class="ab-suffix">K</span></strong>
                    <span class="ab-label">Happy customers</span>
                </div>
                <div class="ab-stat ab-reveal" style="--d:5">
                    <strong class="ab-num"><span class="ab-count" data-count="150">150</span>+</strong>
                    <span class="ab-label">Project completed</span>
                </div>
                <div class="ab-stat ab-reveal" style="--d:6">
                    <strong class="ab-num"><span class="ab-count" data-count="15">15</span><span class="ab-suffix">+</span></strong>
                    <span class="ab-label">Awards achievement</span>
                </div>
            </div>
        </div>

        <!-- ===== Features ===== -->
        <div class="ab-features">

            <div class="ab-feature ab-reveal" style="--d:7" tabindex="0">
                <span class="ab-ficon" aria-hidden="true">
                    <svg viewBox="0 0 48 48" fill="none" stroke="currentColor" stroke-width="1.7" stroke-linecap="round" stroke-linejoin="round">
                        <circle pathLength="1" cx="24" cy="16" r="11"/>
                        <circle pathLength="1" cx="24" cy="16" r="6.500"/>
                        <path pathLength="1" d="M17 25v18l7-5 7 5V25"/>
                    </svg>
                </span>
                <h3>Expertise</h3>
                <p>Access skilled IT professionals and modern technology expertise to build reliable, tailored digital solutions.</p>
            </div>

            <div class="ab-feature ab-reveal" style="--d:8" tabindex="0">
                <span class="ab-ficon" aria-hidden="true">
                    <svg viewBox="0 0 48 48" fill="none" stroke="currentColor" stroke-width="1.7" stroke-linecap="round" stroke-linejoin="round">
                        <rect pathLength="1" x="4" y="11" width="40" height="26" rx="1.500"/>
                        <circle pathLength="1" cx="24" cy="24" r="5.500"/>
                        <path pathLength="1" d="M4 17c3.500 0 6-2.500 6-6M44 17c-3.500 0-6-2.500-6-6M4 31c3.500 0 6 2.500 6 6M44 31c-3.500 0-6 2.500-6 6"/>
                    </svg>
                </span>
                <h3>Cost-Effective Solutions</h3>
                <p>Reduce operational costs with scalable technology solutions designed to maximize value and business growth.</p>
            </div>

            <div class="ab-feature ab-reveal" style="--d:9" tabindex="0">
                <span class="ab-ficon" aria-hidden="true">
                    <svg viewBox="0 0 48 48" fill="none" stroke="currentColor" stroke-width="1.7" stroke-linecap="round" stroke-linejoin="round">
                        <path pathLength="1" d="M8 22a16 16 0 0 1 32 0c0 8-1 13-3 19"/>
                        <path pathLength="1" d="M13 41c2-5 3-9 3-16a8 8 0 0 1 16 0c0 5-.5 9-2 14"/>
                        <path pathLength="1" d="M18 43c2-4 3-9 3-18 0-1.700 1.300-3 3-3s3 1.300 3 3c0 6-1 10-2 14"/>
                        <path pathLength="1" d="M13 12a16 16 0 0 1 22 0"/>
                        <path pathLength="1" d="M8 30c0 4-.5 7-2 11M24 29c0 4 0 7-1 10"/>
                    </svg>
                </span>
                <h3>Security & Reliability</h3>
                <p>Protect your digital assets with security-conscious development practices and reliable technology solutions.</p>
            </div>

            <div class="ab-feature ab-reveal" style="--d:10" tabindex="0">
                <span class="ab-ficon" aria-hidden="true">
                    <svg viewBox="0 0 48 48" fill="none" stroke="currentColor" stroke-width="1.7" stroke-linecap="round" stroke-linejoin="round">
                        <path pathLength="1" d="M5 8v33h39"/>
                        <path pathLength="1" d="M10 34l11-11 7 6 14-15"/>
                        <path pathLength="1" d="M33 14h9v9"/>
                    </svg>
                </span>
                <h3>Improved Efficiency</h3>
                <p>Streamline business operations through intelligent automation, optimized workflows, and modern software.</p>
            </div>

        </div>
    </div>
</section>
<!-- About Solve Section End -->

<style>
/* ---------- About Solve (scoped, uses project :root variables) ---------- */
.ab-section{
    --ab-primary: var(--primary-color, #15161B);
    --ab-accent: var(--accent-color, rgb(255, 101, 0));
    --ab-white: var(--white-color, #FFFFFF);
    --ab-divider: var(--divider-color, #E1E4EB);
    --ab-font: var(--default-font, "Manrope", sans-serif);
    --ab-ease: cubic-bezier(.22, .8, .24, 1);

    font-family: var(--ab-font);
    background: var(--ab-white);
    padding: 90px 0;
    overflow: hidden;
}
.ab-section *,
.ab-section *::before,
.ab-section *::after{ box-sizing: border-box; }

.ab-wrap{
    width: 100%;
    max-width: 1320px;
    margin: 0 auto;
    padding: 0 12px;
}

/* ----- banner ----- */
.ab-banner{
    --mx: 50%;
    --my: 50%;
    position: relative;
    border-radius: 18px;
    padding: 40px 40px 48px;
    color: var(--ab-white);
    background-color: #5c2e1b; /* fallback */
    background-image: linear-gradient(100deg, var(--ab-primary) 0%, var(--ab-primary) 18%, color-mix(in srgb, var(--ab-accent) 62%, var(--ab-primary)) 100%);
    background-size: 130% 100%;
    background-position: 0% 50%;
    overflow: hidden;
    isolation: isolate;
    animation: ab-sheen 12s ease-in-out infinite alternate;
}
@keyframes ab-sheen{
    from{ background-position: 0% 50%; }
    to  { background-position: 100% 50%; }
}
.ab-banner::before{              /* soft spotlight that follows the pointer */
    content: "";
    position: absolute;
    inset: 0;
    z-index: -1;
    background: radial-gradient(420px circle at var(--mx) var(--my), rgba(255, 255, 255, .13), transparent 60%);
    opacity: 0;
    transition: opacity .5s ease;
}
.ab-banner:hover::before{ opacity: 1; }

.ab-top{
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 40px 60px;
    align-items: start;
    padding-bottom: 38px;
    border-bottom: 1px solid rgba(255, 255, 255, .18);
}
.ab-badge{
    display: inline-block;
    margin-bottom: 18px;
    padding: 7px 13px;
    border-radius: 2px;
    background: var(--ab-accent);
    font-size: 12px;
    font-weight: 700;
    letter-spacing: .08em;
    text-transform: uppercase;
    line-height: 1;
    color: var(--ab-white);
}
.ab-top h2{
    margin: 0;
    font-family: var(--ab-font);
    font-size: clamp(32px, 3.6vw, 46px);
    font-weight: 700;
    line-height: 1.2em;
    letter-spacing: -.03em;
    color: var(--ab-white);
}
.ab-top-right p{
    margin: 0 0 22px;
    max-width: 60ch;
    font-size: 18px;
    font-weight: 500;
    line-height: 1.7em;
    color: var(--ab-white);
}

/* underlined link whose underline redraws on hover */
.ab-link{
    position: relative;
    display: inline-block;
    padding-bottom: 6px;
    font-size: 15px;
    font-weight: 700;
    line-height: 1.2em;
    text-decoration: none;
    color: var(--ab-white);
}
.ab-link::after{
    content: "";
    position: absolute;
    left: 0; right: 0; bottom: 0;
    height: 2px;
    background: var(--ab-white);
    transform-origin: 100% 50%;
    transition: transform .5s var(--ab-ease);
}
.ab-link:hover{ color: var(--ab-white); }
.ab-link:hover::after{ animation: ab-underline .7s var(--ab-ease); }
.ab-link:focus-visible{ outline: 2px solid var(--ab-white); outline-offset: 5px; }
@keyframes ab-underline{
    0%  { transform: scaleX(1); transform-origin: 100% 50%; }
    45% { transform: scaleX(0); transform-origin: 100% 50%; }
    46% { transform: scaleX(0); transform-origin: 0 50%; }
    100%{ transform: scaleX(1); transform-origin: 0 50%; }
}

/* ----- stats ----- */
.ab-stats{
    display: grid;
    grid-template-columns: repeat(4, 1fr);
    gap: 24px;
    margin-top: 42px;
}
.ab-stat{
    position: relative;
    padding-left: 20px;
    transition: transform .4s var(--ab-ease);
}
.ab-stat::before{                /* the vertical rule; fills with white on hover */
    content: "";
    position: absolute;
    left: 0; top: 0;
    width: 2px;
    height: 100%;
    background: rgba(255, 255, 255, .55);
}
.ab-stat::after{
    content: "";
    position: absolute;
    left: 0; bottom: 0;
    width: 2px;
    height: 100%;
    background: var(--ab-white);
    transform: scaleY(0);
    transform-origin: 50% 100%;
    transition: transform .5s var(--ab-ease);
}
.ab-stat:hover{ transform: translateX(6px); }
.ab-stat:hover::after{ transform: scaleY(1); }

.ab-num{
    display: block;
    font-size: clamp(34px, 3.4vw, 44px);
    font-weight: 700;
    line-height: 1.15em;
    letter-spacing: -.02em;
    color: var(--ab-white);
    font-variant-numeric: tabular-nums;
}
.ab-suffix-word{ margin-left: 6px; }
.ab-label{
    display: block;
    margin-top: 4px;
    font-size: 20px;
    font-weight: 500;
    line-height: 1.3em;
    color: var(--ab-white);
}

/* ----- features ----- */
.ab-features{
    display: grid;
    grid-template-columns: repeat(4, 1fr);
    gap: 30px;
    margin-top: 64px;
}
.ab-feature{
    position: relative;
    padding-bottom: 22px;
    outline: none;
}
.ab-feature::after{              /* accent bar that grows on hover */
    content: "";
    position: absolute;
    left: 0; bottom: 0;
    width: 100%;
    height: 2px;
    background: var(--ab-divider);
}
.ab-feature::before{
    content: "";
    position: absolute;
    left: 0; bottom: 0;
    z-index: 1;
    width: 100%;
    height: 2px;
    background: var(--ab-accent);
    transform: scaleX(0);
    transform-origin: 0 50%;
    transition: transform .55s var(--ab-ease);
}
.ab-feature:hover::before,
.ab-feature:focus-visible::before{ transform: scaleX(1); }

.ab-ficon{
    display: block;
    width: 44px;
    height: 44px;
    margin-bottom: 30px;
    color: var(--ab-primary);
    transition: color .3s ease, transform .5s var(--ab-ease);
}
.ab-ficon svg{ width: 100%; height: 100%; overflow: visible; }
.ab-feature h3{
    margin: 0 0 14px;
    font-family: var(--ab-font);
    font-size: 22px;
    font-weight: 700;
    line-height: 1.2em;
    letter-spacing: -.01em;
    color: var(--ab-primary);
    transition: color .3s ease, transform .4s var(--ab-ease);
}
.ab-feature p{
    margin: 0;
    max-width: 30ch;
    font-size: 16px;
    font-weight: 500;
    line-height: 1.65em;
    /* primary at reduced opacity keeps good contrast on white;
       for your lighter --text-color use: color: var(--text-color, #9C9FA6); */
    color: rgba(21, 22, 27, .64);
}

.ab-feature:hover .ab-ficon,
.ab-feature:focus-visible .ab-ficon{ color: var(--ab-accent); transform: translateY(-4px); }
.ab-feature:hover h3,
.ab-feature:focus-visible h3{ color: var(--ab-accent); }
.ab-feature:hover .ab-ficon [pathLength],
.ab-feature:focus-visible .ab-ficon [pathLength]{ animation: ab-draw .9s ease-out both; }
.ab-feature:focus-visible{ outline: 2px solid var(--ab-accent); outline-offset: 6px; border-radius: 4px; }
@keyframes ab-draw{
    from{ stroke-dasharray: 1; stroke-dashoffset: 1; }
    to  { stroke-dasharray: 1; stroke-dashoffset: 0; }
}

/* ----- entrance: one staggered reveal, only when JS is available ----- */
.ab-js .ab-reveal{
    opacity: 0;
    translate: 0 26px;
}
.ab-js.ab-in .ab-reveal{
    opacity: 1;
    translate: 0 0;
    transition: opacity .8s var(--ab-ease), translate .9s var(--ab-ease), transform .4s var(--ab-ease);
    transition-delay: calc(var(--d) * 90ms), calc(var(--d) * 90ms), 0s;
}
.ab-js .ab-banner{ clip-path: inset(0 100% 0 0 round 18px); }
.ab-js.ab-in .ab-banner{ clip-path: inset(0 0 0 0 round 18px); transition: clip-path 1.1s var(--ab-ease); }

/* ----- responsive ----- */
@media (max-width: 991px){
    .ab-section{ padding: 70px 0; }
    .ab-banner{ padding: 34px 28px 40px; }
    .ab-top{ grid-template-columns: 1fr; gap: 24px; padding-bottom: 32px; }
    .ab-stats{ grid-template-columns: repeat(2, 1fr); gap: 34px 24px; }
    .ab-features{ grid-template-columns: repeat(2, 1fr); gap: 44px 30px; margin-top: 50px; }
}
@media (max-width: 575px){
    .ab-section{ padding: 50px 0; }
    .ab-banner{ padding: 28px 20px 34px; border-radius: 14px; }
    .ab-top-right p{ font-size: 16px; }
    .ab-label{ font-size: 16px; }
    .ab-features{ grid-template-columns: 1fr; gap: 36px; }
    .ab-feature p{ max-width: none; }
}

/* ----- reduced motion ----- */
@media (prefers-reduced-motion: reduce){
    .ab-section *, .ab-section *::before, .ab-section *::after{
        animation: none !important;
        transition-duration: .01ms !important;
        transition-delay: 0s !important;
    }
    .ab-js .ab-reveal{ opacity: 1; translate: none; }
    .ab-js .ab-banner{ clip-path: none; }
}
</style>

<script>
(function () {
    var section = document.getElementById('ab-section');
    var banner = document.getElementById('ab-banner');
    if (!section || !banner) return;

    var reduce = window.matchMedia && window.matchMedia('(prefers-reduced-motion: reduce)').matches;

    /* ---------- spotlight follows the pointer over the banner ---------- */
    if (!reduce) {
        banner.addEventListener('pointermove', function (e) {
            var r = banner.getBoundingClientRect();
            banner.style.setProperty('--mx', (e.clientX - r.left) + 'px');
            banner.style.setProperty('--my', (e.clientY - r.top) + 'px');
        });
    }

    /* ---------- count-up numbers ---------- */
    var counters = Array.prototype.slice.call(section.querySelectorAll('.ab-count'));
    function runCounters() {
        counters.forEach(function (el) {
            var target = parseFloat(el.getAttribute('data-count')) || 0;
            if (reduce) { el.textContent = target; return; }
            var start = null, dur = 1700;
            el.textContent = '0';
            function tick(ts) {
                if (start === null) start = ts;
                var p = Math.min((ts - start) / dur, 1);
                var eased = 1 - Math.pow(1 - p, 3);
                el.textContent = Math.round(target * eased);
                if (p < 1) requestAnimationFrame(tick);
            }
            requestAnimationFrame(tick);
        });
    }

    /* ---------- reveal once when scrolled into view ---------- */
    section.classList.add('ab-js');
    var done = false;
    function reveal() {
        if (done) return;
        done = true;
        section.classList.add('ab-in');
        setTimeout(runCounters, 500);
    }
    if ('IntersectionObserver' in window) {
        var io = new IntersectionObserver(function (entries) {
            if (entries[0].isIntersecting) { reveal(); io.disconnect(); }
        }, { threshold: 0.2 });
        io.observe(section);
    } else {
        reveal();
    }
})();
</script>
