<!-- Mission Vision Values Section Start -->
<section class="mv-section container" id="mv-section" aria-labelledby="mv-title">
    <div class="mv-wrap">
        <div class="mv-panel">

            <!-- ===== Top: heading + image ===== -->
            <div class="mv-top">
                <div class="mv-intro">
                    <span class="mv-badge mv-rise" style="--i:0">Our Foundation</span>
                    <h2 id="mv-title" class="mv-title mv-rise" style="--i:1">Our Mission,<br>Vision &amp; Values</h2>
                    <p class="mv-lead mv-rise" style="--i:2">We believe technology should create opportunities, simplify business operations, and make growth achievable.</p>
                    <p>At Divaine Tech, our mission, vision, and values shape the way we think, build, and deliver. They guide our commitment to developing innovative digital solutions, building meaningful partnerships, and helping businesses succeed in an increasingly connected world.</p>
                </div>

                <!-- Replace with your own team photo (recommended ratio ~ 16:10) -->
                <figure class="mv-media">
                    <img src="assets/img/images/hero-img.jpg" alt="The Divainetech team in the office" loading="lazy">
                </figure>
            </div>

            <!-- ===== Cards ===== -->
            <div class="mv-cards">

                <!-- Mission -->
                <article class="mv-card mv-rise" style="--i:3">
                    <span class="mv-icon" aria-hidden="true">
                        <svg viewBox="0 0 48 48" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round">
                            <circle pathLength="1" cx="22" cy="26" r="15"/>
                            <circle pathLength="1" cx="22" cy="26" r="9"/>
                            <circle pathLength="1" cx="22" cy="26" r="3"/>
                            <path pathLength="1" d="M22 26L39 9M33 8l1-5 5 5-5 1"/>
                        </svg>
                    </span>
                    <div class="mv-body">
                        <h3>Our Mission</h3>
                        <p>To empower businesses through innovative, reliable, and scalable technology solutions. We aim to simplify complex challenges, enhance digital experiences, and deliver solutions that create measurable value and support sustainable business growth.</p>
                    </div>
                </article>

                <!-- Vision -->
                <article class="mv-card mv-rise" style="--i:4">
                    <span class="mv-icon" aria-hidden="true">
                        <svg viewBox="0 0 48 48" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round">
                            <path pathLength="1" d="M3 24c6-10 13-15 21-15s15 5 21 15c-6 10-13 15-21 15S9 34 3 24z"/>
                            <circle pathLength="1" cx="24" cy="24" r="7"/>
                            <circle pathLength="1" cx="24" cy="24" r="2"/>
                        </svg>
                    </span>
                    <div class="mv-body">
                        <h3>Our Vision</h3>
                        <p>To become a trusted technology partner for businesses worldwide, recognized for innovation, quality, and excellence. We envision a future where every business can leverage technology to unlock its potential and achieve greater success.</p>
                    </div>
                </article>

                <!-- Values -->
                <article class="mv-card mv-rise" style="--i:5">
                    <span class="mv-icon" aria-hidden="true">
                        <svg viewBox="0 0 48 48" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round">
                            <path pathLength="1" d="M13 6h22l8 11-19 25L5 17z"/>
                            <path pathLength="1" d="M5 17h38M17 6l-4 11 11 25M31 6l4 11-11 25"/>
                        </svg>
                    </span>
                    <div class="mv-body">
                        <h3>Our Values</h3>
                        <ul class="mv-list">
                            <li>
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><circle cx="12" cy="12" r="9"/><path d="M8 12.5l3 3 5-6"/></svg>
                                We put our clients' success at the heart of everything we do.
                            </li>

                            <li>
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><circle cx="12" cy="12" r="9"/><path d="M8 12.5l3 3 5-6"/></svg>
                                We embrace innovation and continuous improvement.
                            </li>
                            <li>
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><circle cx="12" cy="12" r="9"/><path d="M8 12.5l3 3 5-6"/></svg>
                                We believe in transparency, integrity, and accountability.
                            </li>
                        </ul>
                    </div>
                </article>

            </div>
        </div>
    </div>
</section>
<!-- Mission Vision Values Section End -->

<style>
/* ---------- Mission / Vision / Values (scoped, uses project :root variables) ---------- */
.mv-section{
    --mv-primary: var(--primary-color, #15161B);
    --mv-secondary: var(--secondary-color, #F7F8FD);
    --mv-text: var(--text-color, #9C9FA6);
    --mv-accent: var(--accent-color, rgb(255, 101, 0));
    --mv-white: var(--white-color, #FFFFFF);
    --mv-divider: var(--divider-color, #E1E4EB);
    --mv-font: var(--default-font, "Manrope", sans-serif);
    --mv-ease: cubic-bezier(.22, .8, .24, 1);
    --mv-body-text: #6b6e76; /* darker tint of --text-color for readable body copy on white */

    font-family: var(--mv-font);
    background: var(--mv-white);
    padding: 40px 0;
    overflow: hidden;
}
.mv-section *,
.mv-section *::before,
.mv-section *::after{ box-sizing: border-box; }

.mv-wrap{
    width: 100%;
    max-width: 1850px;
    margin: 0 auto;
    padding: 0 20px;
}

/* ----- dark panel ----- */
.mv-panel{
    position: relative;
    isolation: isolate;
    overflow: hidden;
    border-radius: 32px;
    padding: 80px 60px;
    background:
        radial-gradient(900px 520px at 100% 100%, rgba(255, 101, 0, .26), transparent 60%),
        radial-gradient(700px 420px at 85% 0%, rgba(255, 101, 0, .10), transparent 65%),
        var(--mv-primary);
}
/* faint grid texture for depth */
.mv-panel::before{
    content: "";
    position: absolute;
    inset: 0;
    z-index: -1;
    background-image:
        linear-gradient(rgba(255,255,255,.04) 1px, transparent 1px),
        linear-gradient(90deg, rgba(255,255,255,.04) 1px, transparent 1px);
    background-size: 64px 64px;
    -webkit-mask-image: radial-gradient(ellipse at 20% 20%, #000 0%, transparent 70%);
            mask-image: radial-gradient(ellipse at 20% 20%, #000 0%, transparent 70%);
}
.mv-top,
.mv-cards{
    max-width: 1300px;
    margin-left: auto;
    margin-right: auto;
}

/* ----- top: intro + image ----- */
.mv-top{
    display: grid;
    grid-template-columns: 1.05fr .95fr;
    gap: 60px;
    align-items: start;
    margin-bottom: 56px;
}
.mv-badge{
    display: inline-flex;
    align-items: center;
    gap: 8px;
    font-size: 15px;
    font-weight: 500;
    line-height: 1;
    color: var(--mv-white);
    margin-bottom: 18px;
}
.mv-badge::before{
    content: "";
    width: 8px;
    height: 8px;
    border-radius: 50%;
    background: var(--mv-accent);
    box-shadow: 0 0 0 4px rgba(255, 101, 0, .22);
}
.mv-section .mv-title{
    font-family: var(--mv-font);
    font-size: clamp(34px, 4.2vw, 56px);
    line-height: 1.12;
    font-weight: 700;
    letter-spacing: -0.03em;
    text-transform: none;
    color: var(--mv-white);
    margin: 0 0 24px;
}
.mv-section .mv-lead{
    max-width: 560px;
    font-size: 18px;
    line-height: 1.65;
    font-weight: 500;
    color: rgba(255, 255, 255, .82);
    margin: 0;
}

.mv-media{
    position: relative;
    margin: 0;
    aspect-ratio: 16 / 10;
    border-radius: 18px;
    overflow: hidden;
    background: rgba(255, 255, 255, .06);
    box-shadow: 0 30px 60px -20px rgba(0, 0, 0, .6);
}
.mv-media::after{
    content: "";
    position: absolute;
    inset: 0;
    border-radius: inherit;
    box-shadow: inset 0 0 0 1px rgba(255, 255, 255, .14);
    pointer-events: none;
}
.mv-media img{
    position: absolute;
    inset: 0;
    width: 100%;
    height: 100%;
    object-fit: cover;
    object-position: center 25%;
    display: block;
    transition: scale 1.2s var(--mv-ease);
}
.mv-media:hover img{ scale: 1.05; }

/* ----- cards ----- */
.mv-cards{
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 24px;
}
.mv-card{
    position: relative;
    isolation: isolate;
    overflow: hidden;
    display: flex;
    flex-direction: column;
    justify-content: space-between;
    gap: 20px;
    min-height: 266px;
    padding: 24px;
    border-radius: 16px;
    background: var(--mv-white);
    box-shadow: 0 0 0 1px rgba(255, 255, 255, .6);
    transition: transform .45s var(--mv-ease), box-shadow .45s var(--mv-ease);
}
/* cursor spotlight */
.mv-card::before{
    content: "";
    position: absolute;
    inset: 0;
    z-index: -1;
    background: radial-gradient(360px circle at var(--mx, 50%) var(--my, 0%), rgba(255, 101, 0, .13), transparent 65%);
    opacity: 0;
    transition: opacity .4s ease;
}
/* accent line drawn along the top edge */
.mv-card::after{
    content: "";
    position: absolute;
    left: 0;
    top: 0;
    width: 100%;
    height: 3px;
    background: linear-gradient(90deg, var(--mv-accent), #ffb27a);
    transform: scaleX(0);
    transform-origin: left center;
    transition: transform .6s var(--mv-ease);
}

.mv-icon{
    display: inline-flex;
    align-items: center;
    justify-content: center;
    width: 48px;
    height: 48px;
    border-radius: 10px;
    background: var(--mv-secondary);
    color: var(--mv-primary);
    transition: background-color .4s ease, color .4s ease, transform .5s var(--mv-ease);
}
.mv-icon svg{ width: 24px; height: 24px; display: block; overflow: visible; }

.mv-section .mv-card h3{
    font-family: var(--mv-font);
    font-size: 24px;
    line-height: 1.2;
    font-weight: 500;
    letter-spacing: -0.01em;
    text-transform: none;
    color: var(--mv-primary);
    margin: 0 0 10px;
    transition: color .3s ease;
}
.mv-section .mv-card p{
    font-size: 15px;
    line-height: 1.6;
    font-weight: 500;
    color: var(--mv-body-text);
    margin: 0;
}

.mv-list{
    list-style: none;
    margin: 0;
    padding: 0;
    display: grid;
    gap: 8px;
}
.mv-list li{
    display: flex;
    align-items: center;
    gap: 10px;
    font-size: 15px;
    line-height: 1.5;
    font-weight: 500;
    color: var(--mv-body-text);
    transition: transform .4s var(--mv-ease), color .3s ease;
    transition-delay: calc(var(--n, 0) * 60ms);
}
.mv-list li svg{
    flex: 0 0 auto;
    width: 17px;
    height: 17px;
    color: var(--mv-body-text);
    transition: color .3s ease;
    transition-delay: calc(var(--n, 0) * 60ms);
}
.mv-list li:nth-child(1){ --n: 0; }
.mv-list li:nth-child(2){ --n: 1; }
.mv-list li:nth-child(3){ --n: 2; }

/* ----- hover / focus (mouse only) ----- */
@media (hover: hover) and (pointer: fine){
    .mv-card:hover{
        transform: translateY(-8px);
        box-shadow: 0 28px 50px -18px rgba(0, 0, 0, .65), 0 0 0 1px rgba(255, 101, 0, .35);
    }
    .mv-card:hover::before{ opacity: 1; }
    .mv-card:hover::after{ transform: scaleX(1); }
    .mv-card:hover .mv-icon{
        background: var(--mv-accent);
        color: var(--mv-white);
        transform: rotate(-6deg) scale(1.06);
    }
    .mv-card:hover .mv-icon svg path,
    .mv-card:hover .mv-icon svg circle{
        stroke-dasharray: 1;
        stroke-dashoffset: 0;
        animation: mv-draw .9s var(--mv-ease) both;
    }
    .mv-card:hover h3{ color: var(--mv-accent); }
    .mv-card:hover .mv-list li{ transform: translateX(6px); color: var(--mv-primary); }
    .mv-card:hover .mv-list li svg{ color: var(--mv-accent); }
}
@keyframes mv-draw{
    from{ stroke-dasharray: 1; stroke-dashoffset: 1; }
    to{ stroke-dasharray: 1; stroke-dashoffset: 0; }
}

/* ----- entrance: one orchestrated sequence, runs once ----- */
.mv-js .mv-rise{
    opacity: 0;
    translate: 0 28px;
}
.mv-js .mv-media{
    opacity: 0;
    translate: 40px 0;
}
.mv-in .mv-rise{
    opacity: 1;
    translate: 0 0;
    transition: opacity .7s var(--mv-ease) calc(var(--i, 0) * 110ms),
                translate .7s var(--mv-ease) calc(var(--i, 0) * 110ms),
                transform .45s var(--mv-ease),
                box-shadow .45s var(--mv-ease);
}
.mv-in .mv-media{
    opacity: 1;
    translate: 0 0;
    transition: opacity .9s var(--mv-ease) .2s, translate .9s var(--mv-ease) .2s;
}
/* after the entrance, hover responds instantly (no stagger delay) */
.mv-done .mv-rise{
    transition: transform .45s var(--mv-ease), box-shadow .45s var(--mv-ease);
}

/* ----- responsive ----- */
@media (max-width: 1199px){
    .mv-panel{ padding: 64px 40px; }
    .mv-top{ gap: 40px; }
}
@media (max-width: 991px){
    .mv-section{ padding: 24px 0; }
    .mv-wrap{ padding: 0 12px; }
    .mv-panel{ padding: 48px 24px; border-radius: 24px; }
    .mv-top{ grid-template-columns: 1fr; margin-bottom: 36px; }
    .mv-cards{ grid-template-columns: 1fr; }
    .mv-card{ min-height: 0; gap: 40px; }
}
@media (max-width: 575px){
    .mv-section .mv-lead{ font-size: 16px; }
    .mv-section .mv-card h3{ font-size: 22px; }
}

/* ----- reduced motion ----- */
@media (prefers-reduced-motion: reduce){
    .mv-section *,
    .mv-section *::before,
    .mv-section *::after{
        transition: none !important;
        animation: none !important;
    }
    .mv-js .mv-rise,
    .mv-js .mv-media{ opacity: 1; translate: 0 0; }
}
</style>

<script>
(function () {
    var section = document.getElementById('mv-section');
    if (!section) return;

    /* ---------- spotlight follows the cursor inside each card ---------- */
    Array.prototype.forEach.call(section.querySelectorAll('.mv-card'), function (card) {
        card.addEventListener('pointermove', function (e) {
            var r = card.getBoundingClientRect();
            card.style.setProperty('--mx', (e.clientX - r.left) + 'px');
            card.style.setProperty('--my', (e.clientY - r.top) + 'px');
        });
    });

    /* ---------- reveal once when scrolled into view ---------- */
    section.classList.add('mv-js');
    var done = false;
    function reveal() {
        if (done) return;
        done = true;
        section.classList.add('mv-in');
        setTimeout(function () { section.classList.add('mv-done'); }, 1800);
    }
    if ('IntersectionObserver' in window) {
        var io = new IntersectionObserver(function (entries) {
            if (entries[0].isIntersecting) { reveal(); io.disconnect(); }
        }, { threshold: 0.12 });
        io.observe(section);
    } else {
        reveal();
    }
})();
</script>