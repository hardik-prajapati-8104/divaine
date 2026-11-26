<?php
include_once('elements/header.php')
?>

<!-- slider-area -->
<section class="slider__area fix">
    <div class="swiper-container slider__active" id="heroSlider" data-swiper-options='{
                "loop": true,
                "effect": "fade",
                "autoplay": { "delay": 4000 },
                "breakpoints": {
                    "0": { "spaceBetween": 0, "slidesPerView": 1 },
                    "375": { "spaceBetween": 0, "slidesPerView": 1 },
                    "575": { "spaceBetween": 0, "slidesPerView": 1 },
                    "768": { "spaceBetween": 0, "slidesPerView": 1 },
                    "992": { "spaceBetween": 0, "slidesPerView": 1 },
                    "1400": { "spaceBetween": 0, "slidesPerView": 1 }
                },
                "pagination": {
                    "el": ".slider-pagination",
                    "clickable": true
                }}'>
        <div class="swiper-wrapper">

            <div class="swiper-slide">
                <div class="slider__bg">
                    <div class="slider__bg-img" data-background="assets/img/slider/slider_bg01.jpg"></div>
                    <div class="container">
                        <div class="row">
                            <div class="col-xl-5 col-lg-6">
                                <div class="slider__content">
                                    <span class="sub-title">Professional IT Services</span>
                                    <h2 class="title">Delivering Technology</h2>
                                    <p>Empowering startups and established businesses with innovative IT solutions, smart digital strategies, and reliable technology that drive growth and long-term success.</p>
                                    <div class="slider__btn">
                                        <a href="about.php" class="tg-btn">Read More
                                            <svg width="10" height="10" viewBox="0 0 10 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M1 9L9 1M9 1H1M9 1V9" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round" />
                                                <path d="M1 9L9 1M9 1H1M9 1V9" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round" />
                                            </svg>
                                        </a>
                                        <a href="services.php" class="tg-btn white-btn">Explore Our Services
                                            <svg width="10" height="10" viewBox="0 0 10 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M1 9L9 1M9 1H1M9 1V9" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round" />
                                                <path d="M1 9L9 1M9 1H1M9 1V9" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round" />
                                            </svg>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="slider__shape">
                        <img src="assets/img/slider/slider_shape.svg" alt="shape">
                    </div>
                </div>
            </div>

            <div class="swiper-slide">
                <div class="slider__bg">
                    <div class="slider__bg-img" data-background="assets/img/slider/slider_bg02.jpg"></div>
                    <div class="container">
                        <div class="row">
                            <div class="col-xl-5 col-lg-6">
                                <div class="slider__content">
                                    <span class="sub-title">Custom Software Development</span>
                                    <h2 class="title">Turning Your Business Ideas</h2>
                                    <p>From custom software and web applications to mobile solutions, we build scalable digital products designed to simplify operations, improve efficiency, and accelerate your business.</p>
                                    <div class="slider__btn">
                                        <a href="about.php" class="tg-btn">Discover Our Solutions
                                            <svg width="10" height="10" viewBox="0 0 10 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M1 9L9 1M9 1H1M9 1V9" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round" />
                                                <path d="M1 9L9 1M9 1H1M9 1V9" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round" />
                                            </svg>
                                        </a>
                                        <a href="project.php" class="tg-btn white-btn">View Our Projects
                                            <svg width="10" height="10" viewBox="0 0 10 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M1 9L9 1M9 1H1M9 1V9" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round" />
                                                <path d="M1 9L9 1M9 1H1M9 1V9" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round" />
                                            </svg>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="slider__shape">
                        <img src="assets/img/slider/slider_shape.svg" alt="shape">
                    </div>
                </div>
            </div>

            <div class="swiper-slide">
                <div class="slider__bg">
                    <div class="slider__bg-img" data-background="assets/img/slider/slider_bg03.jpg"></div>
                    <div class="container">
                        <div class="row">
                            <div class="col-xl-5 col-lg-6">
                                <div class="slider__content">
                                    <span class="sub-title">Technology For Tomorrow</span>
                                    <h2 class="title">Innovate Smarter. Work Faster</h2>
                                    <p>Unlock new possibilities with AI-powered solutions, cloud technologies, and intelligent automation. We help businesses embrace innovation and stay ahead in an evolving digital world.</p>
                                    <div class="slider__btn">
                                        <a href="about.php" class="tg-btn">Explore Technology
                                            <svg width="10" height="10" viewBox="0 0 10 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M1 9L9 1M9 1H1M9 1V9" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round" />
                                                <path d="M1 9L9 1M9 1H1M9 1V9" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round" />
                                            </svg>
                                        </a>
                                        <a href="contact.php" class="tg-btn white-btn">Get A Free Consultation
                                            <svg width="10" height="10" viewBox="0 0 10 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M1 9L9 1M9 1H1M9 1V9" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round" />
                                                <path d="M1 9L9 1M9 1H1M9 1V9" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round" />
                                            </svg>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="slider__shape">
                        <img src="assets/img/slider/slider_shape.svg" alt="shape">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="slider-pagination"></div>
</section>
<!-- slider-area-end -->

<!-- brand-area -->
<div class="brand__area fix">
    <div class="brand__active swiper-container fix" id="brandSlider" data-swiper-options='{
                "loop": true,
                "autoplay": { "delay": 2000 },
                "breakpoints": {
                    "0": {
                        "spaceBetween": 10,
                        "slidesPerView": 2
                    },
                    "375": {
                        "spaceBetween": 20,
                        "slidesPerView": 2
                    },
                    "575": {
                        "spaceBetween": 20,
                        "slidesPerView": 3
                    },
                    "768": {
                        "spaceBetween": 10,
                        "slidesPerView": 4
                    },
                    "992": {
                        "spaceBetween": 20,
                        "slidesPerView": 6
                    },
                    "1200": {
                        "spaceBetween": 20,
                        "slidesPerView": 7
                    },
                    "1400": {
                        "spaceBetween": 20,
                        "slidesPerView": 9
                    }
                }}'>
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <div class="brand__item">
                    <img src="assets/img/technology/angularjs.png" alt="img">
                </div>
            </div>
            <div class="swiper-slide">
                <div class="brand__item">
                    <img src="assets/img/technology/aws.png" alt="img">
                </div>
            </div>
            <div class="swiper-slide">
                <div class="brand__item">
                    <img src="assets/img/technology/django.png" alt="img">
                </div>
            </div>
            <div class="swiper-slide">
                <div class="brand__item">
                    <img src="assets/img/technology/docker.png" alt="img">
                </div>
            </div>
            <div class="swiper-slide">
                <div class="brand__item">
                    <img src="assets/img/technology/flutter-icon.png" alt="img">
                </div>
            </div>
            <div class="swiper-slide">
                <div class="brand__item">
                    <img src="assets/img/technology/html-5.png" alt="img">
                </div>
            </div>
            <div class="swiper-slide">
                <div class="brand__item">
                    <img src="assets/img/technology/laravel.png" alt="img">
                </div>
            </div>
            <div class="swiper-slide">
                <div class="brand__item">
                    <img src="assets/img/technology/python.png" alt="img">
                </div>
            </div>
            <div class="swiper-slide">
                <div class="brand__item">
                    <img src="assets/img/technology/MySQL.png" alt="img">
                </div>
            </div>
        </div>
    </div>
</div>
<!-- brand-area-end -->


<!-- about-area -->
<section class="about__area section-pt-140 section-pb-110 fix">
    <div class="container">
        <div class="row align-items-end justify-content-center">
            <div class="col-lg-4 col-md-8 order-0 order-lg-2">
                <div class="about__img" data-sal="slide-up" data-sal-duration="700" data-sal-delay="100">
                    <img src="assets/img/images/about_img.jpg" alt="img" class="main-img">
                    <div class="experience__wrap">
                        <h2 class="count">25 <span>+</span></h2>
                        <span class="text">Years of <br> Experience</span>
                    </div>
                    <img src="assets/img/images/about_shape.svg" alt="shape" class="shape rotateme">
                </div>
            </div>
            <div class="col-lg-8">
                <div class="about__content">
                    <div class="section__title mb-15">
                        <span class="sub-title">About Our Company</span>
                        <h2 class="title">Empowering Businesses With Innovative Technology Solutions</h2>
                    </div>
                    <p>We help businesses transform ideas into impactful digital solutions through technology, innovation, and strategic thinking. From software development and digital transformation to intelligent business solutions, we deliver technology that simplifies operations, enhances productivity, and drives sustainable growth.</p>
                    <div class="about__content-inner">
                        <div class="about__content-video" data-sal="slide-right" data-sal-duration="700" data-sal-delay="100">
                            <img src="assets/img/images/video_img.jpg" alt="img">
                            <a href="https://www.youtube.com/watch?v=6mkoGSqTqFI" class="popup-video video__icon">
                                <svg width="16" height="18" viewBox="0 0 16 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M15.5 8.1341C16.1667 8.519 16.1667 9.48125 15.5 9.86615L2 17.6604C1.33333 18.0453 0.499999 17.5642 0.499999 16.7944L0.5 1.20589C0.5 0.436092 1.33333 -0.0450328 2 0.339867L15.5 8.1341Z" fill="currentColor" />
                                </svg>
                            </a>
                        </div>
                        <div class="about__list-wrap" data-sal="slide-left" data-sal-duration="700" data-sal-delay="100">
                            <div class="about__list-item">
                                <div class="icon">
                                    <i class="flaticon-inspiration"></i>
                                </div>
                                <div class="content">
                                    <h2 class="title">Innovative IT Solutions</h2>
                                    <p>Delivering smart, reliable, and scalable technology solutions that help businesses overcome challenges and achieve their goals.</p>
                                </div>
                            </div>
                            <div class="about__list-item">
                                <div class="icon">
                                    <i class="flaticon-settings"></i>
                                </div>
                                <div class="content">
                                    <h2 class="title">Digital Transformation</h2>
                                    <p>Modernizing business operations through advanced technologies, intelligent automation, and seamless digital experiences.</p>
                                </div>
                            </div>
                            <a href="contact.php" class="tg-btn black-btn">Contact With Us
                                <svg width="10" height="10" viewBox="0 0 10 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M1 9L9 1M9 1H1M9 1V9" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round" />
                                    <path d="M1 9L9 1M9 1H1M9 1V9" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- about-area-end -->

<!-- counter-area -->
<section class="counter__area section-pb-140 fix d-none">
    <div class="container">
        <div class="counter__item-wrap">
            <div class="row gutter-y-40">
                <div class="col-lg-4 col-md-4 col-6">
                    <div class="counter__item">
                        <h2 class="count"><span class="counter-number">25</span>+</h2>
                        <p>Years of Industry Experience</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-6">
                    <div class="counter__item">
                        <h2 class="count"><span class="counter-number">150</span>+</h2>
                        <p>Projects Delivered</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-6">
                    <div class="counter__item">
                        <h2 class="count"><span class="counter-number">100</span>+</h2>
                        <p>Clients & Business Partners</p>
                    </div>
                </div>


            </div>
        </div>
    </div>
</section>
<!-- counter-area-end -->

<!-- services-area -->
<!-- <section class="services__area section-bg section-py-140 fix">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-5 col-lg-6">
                        <div class="section__title text-center mb-45" data-sal="slide-up" data-sal-duration="700" data-sal-delay="100">
                            <span class="sub-title">About Our Company</span>
                            <h2 class="title">Innovative Our It Solutions And Services</h2>
                        </div>
                    </div>
                </div>
                <div class="row gutter-y-30">
                    <div class="col-lg-4 col-md-6" data-sal="slide-up" data-sal-duration="700" data-sal-delay="100">
                        <div class="services__item">
                            <div class="services__icon-wrap">
                                <div class="services__icon">
                                    <i class="flaticon-it-service"></i>
                                </div>
                            </div>
                            <div class="services__content">
                                <h2 class="title"><a href="services-details.php">IT Consulting & Strategy</a></h2>
                                <p>transforma tiveinvolves asseyour current financial situat tally synergize grantsb visualize strategic ediarey.</p>
                                <a href="services-details.php" class="tg-text-btn">Read More
                                    <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M1 11L11 1M11 1H1M11 1V11" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                        <path d="M1 11L11 1M11 1H1M11 1V11" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6" data-sal="slide-up" data-sal-duration="700" data-sal-delay="200">
                        <div class="services__item">
                            <div class="services__icon-wrap">
                                <div class="services__icon">
                                    <i class="flaticon-data-access"></i>
                                </div>
                            </div>
                            <div class="services__content">
                                <h2 class="title"><a href="services-details.php">Data & Analytics Services</a></h2>
                                <p>transforma tiveinvolves asseyour current financial situat tally synergize grantsb visualize strategic ediarey.</p>
                                <a href="services-details.php" class="tg-text-btn">Read More
                                    <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M1 11L11 1M11 1H1M11 1V11" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                        <path d="M1 11L11 1M11 1H1M11 1V11" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6" data-sal="slide-up" data-sal-duration="700" data-sal-delay="300">
                        <div class="services__item">
                            <div class="services__icon-wrap">
                                <div class="services__icon">
                                    <i class="flaticon-internet-security"></i>
                                </div>
                            </div>
                            <div class="services__content">
                                <h2 class="title"><a href="services-details.php">Cyber Security Solutions</a></h2>
                                <p>transforma tiveinvolves asseyour current financial situat tally synergize grantsb visualize strategic ediarey.</p>
                                <a href="services-details.php" class="tg-text-btn">Read More
                                    <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M1 11L11 1M11 1H1M11 1V11" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                        <path d="M1 11L11 1M11 1H1M11 1V11" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6" data-sal="slide-up" data-sal-duration="700" data-sal-delay="100">
                        <div class="services__item">
                            <div class="services__icon-wrap">
                                <div class="services__icon">
                                    <i class="flaticon-technical-support"></i>
                                </div>
                            </div>
                            <div class="services__content">
                                <h2 class="title"><a href="services-details.php">Modern IT Management System</a></h2>
                                <p>transforma tiveinvolves asseyour current financial situat tally synergize grantsb visualize strategic ediarey.</p>
                                <a href="services-details.php" class="tg-text-btn">Read More
                                    <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M1 11L11 1M11 1H1M11 1V11" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                        <path d="M1 11L11 1M11 1H1M11 1V11" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6" data-sal="slide-up" data-sal-duration="700" data-sal-delay="200">
                        <div class="services__item">
                            <div class="services__icon-wrap">
                                <div class="services__icon">
                                    <i class="flaticon-coding"></i>
                                </div>
                            </div>
                            <div class="services__content">
                                <h2 class="title"><a href="services-details.php">Web & Mobile Apps Development</a></h2>
                                <p>transforma tiveinvolves asseyour current financial situat tally synergize grantsb visualize strategic ediarey.</p>
                                <a href="services-details.php" class="tg-text-btn">Read More
                                    <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M1 11L11 1M11 1H1M11 1V11" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                        <path d="M1 11L11 1M11 1H1M11 1V11" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6" data-sal="slide-up" data-sal-duration="700" data-sal-delay="300">
                        <div class="services__item">
                            <div class="services__icon-wrap">
                                <div class="services__icon">
                                    <i class="flaticon-technology"></i>
                                </div>
                            </div>
                            <div class="services__content">
                                <h2 class="title"><a href="services-details.php">AI & Automation Solutions</a></h2>
                                <p>transforma tiveinvolves asseyour current financial situat tally synergize grantsb visualize strategic ediarey.</p>
                                <a href="services-details.php" class="tg-text-btn">Read More
                                    <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M1 11L11 1M11 1H1M11 1V11" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                        <path d="M1 11L11 1M11 1H1M11 1V11" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="services__shape">
                <img src="assets/img/images/services_shape.svg" alt="shape" class="alltuchtopdown">
            </div>
        </section> -->
<!-- services-area-end -->


<?php
$serviceFile = __DIR__ . '/data/service.json';

$serviceData = [];

if (file_exists($serviceFile)) {
    $serviceData = json_decode(file_get_contents($serviceFile), true) ?? [];
}

$listing = $serviceData['listing'] ?? [];
$services = $serviceData['services'] ?? [];

$e = function ($value) {
    return htmlspecialchars((string) $value, ENT_QUOTES, 'UTF-8');
};
?>

<!-- services-area -->
<section class="services__area section-bg section-py-140 fix">
    <div class="container">

        <!-- Section Heading -->
        <div class="row justify-content-center">
            <div class="col-xl-6 col-lg-7">
                <div class="section__title text-center mb-45">

                    <span class="sub-title">
                        <?= $e($listing['sub_title'] ?? 'Our Expertise'); ?>
                    </span>

                    <h2 class="title">
                        <?= $e($listing['heading'] ?? 'Technology Solutions That Move Your Business Forward'); ?>
                    </h2>

                </div>
            </div>
        </div>

        <!-- Services Swiper -->
        <div class="services-swiper-wrapper">

            <div class="swiper services-swiper">
                <div class="swiper-wrapper">

                    <?php if (!empty($services)): ?>

                        <?php foreach ($services as $index => $service): ?>

                            <?php
                            $slug = $service['slug'] ?? '';
                            $title = $service['title'] ?? 'Our Service';
                            $summary = $service['summary'] ?? '';
                            $iconClass = $service['icon_class'] ?? '';
                            $iconSvg = $service['icon_svg'] ?? '';

                            $serviceUrl = 'services-details.php?slug=' . urlencode($slug);
                            ?>

                            <div class="swiper-slide">

                                <div class="services__item">

                                    <div class="services__icon-wrap">
                                        <div class="services__icon">

                                            <?php if (!empty($iconClass)): ?>

                                                <i class="<?= $e($iconClass); ?>"></i>

                                            <?php elseif (!empty($iconSvg)): ?>

                                                <svg width="35"
                                                    height="35"
                                                    viewBox="0 0 24 24"
                                                    fill="none"
                                                    stroke="currentColor"
                                                    stroke-width="1.5"
                                                    stroke-linecap="round"
                                                    stroke-linejoin="round">
                                                    <?= $iconSvg; ?>
                                                </svg>

                                            <?php else: ?>

                                                <i class="flaticon-it-service"></i>

                                            <?php endif; ?>

                                        </div>
                                    </div>

                                    <div class="services__content">

                                        <h2 class="title">
                                            <a href="<?= $e($serviceUrl); ?>">
                                                <?= $e($title); ?>
                                            </a>
                                        </h2>

                                        <p>
                                            <?= $e($summary); ?>
                                        </p>

                                        <a href="<?= $e($serviceUrl); ?>"
                                            class="tg-text-btn">

                                            <?= $e($listing['read_more'] ?? 'Read More'); ?>

                                            <svg width="12"
                                                height="12"
                                                viewBox="0 0 12 12"
                                                fill="none"
                                                xmlns="http://www.w3.org/2000/svg">

                                                <path d="M1 11L11 1M11 1H1M11 1V11"
                                                    stroke="currentColor"
                                                    stroke-width="2"
                                                    stroke-linecap="round"
                                                    stroke-linejoin="round" />
                                            </svg>

                                        </a>

                                    </div>
                                </div>

                            </div>

                        <?php endforeach; ?>

                    <?php else: ?>

                        <div class="swiper-slide">
                            <p>Our services will be available soon.</p>
                        </div>

                    <?php endif; ?>

                </div>
            </div>

            <!-- Navigation -->
            <div class="services-swiper-navigation">
                <button type="button" class="services-swiper-prev"
                    aria-label="Previous services">
                    <i class="fas fa-arrow-left"></i>
                </button>

                <div class="services-swiper-pagination"></div>

                <button type="button" class="services-swiper-next"
                    aria-label="Next services">
                    <i class="fas fa-arrow-right"></i>
                </button>
            </div>

        </div>

    </div>

    <div class="services__shape">
        <img src="assets/img/images/services_shape.svg"
            alt="shape"
            class="alltuchtopdown">
    </div>

</section>


<style>
    /* Services Swiper */
    .services-swiper-wrapper {
        position: relative;
        overflow: hidden;
        padding: 5px 0 20px;
    }

    .services-swiper {
        overflow: hidden;
    }

    .services-swiper .swiper-slide {
        height: auto;
        display: flex;
    }

    .services-swiper .services__item {
        width: 100%;
        height: 100%;
    }

    /* Navigation */
    .services-swiper-navigation {
        display: flex;
        justify-content: center;
        align-items: center;
        gap: 20px;
        margin-top: 35px;
    }

    .services-swiper-prev,
    .services-swiper-next {
        width: 42px;
        height: 42px;
        border: none;
        border-radius: 50%;
        background: #ff6500;
        color: #fff;
        cursor: pointer;
        transition: all .3s ease;
    }

    .services-swiper-prev:hover,
    .services-swiper-next:hover {
        background: #151519;
    }

    .services-swiper-pagination {
        width: auto !important;
        display: flex;
        align-items: center;
        gap: 7px;
    }

    .services-swiper-pagination .swiper-pagination-bullet {
        width: 9px;
        height: 9px;
        opacity: 1;
        background: #c9c9c9;
    }

    .services-swiper-pagination .swiper-pagination-bullet-active {
        width: 25px;
        border-radius: 10px;
        background: #ff6500;
    }

    /* Mobile */
    @media (max-width: 767px) {
        .services-swiper-navigation {
            margin-top: 25px;
        }
    }
</style>

<?php include_once('elements/about-solve.php'); ?>

<!-- choose-area -->
<section class="choose__area">
    <div class="container">
        <div class="row">
            <div class="col-xl-8">
                <div class="choose__inner-wrap">
                    <div class="row align-items-center">
                        <div class="col-md-6">
                            <div class="choose__content">
                                <div class="section__title white-title mb-15">
                                    <span class="sub-title">Why Choose US</span>
                                    <h2 class="title">Delivering Smart IT Solutions That Drive Business Success</h2>
                                </div>
                                <p>We combine technology, creativity, and industry expertise to help businesses solve complex challenges and achieve their digital goals. From custom software development to advanced IT solutions, we focus on delivering reliable, scalable, and future-ready technology that creates real business value.</p>
                                <a href="about.php" class="tg-btn white-btn">See More Details
                                    <svg width="10" height="10" viewBox="0 0 10 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M1 9L9 1M9 1H1M9 1V9" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round" />
                                        <path d="M1 9L9 1M9 1H1M9 1V9" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                </a>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <ul class="choose__list list-wrap">
                                <li>
                                    <svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M29.9142 11.0033C30.4204 12.8928 28.5305 14.9239 28.2895 16.7482C28.0392 18.6401 29.31 21.0892 28.372 22.7197C27.434 24.35 24.6725 24.4711 23.1593 25.6339C21.7009 26.7586 20.8849 29.4083 18.9964 29.9144C17.108 30.4204 15.0765 28.5295 13.251 28.2886C11.3592 28.0384 8.91003 29.3092 7.27958 28.3713C5.64914 27.4332 5.52798 24.6719 4.36627 23.1584C3.24138 21.7001 0.592009 20.885 0.0857368 18.9957C-0.420555 17.1063 1.47056 15.0757 1.71164 13.2514C1.96094 11.3598 0.690114 8.91071 1.62814 7.2803C2.56617 5.6499 5.32758 5.52875 6.84086 4.3661C8.30021 3.24097 9.1152 0.591668 11.0037 0.0856724C12.8922 -0.420342 14.9247 1.47019 16.7491 1.71127C18.641 1.96154 21.0903 0.69075 22.7206 1.62875C24.3511 2.56676 24.4722 5.3281 25.6349 6.84134C26.7545 8.29583 29.4068 9.11001 29.9142 11.0033Z" fill="currentColor" />
                                        <path d="M20.8182 10.5L12.8182 18.5L9.18182 14.8636" stroke="white" stroke-width="2.18182" stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                    Tailored Technology Solutions
                                </li>

                                <li>
                                    <svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M29.9142 11.0033C30.4204 12.8928 28.5305 14.9239 28.2895 16.7482C28.0392 18.6401 29.31 21.0892 28.372 22.7197C27.434 24.35 24.6725 24.4711 23.1593 25.6339C21.7009 26.7586 20.8849 29.4083 18.9964 29.9144C17.108 30.4204 15.0765 28.5295 13.251 28.2886C11.3592 28.0384 8.91003 29.3092 7.27958 28.3713C5.64914 27.4332 5.52798 24.6719 4.36627 23.1584C3.24138 21.7001 0.592009 20.885 0.0857368 18.9957C-0.420555 17.1063 1.47056 15.0757 1.71164 13.2514C1.96094 11.3598 0.690114 8.91071 1.62814 7.2803C2.56617 5.6499 5.32758 5.52875 6.84086 4.3661C8.30021 3.24097 9.1152 0.591668 11.0037 0.0856724C12.8922 -0.420342 14.9247 1.47019 16.7491 1.71127C18.641 1.96154 21.0903 0.69075 22.7206 1.62875C24.3511 2.56676 24.4722 5.3281 25.6349 6.84134C26.7545 8.29583 29.4068 9.11001 29.9142 11.0033Z" fill="currentColor" />
                                        <path d="M20.8182 10.5L12.8182 18.5L9.18182 14.8636" stroke="white" stroke-width="2.18182" stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                    Innovation That Creates Impact
                                </li>

                                <li>
                                    <svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M29.9142 11.0033C30.4204 12.8928 28.5305 14.9239 28.2895 16.7482C28.0392 18.6401 29.31 21.0892 28.372 22.7197C27.434 24.35 24.6725 24.4711 23.1593 25.6339C21.7009 26.7586 20.8849 29.4083 18.9964 29.9144C17.108 30.4204 15.0765 28.5295 13.251 28.2886C11.3592 28.0384 8.91003 29.3092 7.27958 28.3713C5.64914 27.4332 5.52798 24.6719 4.36627 23.1584C3.24138 21.7001 0.592009 20.885 0.0857368 18.9957C-0.420555 17.1063 1.47056 15.0757 1.71164 13.2514C1.96094 11.3598 0.690114 8.91071 1.62814 7.2803C2.56617 5.6499 5.32758 5.52875 6.84086 4.3661C8.30021 3.24097 9.1152 0.591668 11.0037 0.0856724C12.8922 -0.420342 14.9247 1.47019 16.7491 1.71127C18.641 1.96154 21.0903 0.69075 22.7206 1.62875C24.3511 2.56676 24.4722 5.3281 25.6349 6.84134C26.7545 8.29583 29.4068 9.11001 29.9142 11.0033Z" fill="currentColor" />
                                        <path d="M20.8182 10.5L12.8182 18.5L9.18182 14.8636" stroke="white" stroke-width="2.18182" stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                    Intelligent & Efficient Operations
                                </li>

                                <li>
                                    <svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M29.9142 11.0033C30.4204 12.8928 28.5305 14.9239 28.2895 16.7482C28.0392 18.6401 29.31 21.0892 28.372 22.7197C27.434 24.35 24.6725 24.4711 23.1593 25.6339C21.7009 26.7586 20.8849 29.4083 18.9964 29.9144C17.108 30.4204 15.0765 28.5295 13.251 28.2886C11.3592 28.0384 8.91003 29.3092 7.27958 28.3713C5.64914 27.4332 5.52798 24.6719 4.36627 23.1584C3.24138 21.7001 0.592009 20.885 0.0857368 18.9957C-0.420555 17.1063 1.47056 15.0757 1.71164 13.2514C1.96094 11.3598 0.690114 8.91071 1.62814 7.2803C2.56617 5.6499 5.32758 5.52875 6.84086 4.3661C8.30021 3.24097 9.1152 0.591668 11.0037 0.0856724C12.8922 -0.420342 14.9247 1.47019 16.7491 1.71127C18.641 1.96154 21.0903 0.69075 22.7206 1.62875C24.3511 2.56676 24.4722 5.3281 25.6349 6.84134C26.7545 8.29583 29.4068 9.11001 29.9142 11.0033Z" fill="currentColor" />
                                        <path d="M20.8182 10.5L12.8182 18.5L9.18182 14.8636" stroke="white" stroke-width="2.18182" stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                    Reliable Support & Partnership
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="choose__img" data-background="assets/img/slider/slider_bg03.jpg"></div>
    <div class="choose__shape">
        <img src="assets/img/images/choose_shape.png" alt="shape">
    </div>
</section>
<!-- choose-area-end -->

<!-- counter-area -->
<section class="counter__area-two">
    <div class="container">
        <div class="row gutter-y-30 justify-content-center">

            <div class="col-lg-3 col-md-4 col-6">
                <div class="counter__item-two">
                    <div class="counter__icon">
                        <svg width="98" height="77" viewBox="0 0 98 77"
                            fill="none" xmlns="http://www.w3.org/2000/svg">

                            <!-- Project Document -->
                            <path d="M27 7H57L72 22V66C72 69 69 72 66 72H27C24 72 22 70 22 67V12C22 9 24 7 27 7Z"
                                stroke="#fff" stroke-width="2.5"
                                stroke-linecap="round" stroke-linejoin="round"/>

                            <!-- Document Fold -->
                            <path d="M57 7V19C57 21 59 23 61 23H72"
                                stroke="#fff" stroke-width="2.5"
                                stroke-linecap="round" stroke-linejoin="round"/>

                            <!-- Project Details -->
                            <path d="M33 32H57M33 42H52"
                                stroke="#fff" stroke-width="2.5"
                                stroke-linecap="round"/>

                            <!-- Completion Circle -->
                            <circle cx="67" cy="56" r="17"
                                    fill="none" stroke="#fff" stroke-width="2.5"/>

                            <!-- Checkmark -->
                            <path d="M59 56L65 62L76 49"
                                stroke="#fff" stroke-width="3"
                                stroke-linecap="round" stroke-linejoin="round"/>

                            <!-- Decorative Stars -->
                            <path d="M14 20L16 24L20 26L16 28L14 32L12 28L8 26L12 24L14 20Z"
                                fill="#fff"/>

                            <path d="M82 8L84 12L88 14L84 16L82 20L80 16L76 14L80 12L82 8Z"
                                fill="#fff"/>

                        </svg>
                    </div>
                    <div class="counter__content">
                        <h2 class="count"><span class="counter-number">25</span>+</h2>
                        <p>Projects Delivered</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-4 col-6">
                <div class="counter__item-two">
                    <div class="counter__icon">
                        <svg width="82" height="77" viewBox="0 0 82 77"
                            fill="none" xmlns="http://www.w3.org/2000/svg">

                            <!-- Main Microchip -->
                            <rect x="21" y="16" width="40" height="40"
                                rx="7" stroke="#ffffff" stroke-width="2.5"/>

                            <rect x="29" y="24" width="24" height="24"
                                rx="4" stroke="#ffffff" stroke-width="2"/>

                            <!-- Circuit Core -->
                            <path d="M35 36L40 41L48 31"
                                stroke="#ffffff" stroke-width="2.5"
                                stroke-linecap="round" stroke-linejoin="round"/>

                            <!-- Top Pins -->
                            <path d="M31 16V9M41 16V9M51 16V9"
                                stroke="#ffffff" stroke-width="2.5"
                                stroke-linecap="round"/>

                            <!-- Bottom Pins -->
                            <path d="M31 56V63M41 56V63M51 56V63"
                                stroke="#ffffff" stroke-width="2.5"
                                stroke-linecap="round"/>

                            <!-- Left Pins -->
                            <path d="M21 26H14M21 36H14M21 46H14"
                                stroke="#ffffff" stroke-width="2.5"
                                stroke-linecap="round"/>

                            <!-- Right Pins -->
                            <path d="M61 26H68M61 36H68M61 46H68"
                                stroke="#ffffff" stroke-width="2.5"
                                stroke-linecap="round"/>

                            <!-- Connection Nodes -->
                            <circle cx="14" cy="26" r="2" fill="#ffffff"/>
                            <circle cx="68" cy="46" r="2" fill="#ffffff"/>
                            <circle cx="41" cy="9" r="2" fill="#ffffff"/>
                            <circle cx="51" cy="63" r="2" fill="#ffffff"/>

                        </svg>
                    </div>
                    <div class="counter__content">
                        <h2 class="count"><span class="counter-number">15</span>+</h2>
                        <p>Technology Solutions</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-4 col-6">
                <div class="counter__item-two">
                    <div class="counter__icon">
                        <svg width="84" height="84" viewBox="0 0 84 84"
                            fill="none" xmlns="http://www.w3.org/2000/svg">

                            <!-- Globe -->
                            <circle cx="42" cy="39" r="29"
                                    stroke="#fff" stroke-width="2.5"/>

                            <!-- Longitude -->
                            <path d="M42 10C32 19 27 29 27 39C27 49 32 59 42 68"
                                stroke="#fff" stroke-width="2.2"
                                stroke-linecap="round"/>

                            <path d="M42 10C52 19 57 29 57 39C57 49 52 59 42 68"
                                stroke="#fff" stroke-width="2.2"
                                stroke-linecap="round"/>

                            <!-- Latitude -->
                            <path d="M15 29H69M13 39H71M15 49H69"
                                stroke="#fff" stroke-width="2.2"
                                stroke-linecap="round"/>

                            <!-- Industry Network Nodes -->
                            <circle cx="42" cy="10" r="4"
                                    fill="#FF6500" stroke="#fff" stroke-width="2"/>

                            <circle cx="13" cy="39" r="4"
                                    fill="#FF6500" stroke="#fff" stroke-width="2"/>

                            <circle cx="71" cy="39" r="4"
                                    fill="#FF6500" stroke="#fff" stroke-width="2"/>

                            <!-- Expertise Badge -->
                            <path d="M58 55L70 59V68C70 76 64 81 58 83C52 81 46 76 46 68V59L58 55Z"
                                fill="#FF6500" stroke="#fff" stroke-width="2"
                                stroke-linejoin="round"/>

                            <path d="M53 68L57 72L64 64"
                                stroke="#fff" stroke-width="2.5"
                                stroke-linecap="round" stroke-linejoin="round"/>

                        </svg>
                    </div>
                    <div class="counter__content">
                        <h2 class="count"><span class="counter-number">10</span>+</h2>
                        <p>Industry Expertise</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-4 col-6">
                <div class="counter__item-two">
                    <div class="counter__icon">
                        <svg width="77" height="72" viewBox="0 0 77 72"
                            fill="none" xmlns="http://www.w3.org/2000/svg">

                            <!-- Headset Arc -->
                            <path d="M12 38V33C12 18.36 23.86 6.5 38.5 6.5C53.14 6.5 65 18.36 65 33V38"
                                stroke="#fff" stroke-width="3"
                                stroke-linecap="round"/>

                            <!-- Left Ear Cup -->
                            <rect x="7" y="34" width="13" height="21"
                                rx="5" stroke="#fff" stroke-width="3"/>

                            <!-- Right Ear Cup -->
                            <rect x="57" y="34" width="13" height="21"
                                rx="5" stroke="#fff" stroke-width="3"/>

                            <!-- Microphone -->
                            <path d="M63.5 55V57C63.5 63.08 58.58 68 52.5 68H44"
                                stroke="#fff" stroke-width="3"
                                stroke-linecap="round"/>

                            <rect x="36" y="63" width="10" height="8"
                                rx="3" stroke="#fff" stroke-width="2.5"/>

                            <!-- Sound Waves -->
                            <path d="M27 29C29 25 33 23 38 23"
                                stroke="#fff" stroke-width="2"
                                stroke-linecap="round"/>

                            <path d="M50 29C48 25 44 23 39 23"
                                stroke="#fff" stroke-width="2"
                                stroke-linecap="round"/>

                            <!-- Center Support Indicator -->
                            <circle cx="38.5" cy="15" r="2.5" fill="#fff"/>

                        </svg>
                    </div>
                    <div class="counter__content">
                        <h2 class="count">24/7</h2>
                        <p>Technical Assistance</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- counter-area-end -->

<!-- section-line -->
<div class="section__line">
    <span class="line"></span>
    <span class="line"></span>
    <span class="line"></span>
    <span class="line"></span>
</div>
<!-- section-line-end -->

<!-- team-area -->
<section class="team__area section-bg section-py-140">
    <div class="container">
        <div class="row">
            <div class="col-lg-5">
                <div class="team__content-wrap position-sticky">
                    <div class="section__title mb-20">
                        <span class="sub-title">Our Team Members</span>
                        <h2 class="title">See Our IT Professional Staff For you</h2>
                    </div>
                    <p>transforma tiveinvolves asseyour current inancial situat synergize grantsbvisualize strategic ediarey.</p>
                    <a href="team.php" class="tg-btn">See All Members
                        <svg width="10" height="10" viewBox="0 0 10 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M1 9L9 1M9 1H1M9 1V9" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M1 9L9 1M9 1H1M9 1V9" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </a>
                </div>
            </div>
            <div class="col-lg-7">
                <div class="team__item-wrap">
                    <div class="row gutter-80 gutter-y-40">
                        <div class="col-sm-6">
                            <div class="team__item active">
                                <div class="team__thumb">
                                    <a href="team-details.php"><img src="assets/img/team/team_img01.jpg" alt="img"></a>
                                    <ul class="list-wrap team__social">
                                        <li>
                                            <a href="https://www.facebook.com/" target="_blank">
                                                <svg width="11" height="20" viewBox="0 0 11 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M9.86031 11.25L10.4075 7.63046H6.9863V5.28164C6.9863 4.2914 7.46421 3.32617 8.99646 3.32617H10.5518V0.244531C10.5518 0.244531 9.14037 0 7.7909 0C4.97345 0 3.13183 1.73359 3.13183 4.87187V7.63046H0V11.25H3.13183V20H6.9863V11.25H9.86031Z" fill="currentColor" />
                                                </svg>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="https://x.com/" target="_blank">
                                                <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M10.2337 7.28122L16.6351 0H15.118L9.55989 6.32204L5.12043 0H0L6.71329 9.56016L0 17.1955H1.51707L7.38684 10.5192L12.0751 17.1955H17.1955L10.2333 7.28122H10.2337ZM8.15595 9.64426L2.06363 1.11744H4.39374L15.1187 16.1288H12.7889L8.15595 9.64466V9.64426Z" fill="currentColor" />
                                                </svg>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="https://www.instagram.com/" target="_blank">
                                                <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M8.79512 4.29904C6.29988 4.29904 4.28722 6.31911 4.28722 8.82352C4.28722 11.3279 6.29988 13.348 8.79512 13.348C11.2904 13.348 13.303 11.3279 13.303 8.82352C13.303 6.31911 11.2904 4.29904 8.79512 4.29904ZM8.79512 11.765C7.18263 11.765 5.86439 10.4459 5.86439 8.82352C5.86439 7.20117 7.17871 5.88202 8.79512 5.88202C10.4115 5.88202 11.7258 7.20117 11.7258 8.82352C11.7258 10.4459 10.4076 11.765 8.79512 11.765ZM14.5389 4.11397C14.5389 4.70069 14.0681 5.16929 13.4874 5.16929C12.9028 5.16929 12.436 4.69676 12.436 4.11397C12.436 3.53118 12.9068 3.05865 13.4874 3.05865C14.0681 3.05865 14.5389 3.53118 14.5389 4.11397ZM17.5245 5.18504C17.4578 3.77138 17.1361 2.51918 16.1043 1.48749C15.0764 0.455795 13.8287 0.132899 12.4203 0.0620196C10.9686 -0.0206732 6.61767 -0.0206732 5.16604 0.0620196C3.76149 0.128961 2.51387 0.451857 1.48204 1.48355C0.450202 2.51524 0.132412 3.76745 0.0617924 5.1811C-0.0205975 6.63807 -0.0205975 11.005 0.0617924 12.462C0.128489 13.8757 0.450202 15.1279 1.48204 16.1596C2.51387 17.1912 3.75757 17.5141 5.16604 17.585C6.61767 17.6677 10.9686 17.6677 12.4203 17.585C13.8287 17.5181 15.0764 17.1952 16.1043 16.1596C17.1322 15.1279 17.4539 13.8757 17.5245 12.462C17.6069 11.005 17.6069 6.64201 17.5245 5.18504ZM15.6492 14.0253C15.3432 14.7971 14.7507 15.3917 13.9778 15.7028C12.8205 16.1635 10.0741 16.0572 8.79512 16.0572C7.51611 16.0572 4.76586 16.1596 3.6124 15.7028C2.84343 15.3956 2.25101 14.801 1.94107 14.0253C1.48204 12.8637 1.58797 10.1072 1.58797 8.82352C1.58797 7.53981 1.48596 4.77945 1.94107 3.62175C2.24709 2.84995 2.83951 2.25535 3.6124 1.94427C4.76978 1.48355 7.51611 1.58987 8.79512 1.58987C10.0741 1.58987 12.8244 1.48749 13.9778 1.94427C14.7468 2.25141 15.3392 2.84601 15.6492 3.62175C16.1082 4.78339 16.0023 7.53981 16.0023 8.82352C16.0023 10.1072 16.1082 12.8676 15.6492 14.0253Z" fill="currentColor" />
                                                </svg>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="https://www.pinterest.com/" target="_blank">
                                                <svg width="16" height="20" viewBox="0 0 16 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M8.09703 0C4.0247 0 0 2.74089 0 7.1768C0 9.99783 1.57178 11.6007 2.52437 11.6007C2.91731 11.6007 3.14355 10.4947 3.14355 10.1822C3.14355 9.8095 2.20287 9.01608 2.20287 7.46532C2.20287 4.24357 4.63198 1.9595 7.77553 1.9595C10.4785 1.9595 12.479 3.51026 12.479 6.35934C12.479 8.48714 11.6335 12.4783 8.89483 12.4783C7.90651 12.4783 7.06109 11.757 7.06109 10.7231C7.06109 9.20843 8.10894 7.74181 8.10894 6.17902C8.10894 3.52629 4.38192 4.00715 4.38192 7.21287C4.38192 7.88607 4.46527 8.6314 4.76296 9.24449C4.21522 11.6247 3.09592 15.1711 3.09592 17.6234C3.09592 18.3808 3.20309 19.1261 3.27453 19.8835C3.40949 20.0357 3.34201 20.0197 3.5484 19.9436C5.54885 17.1786 5.4774 16.6377 6.38237 13.0192C6.87057 13.9569 8.13275 14.4618 9.13297 14.4618C13.3482 14.4618 15.2415 10.3144 15.2415 6.57573C15.2415 2.59663 11.836 0 8.09703 0Z" fill="currentColor" />
                                                </svg>
                                            </a>
                                        </li>
                                    </ul>
                                    <div class="shape">
                                        <svg width="173" height="124" viewBox="0 0 173 124" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M8 173C13.6667 148.667 41 98.8 105 94C185 88 61 11 216 8" stroke="currentColor" stroke-width="15" />
                                        </svg>
                                    </div>
                                </div>
                                <div class="team__content">
                                    <h2 class="title"><a href="team-details.php">Ralph Edwards</a></h2>
                                    <span>Sr. Software Engineer</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="team__item">
                                <div class="team__thumb">
                                    <a href="team-details.php"><img src="assets/img/team/team_img02.jpg" alt="img"></a>
                                    <ul class="list-wrap team__social">
                                        <li>
                                            <a href="https://www.facebook.com/" target="_blank">
                                                <svg width="11" height="20" viewBox="0 0 11 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M9.86031 11.25L10.4075 7.63046H6.9863V5.28164C6.9863 4.2914 7.46421 3.32617 8.99646 3.32617H10.5518V0.244531C10.5518 0.244531 9.14037 0 7.7909 0C4.97345 0 3.13183 1.73359 3.13183 4.87187V7.63046H0V11.25H3.13183V20H6.9863V11.25H9.86031Z" fill="currentColor" />
                                                </svg>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="https://x.com/" target="_blank">
                                                <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M10.2337 7.28122L16.6351 0H15.118L9.55989 6.32204L5.12043 0H0L6.71329 9.56016L0 17.1955H1.51707L7.38684 10.5192L12.0751 17.1955H17.1955L10.2333 7.28122H10.2337ZM8.15595 9.64426L2.06363 1.11744H4.39374L15.1187 16.1288H12.7889L8.15595 9.64466V9.64426Z" fill="currentColor" />
                                                </svg>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="https://www.instagram.com/" target="_blank">
                                                <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M8.79512 4.29904C6.29988 4.29904 4.28722 6.31911 4.28722 8.82352C4.28722 11.3279 6.29988 13.348 8.79512 13.348C11.2904 13.348 13.303 11.3279 13.303 8.82352C13.303 6.31911 11.2904 4.29904 8.79512 4.29904ZM8.79512 11.765C7.18263 11.765 5.86439 10.4459 5.86439 8.82352C5.86439 7.20117 7.17871 5.88202 8.79512 5.88202C10.4115 5.88202 11.7258 7.20117 11.7258 8.82352C11.7258 10.4459 10.4076 11.765 8.79512 11.765ZM14.5389 4.11397C14.5389 4.70069 14.0681 5.16929 13.4874 5.16929C12.9028 5.16929 12.436 4.69676 12.436 4.11397C12.436 3.53118 12.9068 3.05865 13.4874 3.05865C14.0681 3.05865 14.5389 3.53118 14.5389 4.11397ZM17.5245 5.18504C17.4578 3.77138 17.1361 2.51918 16.1043 1.48749C15.0764 0.455795 13.8287 0.132899 12.4203 0.0620196C10.9686 -0.0206732 6.61767 -0.0206732 5.16604 0.0620196C3.76149 0.128961 2.51387 0.451857 1.48204 1.48355C0.450202 2.51524 0.132412 3.76745 0.0617924 5.1811C-0.0205975 6.63807 -0.0205975 11.005 0.0617924 12.462C0.128489 13.8757 0.450202 15.1279 1.48204 16.1596C2.51387 17.1912 3.75757 17.5141 5.16604 17.585C6.61767 17.6677 10.9686 17.6677 12.4203 17.585C13.8287 17.5181 15.0764 17.1952 16.1043 16.1596C17.1322 15.1279 17.4539 13.8757 17.5245 12.462C17.6069 11.005 17.6069 6.64201 17.5245 5.18504ZM15.6492 14.0253C15.3432 14.7971 14.7507 15.3917 13.9778 15.7028C12.8205 16.1635 10.0741 16.0572 8.79512 16.0572C7.51611 16.0572 4.76586 16.1596 3.6124 15.7028C2.84343 15.3956 2.25101 14.801 1.94107 14.0253C1.48204 12.8637 1.58797 10.1072 1.58797 8.82352C1.58797 7.53981 1.48596 4.77945 1.94107 3.62175C2.24709 2.84995 2.83951 2.25535 3.6124 1.94427C4.76978 1.48355 7.51611 1.58987 8.79512 1.58987C10.0741 1.58987 12.8244 1.48749 13.9778 1.94427C14.7468 2.25141 15.3392 2.84601 15.6492 3.62175C16.1082 4.78339 16.0023 7.53981 16.0023 8.82352C16.0023 10.1072 16.1082 12.8676 15.6492 14.0253Z" fill="currentColor" />
                                                </svg>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="https://www.pinterest.com/" target="_blank">
                                                <svg width="16" height="20" viewBox="0 0 16 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M8.09703 0C4.0247 0 0 2.74089 0 7.1768C0 9.99783 1.57178 11.6007 2.52437 11.6007C2.91731 11.6007 3.14355 10.4947 3.14355 10.1822C3.14355 9.8095 2.20287 9.01608 2.20287 7.46532C2.20287 4.24357 4.63198 1.9595 7.77553 1.9595C10.4785 1.9595 12.479 3.51026 12.479 6.35934C12.479 8.48714 11.6335 12.4783 8.89483 12.4783C7.90651 12.4783 7.06109 11.757 7.06109 10.7231C7.06109 9.20843 8.10894 7.74181 8.10894 6.17902C8.10894 3.52629 4.38192 4.00715 4.38192 7.21287C4.38192 7.88607 4.46527 8.6314 4.76296 9.24449C4.21522 11.6247 3.09592 15.1711 3.09592 17.6234C3.09592 18.3808 3.20309 19.1261 3.27453 19.8835C3.40949 20.0357 3.34201 20.0197 3.5484 19.9436C5.54885 17.1786 5.4774 16.6377 6.38237 13.0192C6.87057 13.9569 8.13275 14.4618 9.13297 14.4618C13.3482 14.4618 15.2415 10.3144 15.2415 6.57573C15.2415 2.59663 11.836 0 8.09703 0Z" fill="currentColor" />
                                                </svg>
                                            </a>
                                        </li>
                                    </ul>
                                    <div class="shape">
                                        <svg width="122" height="102" viewBox="0 0 122 102" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M7.00003 126.219C32.9035 88.7291 93.7711 25.303 130.014 71.5137C166.256 117.724 110.67 96.5588 78.346 80.1997C47.6437 58.7487 26.4529 14.1843 187.308 7.5348" stroke="currentColor" stroke-width="15" />
                                        </svg>
                                    </div>
                                </div>
                                <div class="team__content">
                                    <h2 class="title"><a href="team-details.php">Wade Warren</a></h2>
                                    <span>Sr. Software Engineer</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="team__item">
                                <div class="team__thumb">
                                    <a href="team-details.php"><img src="assets/img/team/team_img03.jpg" alt="img"></a>
                                    <ul class="list-wrap team__social">
                                        <li>
                                            <a href="https://www.facebook.com/" target="_blank">
                                                <svg width="11" height="20" viewBox="0 0 11 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M9.86031 11.25L10.4075 7.63046H6.9863V5.28164C6.9863 4.2914 7.46421 3.32617 8.99646 3.32617H10.5518V0.244531C10.5518 0.244531 9.14037 0 7.7909 0C4.97345 0 3.13183 1.73359 3.13183 4.87187V7.63046H0V11.25H3.13183V20H6.9863V11.25H9.86031Z" fill="currentColor" />
                                                </svg>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="https://x.com/" target="_blank">
                                                <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M10.2337 7.28122L16.6351 0H15.118L9.55989 6.32204L5.12043 0H0L6.71329 9.56016L0 17.1955H1.51707L7.38684 10.5192L12.0751 17.1955H17.1955L10.2333 7.28122H10.2337ZM8.15595 9.64426L2.06363 1.11744H4.39374L15.1187 16.1288H12.7889L8.15595 9.64466V9.64426Z" fill="currentColor" />
                                                </svg>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="https://www.instagram.com/" target="_blank">
                                                <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M8.79512 4.29904C6.29988 4.29904 4.28722 6.31911 4.28722 8.82352C4.28722 11.3279 6.29988 13.348 8.79512 13.348C11.2904 13.348 13.303 11.3279 13.303 8.82352C13.303 6.31911 11.2904 4.29904 8.79512 4.29904ZM8.79512 11.765C7.18263 11.765 5.86439 10.4459 5.86439 8.82352C5.86439 7.20117 7.17871 5.88202 8.79512 5.88202C10.4115 5.88202 11.7258 7.20117 11.7258 8.82352C11.7258 10.4459 10.4076 11.765 8.79512 11.765ZM14.5389 4.11397C14.5389 4.70069 14.0681 5.16929 13.4874 5.16929C12.9028 5.16929 12.436 4.69676 12.436 4.11397C12.436 3.53118 12.9068 3.05865 13.4874 3.05865C14.0681 3.05865 14.5389 3.53118 14.5389 4.11397ZM17.5245 5.18504C17.4578 3.77138 17.1361 2.51918 16.1043 1.48749C15.0764 0.455795 13.8287 0.132899 12.4203 0.0620196C10.9686 -0.0206732 6.61767 -0.0206732 5.16604 0.0620196C3.76149 0.128961 2.51387 0.451857 1.48204 1.48355C0.450202 2.51524 0.132412 3.76745 0.0617924 5.1811C-0.0205975 6.63807 -0.0205975 11.005 0.0617924 12.462C0.128489 13.8757 0.450202 15.1279 1.48204 16.1596C2.51387 17.1912 3.75757 17.5141 5.16604 17.585C6.61767 17.6677 10.9686 17.6677 12.4203 17.585C13.8287 17.5181 15.0764 17.1952 16.1043 16.1596C17.1322 15.1279 17.4539 13.8757 17.5245 12.462C17.6069 11.005 17.6069 6.64201 17.5245 5.18504ZM15.6492 14.0253C15.3432 14.7971 14.7507 15.3917 13.9778 15.7028C12.8205 16.1635 10.0741 16.0572 8.79512 16.0572C7.51611 16.0572 4.76586 16.1596 3.6124 15.7028C2.84343 15.3956 2.25101 14.801 1.94107 14.0253C1.48204 12.8637 1.58797 10.1072 1.58797 8.82352C1.58797 7.53981 1.48596 4.77945 1.94107 3.62175C2.24709 2.84995 2.83951 2.25535 3.6124 1.94427C4.76978 1.48355 7.51611 1.58987 8.79512 1.58987C10.0741 1.58987 12.8244 1.48749 13.9778 1.94427C14.7468 2.25141 15.3392 2.84601 15.6492 3.62175C16.1082 4.78339 16.0023 7.53981 16.0023 8.82352C16.0023 10.1072 16.1082 12.8676 15.6492 14.0253Z" fill="currentColor" />
                                                </svg>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="https://www.pinterest.com/" target="_blank">
                                                <svg width="16" height="20" viewBox="0 0 16 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M8.09703 0C4.0247 0 0 2.74089 0 7.1768C0 9.99783 1.57178 11.6007 2.52437 11.6007C2.91731 11.6007 3.14355 10.4947 3.14355 10.1822C3.14355 9.8095 2.20287 9.01608 2.20287 7.46532C2.20287 4.24357 4.63198 1.9595 7.77553 1.9595C10.4785 1.9595 12.479 3.51026 12.479 6.35934C12.479 8.48714 11.6335 12.4783 8.89483 12.4783C7.90651 12.4783 7.06109 11.757 7.06109 10.7231C7.06109 9.20843 8.10894 7.74181 8.10894 6.17902C8.10894 3.52629 4.38192 4.00715 4.38192 7.21287C4.38192 7.88607 4.46527 8.6314 4.76296 9.24449C4.21522 11.6247 3.09592 15.1711 3.09592 17.6234C3.09592 18.3808 3.20309 19.1261 3.27453 19.8835C3.40949 20.0357 3.34201 20.0197 3.5484 19.9436C5.54885 17.1786 5.4774 16.6377 6.38237 13.0192C6.87057 13.9569 8.13275 14.4618 9.13297 14.4618C13.3482 14.4618 15.2415 10.3144 15.2415 6.57573C15.2415 2.59663 11.836 0 8.09703 0Z" fill="currentColor" />
                                                </svg>
                                            </a>
                                        </li>
                                    </ul>
                                    <div class="shape">
                                        <svg width="122" height="102" viewBox="0 0 122 102" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M7.00003 126.219C32.9035 88.7291 93.7711 25.303 130.014 71.5137C166.256 117.724 110.67 96.5588 78.346 80.1997C47.6437 58.7487 26.4529 14.1843 187.308 7.5348" stroke="currentColor" stroke-width="15" />
                                        </svg>
                                    </div>
                                </div>
                                <div class="team__content">
                                    <h2 class="title"><a href="team-details.php">Jenny Wilson</a></h2>
                                    <span>Sr. Software Engineer</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="team__item">
                                <div class="team__thumb">
                                    <a href="team-details.php"><img src="assets/img/team/team_img04.jpg" alt="img"></a>
                                    <ul class="list-wrap team__social">
                                        <li>
                                            <a href="https://www.facebook.com/" target="_blank">
                                                <svg width="11" height="20" viewBox="0 0 11 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M9.86031 11.25L10.4075 7.63046H6.9863V5.28164C6.9863 4.2914 7.46421 3.32617 8.99646 3.32617H10.5518V0.244531C10.5518 0.244531 9.14037 0 7.7909 0C4.97345 0 3.13183 1.73359 3.13183 4.87187V7.63046H0V11.25H3.13183V20H6.9863V11.25H9.86031Z" fill="currentColor" />
                                                </svg>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="https://x.com/" target="_blank">
                                                <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M10.2337 7.28122L16.6351 0H15.118L9.55989 6.32204L5.12043 0H0L6.71329 9.56016L0 17.1955H1.51707L7.38684 10.5192L12.0751 17.1955H17.1955L10.2333 7.28122H10.2337ZM8.15595 9.64426L2.06363 1.11744H4.39374L15.1187 16.1288H12.7889L8.15595 9.64466V9.64426Z" fill="currentColor" />
                                                </svg>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="https://www.instagram.com/" target="_blank">
                                                <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M8.79512 4.29904C6.29988 4.29904 4.28722 6.31911 4.28722 8.82352C4.28722 11.3279 6.29988 13.348 8.79512 13.348C11.2904 13.348 13.303 11.3279 13.303 8.82352C13.303 6.31911 11.2904 4.29904 8.79512 4.29904ZM8.79512 11.765C7.18263 11.765 5.86439 10.4459 5.86439 8.82352C5.86439 7.20117 7.17871 5.88202 8.79512 5.88202C10.4115 5.88202 11.7258 7.20117 11.7258 8.82352C11.7258 10.4459 10.4076 11.765 8.79512 11.765ZM14.5389 4.11397C14.5389 4.70069 14.0681 5.16929 13.4874 5.16929C12.9028 5.16929 12.436 4.69676 12.436 4.11397C12.436 3.53118 12.9068 3.05865 13.4874 3.05865C14.0681 3.05865 14.5389 3.53118 14.5389 4.11397ZM17.5245 5.18504C17.4578 3.77138 17.1361 2.51918 16.1043 1.48749C15.0764 0.455795 13.8287 0.132899 12.4203 0.0620196C10.9686 -0.0206732 6.61767 -0.0206732 5.16604 0.0620196C3.76149 0.128961 2.51387 0.451857 1.48204 1.48355C0.450202 2.51524 0.132412 3.76745 0.0617924 5.1811C-0.0205975 6.63807 -0.0205975 11.005 0.0617924 12.462C0.128489 13.8757 0.450202 15.1279 1.48204 16.1596C2.51387 17.1912 3.75757 17.5141 5.16604 17.585C6.61767 17.6677 10.9686 17.6677 12.4203 17.585C13.8287 17.5181 15.0764 17.1952 16.1043 16.1596C17.1322 15.1279 17.4539 13.8757 17.5245 12.462C17.6069 11.005 17.6069 6.64201 17.5245 5.18504ZM15.6492 14.0253C15.3432 14.7971 14.7507 15.3917 13.9778 15.7028C12.8205 16.1635 10.0741 16.0572 8.79512 16.0572C7.51611 16.0572 4.76586 16.1596 3.6124 15.7028C2.84343 15.3956 2.25101 14.801 1.94107 14.0253C1.48204 12.8637 1.58797 10.1072 1.58797 8.82352C1.58797 7.53981 1.48596 4.77945 1.94107 3.62175C2.24709 2.84995 2.83951 2.25535 3.6124 1.94427C4.76978 1.48355 7.51611 1.58987 8.79512 1.58987C10.0741 1.58987 12.8244 1.48749 13.9778 1.94427C14.7468 2.25141 15.3392 2.84601 15.6492 3.62175C16.1082 4.78339 16.0023 7.53981 16.0023 8.82352C16.0023 10.1072 16.1082 12.8676 15.6492 14.0253Z" fill="currentColor" />
                                                </svg>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="https://www.pinterest.com/" target="_blank">
                                                <svg width="16" height="20" viewBox="0 0 16 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M8.09703 0C4.0247 0 0 2.74089 0 7.1768C0 9.99783 1.57178 11.6007 2.52437 11.6007C2.91731 11.6007 3.14355 10.4947 3.14355 10.1822C3.14355 9.8095 2.20287 9.01608 2.20287 7.46532C2.20287 4.24357 4.63198 1.9595 7.77553 1.9595C10.4785 1.9595 12.479 3.51026 12.479 6.35934C12.479 8.48714 11.6335 12.4783 8.89483 12.4783C7.90651 12.4783 7.06109 11.757 7.06109 10.7231C7.06109 9.20843 8.10894 7.74181 8.10894 6.17902C8.10894 3.52629 4.38192 4.00715 4.38192 7.21287C4.38192 7.88607 4.46527 8.6314 4.76296 9.24449C4.21522 11.6247 3.09592 15.1711 3.09592 17.6234C3.09592 18.3808 3.20309 19.1261 3.27453 19.8835C3.40949 20.0357 3.34201 20.0197 3.5484 19.9436C5.54885 17.1786 5.4774 16.6377 6.38237 13.0192C6.87057 13.9569 8.13275 14.4618 9.13297 14.4618C13.3482 14.4618 15.2415 10.3144 15.2415 6.57573C15.2415 2.59663 11.836 0 8.09703 0Z" fill="currentColor" />
                                                </svg>
                                            </a>
                                        </li>
                                    </ul>
                                    <div class="shape">
                                        <svg width="173" height="124" viewBox="0 0 173 124" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M8 173C13.6667 148.667 41 98.8 105 94C185 88 61 11 216 8" stroke="currentColor" stroke-width="15" />
                                        </svg>
                                    </div>
                                </div>
                                <div class="team__content">
                                    <h2 class="title"><a href="team-details.php">Jane Cooper</a></h2>
                                    <span>Sr. Software Engineer</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="team__shape">
        <img src="assets/img/team/team_shape.svg" alt="shape">
    </div>
</section>
<!-- team-area-end -->



<?php
// Load project JSON
$projectFile = __DIR__ . '/data/project.json';

$projectData = [];

if (file_exists($projectFile)) {
    $jsonContent = file_get_contents($projectFile);
    $projectData = json_decode($jsonContent, true) ?? [];
}

$listing = $projectData['listing'] ?? [];
$projects = $projectData['projects'] ?? [];

// Filter published projects
$projects = array_filter($projects, function ($project) {
    return ($project['status'] ?? 'published') === 'published';
});

// Safe HTML output
$e = function ($value) {
    return htmlspecialchars((string) $value, ENT_QUOTES, 'UTF-8');
};
?>

<!-- project-area -->
<section class="project__area section-py-140 p-relative fix">

    <div class="container">

        <!-- Section Heading -->
        <div class="row justify-content-center">
            <div class="col-xl-6 col-lg-8">

                <div class="section__title text-center mb-50"
                     data-sal="slide-up"
                     data-sal-duration="700"
                     data-sal-delay="100">

                    <span class="sub-title">
                        <?= $e($listing['sub_title'] ?? 'Our Portfolio'); ?>
                    </span>

                    <h2 class="title">
                        <?= $e($listing['heading'] ?? 'Our Latest Projects'); ?>
                    </h2>

                </div>

            </div>
        </div>

    </div>

    <div class="container custom-container-two">

        <div class="project__item-wrap">

            <div class="project-active swiper-container fix"
                 id="projectSlider"
                 data-swiper-options='{
                    "loop": true,
                    "autoplay": {
                        "delay": 5000,
                        "disableOnInteraction": false
                    },
                    "speed": 800,
                    "watchOverflow": true,
                    "breakpoints": {
                        "0": {
                            "spaceBetween": 10,
                            "slidesPerView": 1
                        },
                        "375": {
                            "spaceBetween": 20,
                            "slidesPerView": 1
                        },
                        "575": {
                            "spaceBetween": 20,
                            "slidesPerView": 2
                        },
                        "768": {
                            "spaceBetween": 20,
                            "slidesPerView": 2
                        },
                        "992": {
                            "spaceBetween": 20,
                            "slidesPerView": 3
                        },
                        "1200": {
                            "spaceBetween": 20,
                            "slidesPerView": 4
                        },
                        "1400": {
                            "spaceBetween": 30,
                            "slidesPerView": 4
                        }
                    },
                    "pagination": {
                        "el": ".project-pagination",
                        "clickable": true
                    }
                 }'>

                <div class="swiper-wrapper">

                    <?php if (!empty($projects)): ?>

                        <?php foreach ($projects as $project): ?>

                            <?php
                            $slug = $project['slug'] ?? '';
                            $title = $project['title'] ?? 'Our Project';
                            $category = $project['category'] ?? 'Technology';
                            $image = $project['image'] ?? 'assets/img/project/project_img07.jpg';
                            $alt = $project['alt'] ?? $title;

                            $projectUrl = 'project-details.php?slug=' . urlencode($slug);
                            ?>

                            <div class="swiper-slide">

                                <div class="project__item">

                                    <!-- Project Image -->
                                    <div class="project__thumb">

                                        <a href="<?= $e($projectUrl); ?>">

                                            <img src="<?= $e($image); ?>"
                                                 alt="<?= $e($alt); ?>"
                                                 loading="lazy">

                                        </a>

                                    </div>

                                    <!-- Project Content -->
                                    <div class="project__content">

                                        <h2 class="title">
                                            <a href="<?= $e($projectUrl); ?>">
                                                <?= $e($title); ?>
                                            </a>
                                        </h2>

                                        <span>
                                            <?= $e($category); ?>
                                        </span>

                                    </div>

                                    <!-- Project Link -->
                                    <div class="project__icon">

                                        <a href="<?= $e($projectUrl); ?>"
                                           aria-label="View <?= $e($title); ?>">

                                            <svg width="19"
                                                 height="19"
                                                 viewBox="0 0 19 19"
                                                 fill="none"
                                                 xmlns="http://www.w3.org/2000/svg">

                                                <path d="M2 17L17 2M17 2H2M17 2V17"
                                                      stroke="currentColor"
                                                      stroke-width="3"
                                                      stroke-linecap="round"
                                                      stroke-linejoin="round" />

                                            </svg>

                                        </a>

                                    </div>

                                </div>

                            </div>

                        <?php endforeach; ?>

                    <?php else: ?>

                        <div class="swiper-slide">
                            <div class="text-center w-100">
                                <p>
                                    <?= $e($listing['empty_message'] ?? 'Projects coming soon.'); ?>
                                </p>
                            </div>
                        </div>

                    <?php endif; ?>

                </div>

            </div>

        </div>

    </div>

    <!-- Pagination -->
    <div class="project-pagination"></div>

</section>
<!-- project-area-end -->


<!-- marquee-area -->
<!-- <section class="marquee__area fix">
            <div class="slider__marquee clearfix marquee-wrap">
                <div class="marquee_mode marquee__group">
                    <h2 class="marquee__item">
                        <svg class="rotateme" width="29" height="29" viewBox="0 0 29 29" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M12.4289 0H16.5711V6.76884L19.9561 0.90669L23.5445 2.97839L20.1595 8.84054L26.0216 5.45676L28.0933 9.04388L22.2312 12.4289H29V16.5711H22.2312L28.0933 19.9561L26.0216 23.5445L20.1595 20.1595L23.5445 26.0216L19.9561 28.0933L16.5711 22.2312V29H12.4289V22.2312L9.04388 28.0933L5.45548 26.0216L8.84054 20.1595L2.97839 23.5445L0.90669 19.9561L6.76884 16.5711H0V12.4289H6.76884L0.90669 9.04388L2.97839 5.45676L8.84054 8.84054L5.45676 2.97839L9.04388 0.90669L12.4289 6.76884V0Z" fill="currentColor" />
                        </svg>
                        Professional IT Consultancy
                    </h2>
                    <h2 class="marquee__item">
                        <svg class="rotateme" width="29" height="29" viewBox="0 0 29 29" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M12.4289 0H16.5711V6.76884L19.9561 0.90669L23.5445 2.97839L20.1595 8.84054L26.0216 5.45676L28.0933 9.04388L22.2312 12.4289H29V16.5711H22.2312L28.0933 19.9561L26.0216 23.5445L20.1595 20.1595L23.5445 26.0216L19.9561 28.0933L16.5711 22.2312V29H12.4289V22.2312L9.04388 28.0933L5.45548 26.0216L8.84054 20.1595L2.97839 23.5445L0.90669 19.9561L6.76884 16.5711H0V12.4289H6.76884L0.90669 9.04388L2.97839 5.45676L8.84054 8.84054L5.45676 2.97839L9.04388 0.90669L12.4289 6.76884V0Z" fill="currentColor" />
                        </svg>
                        We Carry more Than Just Good Coding Skills
                    </h2>
                    <h2 class="marquee__item">
                        <svg class="rotateme" width="29" height="29" viewBox="0 0 29 29" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M12.4289 0H16.5711V6.76884L19.9561 0.90669L23.5445 2.97839L20.1595 8.84054L26.0216 5.45676L28.0933 9.04388L22.2312 12.4289H29V16.5711H22.2312L28.0933 19.9561L26.0216 23.5445L20.1595 20.1595L23.5445 26.0216L19.9561 28.0933L16.5711 22.2312V29H12.4289V22.2312L9.04388 28.0933L5.45548 26.0216L8.84054 20.1595L2.97839 23.5445L0.90669 19.9561L6.76884 16.5711H0V12.4289H6.76884L0.90669 9.04388L2.97839 5.45676L8.84054 8.84054L5.45676 2.97839L9.04388 0.90669L12.4289 6.76884V0Z" fill="currentColor" />
                        </svg>
                        Check Our Latest Portfolios
                    </h2>
                    <h2 class="marquee__item">
                        <svg class="rotateme" width="29" height="29" viewBox="0 0 29 29" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M12.4289 0H16.5711V6.76884L19.9561 0.90669L23.5445 2.97839L20.1595 8.84054L26.0216 5.45676L28.0933 9.04388L22.2312 12.4289H29V16.5711H22.2312L28.0933 19.9561L26.0216 23.5445L20.1595 20.1595L23.5445 26.0216L19.9561 28.0933L16.5711 22.2312V29H12.4289V22.2312L9.04388 28.0933L5.45548 26.0216L8.84054 20.1595L2.97839 23.5445L0.90669 19.9561L6.76884 16.5711H0V12.4289H6.76884L0.90669 9.04388L2.97839 5.45676L8.84054 8.84054L5.45676 2.97839L9.04388 0.90669L12.4289 6.76884V0Z" fill="currentColor" />
                        </svg>
                        Let's Elevate Your Business with Strategic IT Solutions
                    </h2>
                    <h2 class="marquee__item">
                        <svg class="rotateme" width="29" height="29" viewBox="0 0 29 29" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M12.4289 0H16.5711V6.76884L19.9561 0.90669L23.5445 2.97839L20.1595 8.84054L26.0216 5.45676L28.0933 9.04388L22.2312 12.4289H29V16.5711H22.2312L28.0933 19.9561L26.0216 23.5445L20.1595 20.1595L23.5445 26.0216L19.9561 28.0933L16.5711 22.2312V29H12.4289V22.2312L9.04388 28.0933L5.45548 26.0216L8.84054 20.1595L2.97839 23.5445L0.90669 19.9561L6.76884 16.5711H0V12.4289H6.76884L0.90669 9.04388L2.97839 5.45676L8.84054 8.84054L5.45676 2.97839L9.04388 0.90669L12.4289 6.76884V0Z" fill="currentColor" />
                        </svg>
                        Network Infrastructure Solutions
                    </h2>
                </div>
            </div>
        </section> -->
<!-- marquee-area-end -->

<!-- testimonial-area -->
<section class="testimonial__area section-bg section-py-140 fix">
    <div class="container">
        <div class="row">
            <div class="col-lg-5">
                <div class="testimonial__content-wrap">
                    <div class="section__title mb-20">
                        <span class="sub-title">CLIENT EXPERIENCES</span>
                        <h2 class="title">What Our Clients Say About Working With Us</h2>
                    </div>
                    <p>We believe great technology starts with understanding people and their business goals. Discover how our digital solutions, technical expertise and dedicated support help businesses move forward.</p>
                    <div class="testimonial__nav-wrap">
                        <button class="testimonial-button-prev">
                            <svg width="21" height="21" viewBox="0 0 21 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M19.6924 10.5H1.30761M1.30761 10.5L10.5 1.30762M1.30761 10.5L10.5 19.6924" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </button>
                        <button class="testimonial-button-next">
                            <svg width="22" height="21" viewBox="0 0 22 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M1.80761 10.1924H20.1924M20.1924 10.1924L11 1M20.1924 10.1924L11 19.3848" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </button>
                    </div>
                </div>
            </div>
            <div class="col-lg-7">
                <div class="testimonial__item-wrap">
                    <div class="swiper-container testimonial-active fix" id="testimonialSlider" data-swiper-options='{
                                "loop": true,
                                "autoplay": { "delay": 6000 },
                                "breakpoints": {
                                    "0": {
                                        "spaceBetween": 10,
                                        "slidesPerView": 1
                                    },
                                    "375": {
                                        "spaceBetween": 20,
                                        "slidesPerView": 1
                                    },
                                    "575": {
                                        "spaceBetween": 20,
                                        "slidesPerView": 2
                                    },
                                    "768": {
                                        "spaceBetween": 20,
                                        "slidesPerView": 3
                                    },
                                    "992": {
                                        "spaceBetween": 20,
                                        "slidesPerView": 3
                                    },
                                    "1200": {
                                        "spaceBetween": 20,
                                        "slidesPerView": 4
                                    },
                                    "1400": {
                                        "spaceBetween": 24,
                                        "slidesPerView": 3
                                    }
                                },
                                "navigation": {
                                    "nextEl": ".testimonial-button-next",
                                    "prevEl": ".testimonial-button-prev"
                                }}'>
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="testimonial__item">
                                    <div class="rating">
                                        <svg width="17" height="16" viewBox="0 0 17 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M8.20504 0.5L10.6419 5.43691L16.0915 6.23344L12.1483 10.0741L13.0789 15.5L8.20504 12.9369L3.33122 15.5L4.26182 10.0741L0.318604 6.23344L5.76813 5.43691L8.20504 0.5Z" fill="currentColor" />
                                        </svg>
                                        <svg width="17" height="16" viewBox="0 0 17 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M8.20504 0.5L10.6419 5.43691L16.0915 6.23344L12.1483 10.0741L13.0789 15.5L8.20504 12.9369L3.33122 15.5L4.26182 10.0741L0.318604 6.23344L5.76813 5.43691L8.20504 0.5Z" fill="currentColor" />
                                        </svg>
                                        <svg width="17" height="16" viewBox="0 0 17 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M8.20504 0.5L10.6419 5.43691L16.0915 6.23344L12.1483 10.0741L13.0789 15.5L8.20504 12.9369L3.33122 15.5L4.26182 10.0741L0.318604 6.23344L5.76813 5.43691L8.20504 0.5Z" fill="currentColor" />
                                        </svg>
                                        <svg width="17" height="16" viewBox="0 0 17 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M8.20504 0.5L10.6419 5.43691L16.0915 6.23344L12.1483 10.0741L13.0789 15.5L8.20504 12.9369L3.33122 15.5L4.26182 10.0741L0.318604 6.23344L5.76813 5.43691L8.20504 0.5Z" fill="currentColor" />
                                        </svg>
                                        <svg width="17" height="16" viewBox="0 0 17 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M8.20504 0.5L10.6419 5.43691L16.0915 6.23344L12.1483 10.0741L13.0789 15.5L8.20504 12.9369L3.33122 15.5L4.26182 10.0741L0.318604 6.23344L5.76813 5.43691L8.20504 0.5Z" fill="currentColor" />
                                        </svg>
                                    </div>
                                    <h2 class="title">A Reliable Technology Partner</h2>
                                    <p>"The team understood our requirements and translated our ideas into a practical digital solution. Their communication, attention to detail and technical support made the entire experience smooth."</p>
                                    <div class="testimonial__avatar">
                                        <div class="thumb">
                                            <img src="assets/img/images/testi_avatar01.jpg" alt="img">
                                        </div>
                                        <div class="content">
                                            <h2 class="name">Darrell Steward</h2>
                                            <span>Business Owner</span>
                                        </div>
                                    </div>
                                    <div class="shape">
                                        <img src="assets/img/images/testi_item_shape.svg" alt="shape">
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="testimonial__item">
                                    <div class="rating">
                                        <svg width="17" height="16" viewBox="0 0 17 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M8.20504 0.5L10.6419 5.43691L16.0915 6.23344L12.1483 10.0741L13.0789 15.5L8.20504 12.9369L3.33122 15.5L4.26182 10.0741L0.318604 6.23344L5.76813 5.43691L8.20504 0.5Z" fill="currentColor" />
                                        </svg>
                                        <svg width="17" height="16" viewBox="0 0 17 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M8.20504 0.5L10.6419 5.43691L16.0915 6.23344L12.1483 10.0741L13.0789 15.5L8.20504 12.9369L3.33122 15.5L4.26182 10.0741L0.318604 6.23344L5.76813 5.43691L8.20504 0.5Z" fill="currentColor" />
                                        </svg>
                                        <svg width="17" height="16" viewBox="0 0 17 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M8.20504 0.5L10.6419 5.43691L16.0915 6.23344L12.1483 10.0741L13.0789 15.5L8.20504 12.9369L3.33122 15.5L4.26182 10.0741L0.318604 6.23344L5.76813 5.43691L8.20504 0.5Z" fill="currentColor" />
                                        </svg>
                                        <svg width="17" height="16" viewBox="0 0 17 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M8.20504 0.5L10.6419 5.43691L16.0915 6.23344L12.1483 10.0741L13.0789 15.5L8.20504 12.9369L3.33122 15.5L4.26182 10.0741L0.318604 6.23344L5.76813 5.43691L8.20504 0.5Z" fill="currentColor" />
                                        </svg>
                                        <svg width="17" height="16" viewBox="0 0 17 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M8.20504 0.5L10.6419 5.43691L16.0915 6.23344L12.1483 10.0741L13.0789 15.5L8.20504 12.9369L3.33122 15.5L4.26182 10.0741L0.318604 6.23344L5.76813 5.43691L8.20504 0.5Z" fill="currentColor" />
                                        </svg>
                                    </div>
                                    <h2 class="title">Professional Development Experience</h2>
                                    <p>"From planning and design to development and delivery, the process was well organised. We appreciated the team's ability to understand our business needs and provide a solution that fits our goals."</p>
                                    <div class="testimonial__avatar">
                                        <div class="thumb">
                                            <img src="assets/img/images/testi_avatar02.jpg" alt="img">
                                        </div>
                                        <div class="content">
                                            <h2 class="name">Annette Black</h2>
                                            <span>Startup Founder</span>
                                        </div>
                                    </div>
                                    <div class="shape">
                                        <img src="assets/img/images/testi_item_shape.svg" alt="shape">
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="testimonial__item">
                                    <div class="rating">
                                        <svg width="17" height="16" viewBox="0 0 17 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M8.20504 0.5L10.6419 5.43691L16.0915 6.23344L12.1483 10.0741L13.0789 15.5L8.20504 12.9369L3.33122 15.5L4.26182 10.0741L0.318604 6.23344L5.76813 5.43691L8.20504 0.5Z" fill="currentColor" />
                                        </svg>
                                        <svg width="17" height="16" viewBox="0 0 17 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M8.20504 0.5L10.6419 5.43691L16.0915 6.23344L12.1483 10.0741L13.0789 15.5L8.20504 12.9369L3.33122 15.5L4.26182 10.0741L0.318604 6.23344L5.76813 5.43691L8.20504 0.5Z" fill="currentColor" />
                                        </svg>
                                        <svg width="17" height="16" viewBox="0 0 17 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M8.20504 0.5L10.6419 5.43691L16.0915 6.23344L12.1483 10.0741L13.0789 15.5L8.20504 12.9369L3.33122 15.5L4.26182 10.0741L0.318604 6.23344L5.76813 5.43691L8.20504 0.5Z" fill="currentColor" />
                                        </svg>
                                        <svg width="17" height="16" viewBox="0 0 17 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M8.20504 0.5L10.6419 5.43691L16.0915 6.23344L12.1483 10.0741L13.0789 15.5L8.20504 12.9369L3.33122 15.5L4.26182 10.0741L0.318604 6.23344L5.76813 5.43691L8.20504 0.5Z" fill="currentColor" />
                                        </svg>
                                        <svg width="17" height="16" viewBox="0 0 17 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M8.20504 0.5L10.6419 5.43691L16.0915 6.23344L12.1483 10.0741L13.0789 15.5L8.20504 12.9369L3.33122 15.5L4.26182 10.0741L0.318604 6.23344L5.76813 5.43691L8.20504 0.5Z" fill="currentColor" />
                                        </svg>
                                    </div>
                                    <h2 class="title">Support That Makes a Difference</h2>
                                    <p>"What stood out was the team's commitment to quality and ongoing support. They helped us improve our digital operations with a solution designed around our requirements."</p>
                                    <div class="testimonial__avatar">
                                        <div class="thumb">
                                            <img src="assets/img/images/testi_avatar03.jpg" alt="img">
                                        </div>
                                        <div class="content">
                                            <h2 class="name">Mr.Robey Alexa</h2>
                                            <span>Business Manager</span>
                                        </div>
                                    </div>
                                    <div class="shape">
                                        <img src="assets/img/images/testi_item_shape.svg" alt="shape">
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="testimonial__item">
                                    <div class="rating">
                                        <svg width="17" height="16" viewBox="0 0 17 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M8.20504 0.5L10.6419 5.43691L16.0915 6.23344L12.1483 10.0741L13.0789 15.5L8.20504 12.9369L3.33122 15.5L4.26182 10.0741L0.318604 6.23344L5.76813 5.43691L8.20504 0.5Z" fill="currentColor" />
                                        </svg>
                                        <svg width="17" height="16" viewBox="0 0 17 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M8.20504 0.5L10.6419 5.43691L16.0915 6.23344L12.1483 10.0741L13.0789 15.5L8.20504 12.9369L3.33122 15.5L4.26182 10.0741L0.318604 6.23344L5.76813 5.43691L8.20504 0.5Z" fill="currentColor" />
                                        </svg>
                                        <svg width="17" height="16" viewBox="0 0 17 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M8.20504 0.5L10.6419 5.43691L16.0915 6.23344L12.1483 10.0741L13.0789 15.5L8.20504 12.9369L3.33122 15.5L4.26182 10.0741L0.318604 6.23344L5.76813 5.43691L8.20504 0.5Z" fill="currentColor" />
                                        </svg>
                                        <svg width="17" height="16" viewBox="0 0 17 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M8.20504 0.5L10.6419 5.43691L16.0915 6.23344L12.1483 10.0741L13.0789 15.5L8.20504 12.9369L3.33122 15.5L4.26182 10.0741L0.318604 6.23344L5.76813 5.43691L8.20504 0.5Z" fill="currentColor" />
                                        </svg>
                                        <svg width="17" height="16" viewBox="0 0 17 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M8.20504 0.5L10.6419 5.43691L16.0915 6.23344L12.1483 10.0741L13.0789 15.5L8.20504 12.9369L3.33122 15.5L4.26182 10.0741L0.318604 6.23344L5.76813 5.43691L8.20504 0.5Z" fill="currentColor" />
                                        </svg>
                                    </div>
                                    <h2 class="title">Outstanding Service & Technical Expertise</h2>
                                    <p>"The experience of working with DIVAINETECH has been excellent. Their team combines technical knowledge with a clear understanding. Maintained great communication throughout the project"</p>
                                    <div class="testimonial__avatar">
                                        <div class="thumb">
                                            <img src="assets/img/images/testi_avatar04.jpg" alt="img">
                                        </div>
                                        <div class="content">
                                            <h2 class="name">Courtney Henry</h2>
                                            <span>Business Director</span>
                                        </div>
                                    </div>
                                    <div class="shape">
                                        <img src="assets/img/images/testi_item_shape.svg" alt="shape">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- testimonial-area-end -->

<!-- blog-post-area -->
<?php
include_once 'elements/blog-data.php';
$homePosts = array_slice(blog_posts(), 0, 4); // newest first: 1 featured + 3 small
$featured  = $homePosts[0] ?? null;
$others    = array_slice($homePosts, 1);
if ($featured):
?>
<section class="blog-post__area section-py-140 fix">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <div class="section__title text-center mb-50" data-sal="slide-up" data-sal-duration="700" data-sal-delay="100">
                    <span class="sub-title">New Blogs & Post</span>
                    <h2 class="title">Latest News & Articles From The Blog Posts</h2>
                </div>
            </div>
        </div>
        <div class="row gutter-y-40">
            <div class="col-lg-6">
                <div class="blog-post__item">
                    <div class="blog-post__thumb">
                        <a href="<?= e(blog_post_url($featured)) ?>"><img src="<?= e($featured['image'] ?? '') ?>" alt="<?= e($featured['title']) ?>"></a>
                    </div>
                    <div class="blog-post__content">
                        <ul class="blog-post__meta list-wrap">
                            <li>by <a href="<?= e(blog_post_url($featured)) ?>"><?= e($featured['author']['name'] ?? 'admin') ?></a></li>
                            <li><?= e(blog_date($featured)) ?></li>
                        </ul>
                        <h2 class="post-title"><a href="<?= e(blog_post_url($featured)) ?>"><?= e($featured['title']) ?></a></h2>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="blog-post__item-wrap">
                <?php foreach ($others as $post): $url = e(blog_post_url($post)); ?>
                    <div class="blog-post__item-two">
                        <div class="blog-post__thumb-two">
                            <a href="<?= $url ?>"><img src="<?= e($post['image'] ?? '') ?>" alt="<?= e($post['title']) ?>"></a>
                        </div>
                        <div class="blog-post__content-two">
                            <ul class="list-wrap blog-post__meta blog-post__meta-two">
                                <li>by <a href="<?= $url ?>"><?= e($post['author']['name'] ?? 'admin') ?></a></li>
                                <li><?= e(blog_date($post)) ?></li>
                            </ul>
                            <h2 class="post-title"><a href="<?= $url ?>"><?= e($post['title']) ?></a></h2>
                            <a href="<?= $url ?>" class="tg-text-btn">Read More <?= svg_arrow() ?></a>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
        
            <div class="blog-post__more d-flex justify-content-center mt-50">
                <a href="blog.php" class="tg-btn">View More Blogs <?= svg_arrow(10) ?></a>
            </div>
       
        </div>
    </div>
</section>
<?php endif; ?>
<!-- blog-post-area-end -->

<!-- contact-area -->
<section class="contact__area pb-5">
    <div class="container">
        <div class="contact__inner-wrap">
            <div class="row align-items-center">
                <div class="col-lg-6" data-sal="slide-right" data-sal-duration="700" data-sal-delay="100">
                    <div class="contact__content">
                        <div class="section__title mb-10">
                            <span class="sub-title">LET'S CONNECT</span>
                            <h2 class="title">Book Your Free Consultation</h2>
                        </div>
                        <p>Have a project in mind or looking to improve your digital capabilities? Let's discuss your business goals and explore how DIVAINETECH can help you with innovative technology solutions tailored to your needs.</p>
                        <div class="contact__info-list">
                            <div class="contact__info-item d-none">
                                <div class="icon">
                                    <svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M25 12.5761C25 21.0609 14.1667 28.3337 14.1667 28.3337C14.1667 28.3337 3.33334 21.0609 3.33334 12.5761C3.33334 9.68281 4.47471 6.90804 6.50635 4.86219C8.538 2.81634 11.2935 1.66699 14.1667 1.66699C17.0399 1.66699 19.7954 2.81634 21.827 4.86219C23.8586 6.90804 25 9.68281 25 12.5761Z" stroke="currentColor" stroke-width="2.16667" stroke-linecap="round" stroke-linejoin="round" />
                                        <path d="M14.1667 16.2124C16.161 16.2124 17.7778 14.5844 17.7778 12.5761C17.7778 10.5678 16.161 8.93972 14.1667 8.93972C12.1723 8.93972 10.5556 10.5678 10.5556 12.5761C10.5556 14.5844 12.1723 16.2124 14.1667 16.2124Z" stroke="currentColor" stroke-width="2.16667" stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                </div>
                                <div class="content">
                                    <h2 class="title">Address</h2>
                                    <p> Unit 29-30 11/F Brverley Commercial
                                      <br> Centre 87-105 Chatham Road South
                                      <br> Tsim Sha Tsui,
                                       <br>Hong Kong</p>
                                </div>
                            </div>
                            <div class="contact__info-item">
                                <div class="icon">
                                    <svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M28.3333 7.5C28.3333 6.125 27.1333 5 25.6667 5H4.33332C2.86666 5 1.66666 6.125 1.66666 7.5M28.3333 7.5V22.5C28.3333 23.875 27.1333 25 25.6667 25H4.33332C2.86666 25 1.66666 23.875 1.66666 22.5V7.5M28.3333 7.5L15 16.2501L1.66666 7.5" stroke="currentColor" stroke-width="1.83333" stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                </div>
                                <div class="content">
                                    <h2 class="title">E-mail</h2>
                                    <a href="mailto:hello@divainetech.io">hello@divainetech.io</a>
                                </div>
                            </div>
                            <div class="contact__info-item">
                                <div class="icon">
                                    <svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M26.6197 20.8025V24.3151C26.6211 24.6412 26.5543 24.964 26.4236 25.2627C26.293 25.5615 26.1014 25.8297 25.8611 26.0502C25.6208 26.2706 25.3371 26.4384 25.0282 26.5429C24.7193 26.6474 24.392 26.6862 24.0672 26.6568C20.4643 26.2653 17.0034 25.0342 13.9626 23.0623C11.1336 21.2646 8.73509 18.8661 6.93742 16.0371C4.95862 12.9825 3.72718 9.50477 3.34285 5.88562C3.31359 5.56183 3.35207 5.2355 3.45584 4.92741C3.55961 4.61931 3.72639 4.33619 3.94557 4.09608C4.16475 3.85598 4.43153 3.66414 4.72891 3.53278C5.0263 3.40142 5.34777 3.33343 5.67288 3.33312H9.18548C9.75372 3.32753 10.3046 3.52875 10.7354 3.89927C11.1663 4.2698 11.4477 4.78435 11.5272 5.34702C11.6755 6.47113 11.9504 7.57486 12.3468 8.63716C12.5044 9.05624 12.5385 9.5117 12.4451 9.94956C12.3517 10.3874 12.1347 10.7893 11.8199 11.1077L10.3329 12.5947C11.9997 15.526 14.4268 17.9531 17.3582 19.6199L18.8452 18.1329C19.1635 17.8181 19.5654 17.6012 20.0033 17.5078C20.4411 17.4144 20.8966 17.4485 21.3157 17.606C22.378 18.0024 23.4817 18.2774 24.6058 18.4256C25.1746 18.5059 25.694 18.7923 26.0654 19.2306C26.4367 19.6688 26.634 20.2283 26.6197 20.8025Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                </div>
                                <div class="content">
                                    <h2 class="title">Contact</h2>
                                    <a href="tel: +971 552783479">Dubai : +971 552783479</a>
                                    <br>
                                    <a href="tel:+852 51699601">Hong Kong : +852 51699601</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6" data-sal="slide-left" data-sal-duration="700" data-sal-delay="100">
                    <div class="contact__form-wrap">
                        <form id="home-contact-form" action="submit.php" class="contact__form" method="POST" novalidate>
                            <div class="home-contact-honeypot" aria-hidden="true">
                                <label for="home_contact_company">Leave this field empty</label>
                                <input type="text" id="home_contact_company" name="company" tabindex="-1" autocomplete="off">
                            </div>
                            <div class="row gutter-20">
                                <div class="col-md-6">
                                    <div class="form-grp">
                                        <input type="text" name="first_name" placeholder="First Name*" autocomplete="given-name" maxlength="80" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-grp">
                                        <input type="text" name="last_name" placeholder="Last Name*" autocomplete="family-name" maxlength="80" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-grp">
                                        <input type="email" name="email" placeholder="E-mail*" autocomplete="email" maxlength="254" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-grp">
                                        <input type="tel" name="number" placeholder="Phone*" autocomplete="tel" maxlength="30" required>
                                    </div>
                                </div>
                            </div>
                            <div class="form-grp">
                                <input type="url" name="website" placeholder="Website URL (optional)" autocomplete="url" maxlength="255">
                            </div>
                            <div class="form-grp">
                                <textarea name="messages" placeholder="Comments . . .*" rows="5" maxlength="5000" required></textarea>
                            </div>
                            <button type="submit" class="tg-btn">Send Message</button>
                        </form>
                        <p class="ajax-response mb-0" role="status" aria-live="polite"></p>
                    </div>
                </div>
            </div>
            <img src="assets/img/images/map.svg" alt="shape" class="shape">
        </div>
    </div>
</section>
<!-- contact-area-end -->


<style>
.home-contact-honeypot{position:absolute!important;left:-10000px!important;width:1px!important;height:1px!important;overflow:hidden!important;}
#home-contact-form button[disabled]{opacity:.7;cursor:wait;}
</style>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
document.addEventListener('DOMContentLoaded', function () {
    const form = document.getElementById('home-contact-form');
    if (!form) return;

    const button = form.querySelector('button[type="submit"]');
    const originalText = button ? button.textContent.trim() : 'Send Message';

    form.addEventListener('submit', async function (event) {
        event.preventDefault();
        if (!form.reportValidity()) return;

        if (button) {
            button.disabled = true;
            button.textContent = 'Sending...';
        }

        try {
            const response = await fetch(form.action, {
                method: 'POST',
                body: new FormData(form),
                headers: {'X-Requested-With': 'XMLHttpRequest', 'Accept': 'application/json'}
            });
            let result;
            try { result = await response.json(); }
            catch (_) { throw new Error('The server returned an unexpected response. Please try again.'); }

            if (!response.ok || !result.success) {
                throw new Error(result.message || 'Your message could not be sent. Please try again.');
            }

            form.reset();
            if (window.Swal) {
                await Swal.fire({icon:'success', title:'Message Sent!', text:result.message, confirmButtonText:'OK', confirmButtonColor:'#ff6600'});
            } else {
                alert(result.message);
            }
        } catch (error) {
            const message = error.message || 'Sorry, something went wrong. Please try again.';
            if (window.Swal) {
                Swal.fire({icon:'error', title:'Unable to Send', text:message, confirmButtonText:'Try Again', confirmButtonColor:'#ff6600'});
            } else {
                alert(message);
            }
        } finally {
            if (button) {
                button.disabled = false;
                button.textContent = originalText;
            }
        }
    });
});
</script>

<?php
include_once('elements/footer.php')
?>