<?php
include_once 'elements/career-data.php';

$data     = career_data();
$settings = $data['settings'];
$page     = $data['page'];
$intro    = $data['intro'];
$benefits = $data['benefits'];
$section  = $data['jobs_section'];
$contact  = $data['contact'];
$jobs     = career_jobs();
$apply    = $settings['apply_label'] ?? 'Apply Now';
$phone    = $settings['phone'] ?? '';
$phoneHref = $settings['phone_href'] ?? preg_replace('/[^\d+]/', '', $phone);
// Phone numbers shown in the contact block (falls back to the single site phone).
$phones = array_values(array_filter($contact['phones'] ?? [['number' => $phone, 'href' => $phoneHref]], function ($p) {
    return !empty($p['number']);
}));
$form   = $contact['form'] ?? [];
$techs  = $data['technologies'] ?? [];

include_once 'elements/header.php';
?>
<!-- breadcrumb-area -->
<section class="breadcrumb__area breadcrumb__bg fix" data-background="<?= e($settings['breadcrumb_image'] ?? 'assets/img/bg/breadcrumb_bg.jpg') ?>">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="breadcrumb__content">
                    <h2 class="title"><?= e($page['title'] ?? 'Careers') ?></h2>
                    <nav class="breadcrumb">
                        <span property="itemListElement" typeof="ListItem">
                            <a href="index.php">Home</a>
                        </span>
                        <span class="breadcrumb-separator">/</span>
                        <span property="itemListElement" typeof="ListItem"><?= e($page['breadcrumb'] ?? 'Career') ?></span>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- breadcrumb-area-end -->

<!-- career-area -->
<section class="career__area section-py-120">
    <div class="container">
        <?php if (!empty($intro['slides'])): ?>
            <div class="career__slider-wrap">
                <div class="swiper-container career__active" id="careerSlider" data-swiper-options='{
                        "loop": true,
                        "effect": "fade",
                        "autoplay": { "delay": 8000 },
                        "breakpoints": {
                            "0": { "spaceBetween": 0, "slidesPerView": 1 },
                            "375": { "spaceBetween": 0, "slidesPerView": 1 },
                            "575": { "spaceBetween": 0, "slidesPerView": 1 },
                            "768": { "spaceBetween": 0, "slidesPerView": 1 },
                            "992": { "spaceBetween": 0, "slidesPerView": 1 },
                            "1400": { "spaceBetween": 0, "slidesPerView": 1 }
                        },
                        "navigation": {
                            "nextEl": ".career-button-next",
                            "prevEl": ".career-button-prev"
                        }}'>
                    <div class="swiper-wrapper">
                        <?php foreach ($intro['slides'] as $slide): ?>
                            <div class="swiper-slide">
                                <div class="career__img">
                                    <img src="<?= e($slide) ?>" alt="<?= e($page['title'] ?? '') ?>">
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
                <div class="career__nav-wrap">
                    <button class="career-button-prev" aria-label="Previous slide"><?= svg_arrow_prev() ?></button>
                    <button class="career-button-next" aria-label="Next slide"><?= svg_arrow_next() ?></button>
                </div>
            </div>
        <?php endif; ?>
        <div class="row">
            <div class="col-lg-12">
                <div class="career__content">
                    <div class="section__title section__title-two mb-25">
                        <span class="sub-title"><?= e($intro['sub_title'] ?? '') ?></span>
                        <h2 class="title"><?= implode(' <br> ', array_map('e', $intro['heading'] ?? [])) ?></h2>
                    </div>
                    <p><?= e($intro['text'] ?? '') ?></p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- career-area-end -->

<!-- company-benefit-area -->
<section class="company__benefit-area section-pb-140">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-5 order-0 order-lg-2">
                <div class="company__benefit-img">
                    <img src="<?= e($benefits['image'] ?? '') ?>" alt="<?= e($benefits['title'] ?? '') ?>">
                </div>
            </div>
            <div class="col-lg-7">
                <div class="company__benefit-content">
                    <div class="section__title section__title-two mb-25">
                        <span class="sub-title"><?= e($benefits['sub_title'] ?? '') ?></span>
                        <h2 class="title"><?= e($benefits['title'] ?? '') ?></h2>
                    </div>
                    <p><?= e($benefits['text'] ?? '') ?></p>
                    <?php career_check_list($benefits['items'] ?? [], 'choose__list choose__list-three choose__list-four choose__list-five list-wrap'); ?>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- company-benefit-area-end -->

<!-- job-area -->
<section class="job__area section-bg section-py-140">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <div class="section__title section__title-two text-center mb-50">
                    <span class="sub-title"><?= e($section['sub_title'] ?? '') ?></span>
                    <h2 class="title"><?= e($section['title'] ?? '') ?></h2>
                    <p><?= e($section['text'] ?? '') ?></p>
                </div>
            </div>
        </div>
        <div class="row gutter-y-30">
            <?php if (!$jobs): ?>
                <div class="col-12 text-center">
                    <p><?= e($section['empty'] ?? 'No open positions.') ?></p>
                </div>
            <?php endif; ?>
            <?php foreach ($jobs as $job): $url = e(career_url($job)); ?>
                <div class="col-lg-6 col-md-6">
                    <div class="job__item">
                        <ul class="list-wrap job__meta">
                            <li><span><?= e($job['type'] ?? '') ?></span></li>
                            <li><?= svg_pin() ?> <?= e($job['location'] ?? '') ?></li>
                        </ul>
                        <h2 class="title"><a href="<?= $url ?>"><?= e($job['title']) ?></a></h2>
                        <p><?= e($job['summary'] ?? '') ?></p>
                        <div class="job__bottom">
                            <span class="salary"><?= e($job['salary'] ?? '') ?></span>
                            <a href="<?= $url ?>" class="tg-btn"><?= e($apply) ?> <?= svg_arrow(10) ?></a>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>
<!-- job-area-end -->

<!-- contact-area -->
<section class="contact__area-three fix section-py-140">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 d-none">
                <div class="contact__content-two">
                    <div class="section__title section__title-two mb-25">
                        <span class="sub-title"><?= e($contact['sub_title'] ?? '') ?></span>
                        <h2 class="title"><?= e($contact['title'] ?? '') ?></h2>
                    </div>
                    <p><?= e($contact['text'] ?? '') ?></p>
                    <div class="contact__info-list contact__info-list-two">
                        <div class="contact__info-item contact__info-item-two">
                            <div class="icon"><?= career_contact_icon('location') ?></div>
                            <div class="content">
                                <h2 class="title"><?= implode(' <br> ', array_map('e', $contact['address'] ?? [])) ?></h2>
                            </div>
                        </div>
                        <div class="contact__info-item contact__info-item-two">
                            <div class="icon"><?= career_contact_icon('mail') ?></div>
                            <div class="content">
                                <h2 class="title" style="text-transform: lowercase;"><a href="mailto:<?= e($contact['email'] ?? '') ?>"><?= e($contact['email'] ?? '') ?></a></h2>
                            </div>
                        </div>
                        <div class="contact__info-item contact__info-item-two">
                            <div class="icon"><?= career_contact_icon('phone') ?></div>
                            <div class="content">
                                <?php foreach ($phones as $p): ?>
                                    <h2 class="title">
                                        <a href="tel:<?= e(!empty($p['href']) ? $p['href'] : preg_replace('/[^\d+]/', '', $p['number'])) ?>"><?= e($p['number']) ?></a>
                                        <?php if (!empty($p['label'])): ?>
                                            <span class="phone-label">(<?= e($p['label']) ?>)</span>
                                        <?php endif; ?>
                                    </h2>
                                <?php endforeach; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-12" data-sal="slide-left" data-sal-duration="700" data-sal-delay="300">
                <div class="contact__form-wrap-two contact__form-wrap-three">
                    <h1 class="" style="color: var(--tg-theme-primary);"><?= e($contact['form_heading'] ?? '') ?></h1>
                    <h2 class="title"><?= e($contact['form_title'] ?? '') ?></h2>
                    <p><?= e($contact['form_text'] ?? '') ?></p>
                    <form id="career-form" action="career-submit.php" class="contact__form-two" method="post" enctype="multipart/form-data" novalidate data-max-mb="<?= (int) ($form['max_resume_mb'] ?? 5) ?>">
                        <div class="career-form-honeypot" aria-hidden="true">
                            <label for="career_company">Leave this field empty</label>
                            <input type="text" id="career_company" name="company" tabindex="-1" autocomplete="off">
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-grp">
                                    <input type="text" name="name" placeholder="<?= e($form['name'] ?? 'Your Name*') ?>" autocomplete="name" maxlength="100" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-grp">
                                    <input type="tel" name="phone" placeholder="<?= e($form['phone'] ?? 'Phone Number') ?>" autocomplete="tel" maxlength="20">
                                </div>
                            </div>
                        </div>
                        <div class="form-grp">
                            <input type="email" name="email" placeholder="<?= e($form['email'] ?? 'E-mail Address*') ?>" autocomplete="email" maxlength="254" required>
                        </div>
                        <?php if ($techs): ?>
                            <div class="form-grp select-grp">
                                <select name="technology" class="orderby" required>
                                    <option value="" selected disabled><?= e($form['technology'] ?? 'Select Technology *') ?></option>
                                    <?php foreach ($techs as $tech): ?>
                                        <option value="<?= e($tech) ?>"><?= e($tech) ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                        <?php endif; ?>
                        <div class="form-grp career-file">
                            <label for="career-resume" class="career-file__label"><?= e($form['resume_label'] ?? 'Upload Resume') ?> <small>(<?= e($form['resume_help'] ?? 'PDF, DOC or DOCX, max 5 MB') ?>)</small></label>
                            <input type="file" id="career-resume" name="resume" accept=".pdf,.doc,.docx,application/pdf,application/msword,application/vnd.openxmlformats-officedocument.wordprocessingml.document">
                        </div>
                        <div class="form-grp">
                            <textarea name="message" placeholder="<?= e($form['message'] ?? 'Write your message*') ?>" rows="5" maxlength="5000" required></textarea>
                        </div>
                        <button type="submit" class="tg-btn"><?= e($form['submit'] ?? 'Send Message') ?></button>
                    </form>
                    <p class="ajax-response mb-0" role="status" aria-live="polite"></p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- contact-area-end -->
<link rel="stylesheet" href="assets/css/career-form.css">
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="assets/js/career-form.js" defer></script>
<?php include_once 'elements/footer.php'; ?>