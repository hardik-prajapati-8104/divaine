<?php
include_once 'elements/career-data.php';

$data     = career_data();
$settings = $data['settings'];
$jobs     = career_jobs();

// Resolve the requested job (?slug=...). Fall back to the first one, redirect if unknown.
$slug = isset($_GET['slug']) && is_string($_GET['slug']) ? $_GET['slug'] : '';
$job  = $slug !== '' ? career_find($slug) : ($jobs[0] ?? null);

if ($job === null) {
    header('Location: career.php', true, 302);
    exit;
}

$apply     = $settings['apply_label'] ?? 'Apply Now';
$phone     = $settings['phone'] ?? '';
$phoneHref = $settings['phone_href'] ?? preg_replace('/[^\d+]/', '', $phone);
$resp      = $job['responsibilities'] ?? [];
$qual      = $job['qualifications'] ?? [];
$info      = [
    'Position'     => $job['title'],
    'Job Type'     => $job['type'] ?? '',
    'Job Duration' => $job['hours'] ?? '',
    'Location'     => $job['location'] ?? '',
];

include_once 'elements/header.php';
?>
<!-- breadcrumb-area -->
<section class="breadcrumb__area breadcrumb__bg fix" data-background="<?= e($settings['breadcrumb_image'] ?? 'assets/img/bg/breadcrumb_bg.jpg') ?>">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="breadcrumb__content">
                    <h2 class="title"><?= e($job['title']) ?></h2>
                    <nav class="breadcrumb">
                        <span property="itemListElement" typeof="ListItem">
                            <a href="index.php">Home</a>
                        </span>
                        <span class="breadcrumb-separator">/</span>
                        <span property="itemListElement" typeof="ListItem">
                            <a href="career.php">Career</a>
                        </span>
                        <span class="breadcrumb-separator">/</span>
                        <span property="itemListElement" typeof="ListItem"><?= e($job['title']) ?></span>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- breadcrumb-area-end -->

<!-- career-details-area -->
<section class="career__details-area section-py-140">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="career__details-content">
                    <h2 class="title">Job Overview:</h2>
                    <?php foreach ($job['overview'] ?? [] as $para): ?>
                        <p><?= e($para) ?></p>
                    <?php endforeach; ?>
                    <?php if (!empty($resp['items'])): ?>
                        <div class="career__details-content-inner">
                            <h3 class="title-two"><?= e($resp['title'] ?? 'Job Responsibilities') ?></h3>
                            <p><?= e($resp['intro'] ?? '') ?></p>
                            <?php career_check_list($resp['items'], 'choose__list choose__list-three choose__list-four list-wrap'); ?>
                        </div>
                    <?php endif; ?>
                    <?php if (!empty($qual['items'])): ?>
                        <div class="career__details-content-inner">
                            <h3 class="title-two"><?= e($qual['title'] ?? 'Qualifications') ?></h3>
                            <p><?= e($qual['intro'] ?? '') ?></p>
                            <?php career_check_list($qual['items'], 'choose__list choose__list-three list-wrap'); ?>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
            <div class="col-lg-4">
                <aside class="services__sidebar">
                    <div class="sidebar__widget">
                        <h2 class="widget__title">Job Information</h2>
                        <div class="job__info-wrap">
                            <ul class="list-wrap">
                                <?php foreach ($info as $label => $value): ?>
                                    <li>
                                        <span><?= e($label) ?>:</span>
                                        <?= e($value) ?>
                                    </li>
                                <?php endforeach; ?>
                            </ul>
                            <a href="#apply-form" class="tg-btn"><?= e($apply) ?> <?= svg_arrow(10) ?></a>
                        </div>
                    </div>
                    <div class="sidebar__widget sidebar__widget-bg" data-background="<?= e($settings['sidebar_image'] ?? 'assets/img/bg/sidebar_bg.jpg') ?>">
                        <div class="sidebar__contact">
                            <h2 class="title">Reach out to us whenever you need</h2>
                            <p>We are committed to excellence at our IT solutions company.</p>
                            <div class="cta__contact">
                                <div class="icon"><?= svg_phone() ?></div>
                                <div class="content">
                                    <span>Call For More Info</span>
                                    <a href="tel:<?= e($phoneHref) ?>"><?= e($phone) ?></a>
                                </div>
                            </div>
                            <a href="<?= e($settings['contact_url'] ?? 'contact.php') ?>" class="tg-btn">Contact With Us <?= svg_arrow(10) ?></a>
                        </div>
                    </div>
                </aside>
            </div>
        </div>
    </div>
</section>
<!-- career-details-area-end -->

<!-- job-form-area -->
<section id="apply-form" class="job__form-area section-bg section-py-140">
    <div class="container">
        <div class="contact__form-wrap contact__form-wrap-four">
            <h3 class="title"><?= e($data['apply']['title'] ?? 'Apply Form') ?></h3>
            <p><?= e($job['title']) ?></p>
            <form id="contact-form" class="contact__form-two" action="assets/mail.php" method="post">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-grp">
                            <input type="text" name="name" placeholder="Your Name*">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-grp">
                            <input type="email" name="email" placeholder="Email*">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-grp select-grp">
                            <select name="orderby" class="orderby">
                                <option value="">Select Country *</option>
                                <?php foreach ($data['countries'] as $country): ?>
                                    <option value="<?= e($country) ?>"><?= e($country) ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-grp">
                            <input type="url" name="website" placeholder="Portfolio*">
                        </div>
                    </div>
                </div>
                <div class="form-grp">
                    <textarea name="message" placeholder="Write your message"></textarea>
                </div>
                <button type="submit" class="tg-btn">Submit Now</button>
            </form>
            <p class="ajax-response mb-0"></p>
        </div>
    </div>
</section>
<!-- job-form-area-end -->
<script src="assets/js/sticky-sidebar.js" defer></script>
<?php include_once 'elements/footer.php'; ?>