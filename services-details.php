<?php
include_once 'elements/services-data.php';

$data     = services_data();
$settings = $data['settings'];
$cta      = $data['cta'];
$services = services_all();

// Resolve the requested service (?slug=...). Fall back to the first one, 404 if unknown.
$slug    = isset($_GET['slug']) ? (string) $_GET['slug'] : '';
$service = $slug !== '' ? service_find($slug) : ($services[0] ?? null);

if ($service === null) {
    header('Location: services.php', true, 302);
    exit;
}

$phone     = $settings['phone'] ?? '';
$phoneHref = $settings['phone_href'] ?? preg_replace('/[^\d+]/', '', $phone);

include_once 'elements/header.php';
?>
<!-- breadcrumb-area -->
<section class="breadcrumb__area breadcrumb__bg fix" data-background="<?= e($settings['breadcrumb_image'] ?? 'assets/img/bg/breadcrumb_bg.jpg') ?>">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="breadcrumb__content">
                    <h2 class="title" id="service-title"><?= e($service['title']) ?></h2>
                    <nav class="breadcrumb">
                        <span property="itemListElement" typeof="ListItem">
                            <a href="index.php">Home</a>
                        </span>
                        <span class="breadcrumb-separator">/</span>
                        <span property="itemListElement" typeof="ListItem">
                            <a href="services.php">Services</a>
                        </span>
                        <span class="breadcrumb-separator">/</span>
                        <span property="itemListElement" typeof="ListItem" id="service-crumb"><?= e($service['title']) ?></span>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- breadcrumb-area-end -->

<!-- services-details-area -->
<section class="services__details-area section-py-120">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 order-0 order-lg-2">
                <div class="services__details-wrap" id="service-detail">
                    <div class="services__details-thumb">
                        <img src="<?= e($service['image'] ?? 'assets/img/blog/blog_img01.jpg') ?>" alt="<?= e($service['title']) ?>">
                    </div>
                    <div class="services__details-content">
                        <h2 class="title"><?= e($service['headline'] ?? $service['title']) ?></h2>
                        <?php if (!empty($service['lead'])): ?><p class="text-bold"><?= e($service['lead']) ?></p><?php endif; ?>
                        <?php if (!empty($service['description'])): ?><p><?= e($service['description']) ?></p><?php endif; ?>
                        <?php if (!empty($service['features'])): ?>
                            <ul class="choose__list choose__list-three list-wrap">
                                <?php foreach ($service['features'] as $feature): ?>
                                    <li><?= svg_check() ?> <?= e($feature) ?></li>
                                <?php endforeach; ?>
                            </ul>
                        <?php endif; ?>
                        <?php if (!empty($service['benefits'])): ?>
                            <h2 class="title-two"><?= e($service['benefits_title'] ?? 'Our Service Benefits') ?></h2>
                            <?php if (!empty($service['benefits_text'])): ?><p><?= e($service['benefits_text']) ?></p><?php endif; ?>
                            <div class="services__details-inner">
                                <div class="thumb">
                                    <img src="<?= e($service['benefits_image'] ?? 'assets/img/images/services_details.jpg') ?>" alt="<?= e($service['title']) ?>">
                                </div>
                                <div class="services__details-inner-item-wrap">
                                    <?php foreach ($service['benefits'] as $benefit): ?>
                                        <div class="services__details-inner-item">
                                            <div class="icon"><i class="<?= e($benefit['icon_class'] ?? 'flaticon-profit-margin') ?>"></i></div>
                                            <div class="content">
                                                <?php /* title may contain <br>; allow only that tag */ ?>
                                                <h2 class="title"><?= str_replace(['&lt;br&gt;', '&lt;br/&gt;'], '<br>', e($benefit['title'] ?? '')) ?></h2>
                                                <p><?= e($benefit['text'] ?? '') ?></p>
                                            </div>
                                        </div>
                                    <?php endforeach; ?>
                                </div>
                            </div>
                        <?php endif; ?>
                    </div>
                    <?php if (!empty($service['faqs'])): ?>
                        <div class="faq__wrap">
                            <h2 class="title">Have You Any Question?</h2>
                            <div class="accordion" id="accordionExample">
                                <?php foreach ($service['faqs'] as $i => $faq): $open = ($i === 0); ?>
                                    <div class="accordion-item">
                                        <h2 class="accordion-header">
                                            <button class="accordion-button<?= $open ? '' : ' collapsed' ?>" type="button" data-bs-toggle="collapse" data-bs-target="#faq<?= $i ?>" aria-expanded="<?= $open ? 'true' : 'false' ?>" aria-controls="faq<?= $i ?>">
                                                <?= e($faq['question'] ?? '') ?>
                                            </button>
                                        </h2>
                                        <div id="faq<?= $i ?>" class="accordion-collapse collapse<?= $open ? ' show' : '' ?>" data-bs-parent="#accordionExample">
                                            <div class="accordion-body">
                                                <p><?= e($faq['answer'] ?? '') ?></p>
                                            </div>
                                        </div>
                                    </div>
                                <?php endforeach; ?>
                            </div>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
            <div class="col-lg-4">
                <aside class="services__sidebar">
                    <div class="sidebar__widget">
                        <h2 class="widget__title">Quick Services</h2>
                        <div class="sidebar__cat-list">
                            <ul class="list-wrap" id="service-list">
                                <?php foreach ($services as $item): $isActive = ($item['slug'] === $service['slug']); ?>
                                    <li>
                                        <a href="<?= e(service_url($item)) ?>" data-slug="<?= e($item['slug']) ?>" <?= $isActive ? ' class="active" aria-current="page"' : '' ?>><?= e($item['title']) ?>
                                            <span>
                                                <svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M1 13L13 1M13 1H1M13 1V13" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                                </svg>
                                            </span>
                                        </a>
                                    </li>
                                <?php endforeach; ?>
                            </ul>
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
<!-- services-details-area-end -->

<!-- cta-area -->
<section class="cta__area-two">
    <div class="cta__bg" data-background="<?= e($settings['cta_image'] ?? 'assets/img/slider/slider_bg02.jpg') ?>"></div>
    <div class="container">
        <div class="row">
            <div class="col-xl-5 col-lg-6">
                <div class="cta__content-four">
                    <div class="section__title white-title mb-10">
                        <h2 class="title"><?= e($cta['title'] ?? '') ?></h2>
                    </div>
                    <p><?= e($cta['text'] ?? '') ?></p>
                    <div class="cta__content-bottom">
                        <a href="<?= e($settings['contact_url'] ?? 'contact.php') ?>" class="tg-btn white-btn"><?= e($cta['button'] ?? 'Make An Appointment') ?> <?= svg_arrow(10) ?></a>
                        <div class="cta__contact">
                            <div class="icon"><?= svg_phone() ?></div>
                            <div class="content">
                                <span>Call For More Info</span>
                                <a href="tel:<?= e($phoneHref) ?>"><?= e($phone) ?></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- cta-area-end -->
<script src="assets/js/service-detail.js" defer></script>
<?php include_once 'elements/footer.php'; ?>