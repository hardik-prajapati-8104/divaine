<!-- Trusted IT Partner Section Start -->
<section class="tp-section" id="tp-section" aria-labelledby="tp-title">
    <div class="tp-wrap">

        <!-- ===== Heading ===== -->
        <div class="tp-head">
            <span class="tp-badge tp-rise" style="--i:0">Trusted IT Partner</span>
            <h2 id="tp-title" class="tp-title tp-rise fs-2" style="--i:1">
                Technology That Keeps Your Business Moving Forward.
                <span>We help businesses operate smarter, stay connected, and grow confidently with reliable IT solutions, modern cloud technologies, proactive technical support, and security-focused digital services.</span>
            </h2>
        </div>

        <!-- ===== Image + Stat cards ===== -->
        <div class="tp-grid">

            <!-- Replace the image with your own photo (recommended ratio ~ 4:5) -->
            <figure class="tp-media">
                <img src="assets/img/images/about-us-img.jpg" alt="IT support engineers monitoring client systems" loading="lazy">
            </figure>

            <div class="tp-cards">

                <article class="tp-card tp-card--light tp-rise" style="--i:2">
                    <strong class="tp-num">24/7</strong>
                    <div class="tp-body">
                        <h3>Business Continuity</h3>
                        <p>Technology solutions designed to support reliable business operations.</p>
                    </div>
                </article>

                <article class="tp-card tp-card--dark tp-rise" style="--i:3">
                    <strong class="tp-num"><span class="tp-count" data-count="360">360</span>°</strong>
                    <div class="tp-body">
                        <h3>IT Solutions</h3>
                        <p>Integrated technology services to support your business needs.</p>
                    </div>
                </article>

                <article class="tp-card tp-card--dark tp-rise" style="--i:4">
                    <strong class="tp-num">Secure</strong>
                    <div class="tp-body">
                        <h3>Security-First Approach</h3>
                        <p>A focus on protecting business systems, data, and digital environments.</p>
                    </div>
                </article>

                <article class="tp-card tp-card--light tp-rise" style="--i:5">
                    <strong class="tp-num">Scalable</strong>
                    <div class="tp-body">
                        <h3>Future-Ready Technology</h3>
                        <p>Flexible solutions that evolve alongside your business</p>
                    </div>
                </article>

            </div>
        </div>

    </div>
</section>
<!-- Trusted IT Partner Section End -->

<style>
/* ---------- Trusted IT Partner (scoped, uses project :root variables) ---------- */
.tp-section{
    --tp-primary: var(--primary-color, #15161B);
    --tp-secondary: var(--secondary-color, #F7F8FD);
    --tp-text: var(--text-color, #9C9FA6);
    --tp-accent: var(--accent-color, rgb(255, 101, 0));
    --tp-white: var(--white-color, #FFFFFF);
    --tp-font: var(--default-font, "Manrope", sans-serif);
    --tp-ease: cubic-bezier(.22, .8, .24, 1);
    --tp-radius: 28px;
    --tp-gap: 24px;

    font-family: var(--tp-font);
    /* background: var(--tp-white); */
    padding: 90px 0;
    overflow: hidden;
}
.tp-section *,
.tp-section *::before,
.tp-section *::after{ box-sizing: border-box; }

.tp-wrap{
    width: 100%;
    max-width: 1320px;
    margin: 0 auto;
    padding: 0 15px;
}

/* ----- heading ----- */
.tp-head{
    text-align: center;
    max-width: 1100px;
    margin: 0 auto 48px;
}
.tp-badge{
    display: inline-flex;
    align-items: center;
    gap: 8px;
    font-size: 15px;
    font-weight: 500;
    line-height: 1;
    color: var(--tp-primary);
    margin-bottom: 16px;
}
.tp-badge::before{
    content: "";
    width: 8px;
    height: 8px;
    border-radius: 50%;
    background: var(--tp-accent);
}
.tp-section .tp-title{
    font-family: var(--tp-font);
    font-size: clamp(24px, 3vw, 40px);
    line-height: 1.25;
    font-weight: 700;
    letter-spacing: -0.025em;
    text-transform: none;
    color: var(--tp-primary);
    margin: 0;
    text-wrap: balance;
}
.tp-section .tp-title span{
    color: var(--tp-text);
    font-weight: 500;
}

/* ----- layout ----- */
.tp-grid{
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: var(--tp-gap);
    align-items: stretch;
}
.tp-media{
    position: relative;
    margin: 0;
    min-height: 420px;
    border-radius: var(--tp-radius);
    overflow: hidden;
    background: var(--tp-secondary);
}
.tp-media img{
    position: absolute;
    inset: 0;
    width: 100%;
    height: 100%;
    object-fit: cover;
    display: block;
    transition: scale 1.2s var(--tp-ease);
}
.tp-media:hover img{ scale: 1.04; }

.tp-cards{
    display: grid;
    grid-template-columns: 1fr 1fr;
    grid-auto-rows: 1fr;
    gap: var(--tp-gap);
}

/* ----- stat card ----- */
.tp-card{
    --tp-bg: var(--tp-secondary);
    --tp-fill: var(--tp-primary);
    --c-num: var(--tp-primary);
    --c-title: var(--tp-primary);
    --c-text: var(--tp-text);
    --h-num: var(--tp-accent);
    --h-title: var(--tp-white);
    --h-text: rgba(255, 255, 255, .78);

    position: relative;
    isolation: isolate;
    overflow: hidden;
    display: flex;
    flex-direction: column;
    justify-content: space-between;
    gap: 40px;
    min-height: 299px;
    padding: 32px;
    border-radius: var(--tp-radius);
    background: var(--tp-bg);
    transition: transform .45s var(--tp-ease), box-shadow .45s var(--tp-ease);
}
.tp-card--dark{
    --tp-bg: var(--tp-primary);
    --tp-fill: var(--tp-accent);
    --c-num: var(--tp-white);
    --c-title: var(--tp-white);
    --c-text: rgba(255, 255, 255, .85);
    --h-num: var(--tp-white);
    --h-title: var(--tp-white);
    --h-text: rgba(255, 255, 255, .95);
}

/* colour wipe that grows from the cursor entry point */
.tp-card::before{
    content: "";
    position: absolute;
    inset: 0;
    z-index: -1;
    background: var(--tp-fill);
    clip-path: circle(0% at var(--mx, 50%) var(--my, 50%));
    transition: clip-path .7s var(--tp-ease);
}

.tp-section .tp-num{
    display: block;
    font-size: clamp(30px, 3vw, 40px);
    line-height: 1.1;
    font-weight: 500;
    letter-spacing: -0.02em;
    color: var(--c-num);
    transition: color .45s ease .05s, transform .5s var(--tp-ease);
    transform-origin: left center;
}
.tp-section .tp-card h3{
    font-family: var(--tp-font);
    font-size: 24px;
    line-height: 1.2;
    font-weight: 500;
    letter-spacing: -0.01em;
    text-transform: none;
    color: var(--c-title);
    margin: 0 0 12px;
    transition: color .45s ease .05s;
}
.tp-section .tp-card p{
    font-size: 15px;
    line-height: 1.6;
    font-weight: 500;
    color: var(--c-text);
    margin: 0;
    transition: color .45s ease .05s;
}

/* ----- hover / keyboard focus ----- */
@media (hover: hover) and (pointer: fine){
    .tp-card:hover{
        transform: translateY(-6px);
        box-shadow: 0 24px 48px -16px rgba(21, 22, 27, .28);
    }
    .tp-card:hover::before{ clip-path: circle(160% at var(--mx, 50%) var(--my, 50%)); }
    .tp-card:hover .tp-num{ color: var(--h-num); transform: scale(1.06); }
    .tp-card:hover h3{ color: var(--h-title); }
    .tp-card:hover p{ color: var(--h-text); }
}

/* ----- entrance: one orchestrated sequence, runs once ----- */
.tp-js .tp-rise{
    opacity: 0;
    translate: 0 28px;
}
.tp-js .tp-media{
    clip-path: inset(0 100% 0 0 round var(--tp-radius));
}
.tp-js .tp-media img{ scale: 1.15; }

.tp-in .tp-rise{
    opacity: 1;
    translate: 0 0;
    transition: opacity .7s var(--tp-ease) calc(var(--i, 0) * 110ms),
                translate .7s var(--tp-ease) calc(var(--i, 0) * 110ms),
                transform .45s var(--tp-ease),
                box-shadow .45s var(--tp-ease);
}
.tp-in .tp-media{
    clip-path: inset(0 0 0 0 round var(--tp-radius));
    transition: clip-path 1.1s var(--tp-ease) .15s;
}
.tp-in .tp-media img{
    scale: 1;
    transition: scale 1.6s var(--tp-ease) .15s;
}
/* after the entrance, hover must respond instantly (no stagger delay) */
.tp-done .tp-rise{
    transition: transform .45s var(--tp-ease), box-shadow .45s var(--tp-ease);
}
.tp-done .tp-media img{ transition: scale 1.2s var(--tp-ease); }
.tp-done .tp-media:hover img{ scale: 1.04; }

/* ----- responsive ----- */
@media (max-width: 1199px){
    .tp-card{ padding: 26px; min-height: 270px; }
    .tp-section .tp-card h3{ font-size: 21px; }
}
@media (max-width: 991px){
    .tp-section{ padding: 60px 0; }
    .tp-head{ margin-bottom: 36px; }
    .tp-grid{ grid-template-columns: 1fr; }
    .tp-media{ min-height: 0; aspect-ratio: 16 / 10; }
    .tp-card{ min-height: 250px; }
}
@media (max-width: 575px){
    .tp-section{ padding: 50px 0; }
    .tp-cards{ grid-template-columns: 1fr; }
    .tp-card{ min-height: 0; gap: 28px; }
    .tp-media{ aspect-ratio: 4 / 3; }
}

/* ----- reduced motion ----- */
@media (prefers-reduced-motion: reduce){
    .tp-section *,
    .tp-section *::before,
    .tp-section *::after{
        transition: none !important;
        animation: none !important;
    }
    .tp-js .tp-rise{ opacity: 1; translate: 0 0; }
    .tp-js .tp-media{ clip-path: none; }
    .tp-js .tp-media img{ scale: 1; }
}
</style>

<script>
(function () {
    var section = document.getElementById('tp-section');
    if (!section) return;

    var reduce = window.matchMedia && window.matchMedia('(prefers-reduced-motion: reduce)').matches;

    /* ---------- colour wipe starts where the cursor enters / leaves ---------- */
    function setOrigin(e) {
        var r = this.getBoundingClientRect();
        this.style.setProperty('--mx', ((e.clientX - r.left) / r.width * 100) + '%');
        this.style.setProperty('--my', ((e.clientY - r.top) / r.height * 100) + '%');
    }
    Array.prototype.forEach.call(section.querySelectorAll('.tp-card'), function (card) {
        card.addEventListener('pointerenter', setOrigin);
        card.addEventListener('pointerleave', setOrigin);
    });

    /* ---------- count-up numbers ---------- */
    var counters = Array.prototype.slice.call(section.querySelectorAll('.tp-count'));
    function runCounters() {
        counters.forEach(function (el) {
            var target = parseFloat(el.getAttribute('data-count')) || 0;
            if (reduce) { el.textContent = target; return; }
            var start = null, dur = 1600;
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
    section.classList.add('tp-js');
    var done = false;
    function reveal() {
        if (done) return;
        done = true;
        section.classList.add('tp-in');
        setTimeout(runCounters, 500);
        setTimeout(function () { section.classList.add('tp-done'); }, 2000);
    }
    if ('IntersectionObserver' in window) {
        var io = new IntersectionObserver(function (entries) {
            if (entries[0].isIntersecting) { reveal(); io.disconnect(); }
        }, { threshold: 0.15 });
        io.observe(section);
    } else {
        reveal();
    }
})();
</script>