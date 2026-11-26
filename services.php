<?php
include_once 'elements/services-data.php';
$data     = services_data();
$listing  = $data['listing'];
$settings = $data['settings'];
$services = services_all();

include_once 'elements/header.php';
?>
        <!-- breadcrumb-area -->
        <section class="breadcrumb__area breadcrumb__bg fix" data-background="<?= e($settings['breadcrumb_image'] ?? 'assets/img/bg/breadcrumb_bg.jpg') ?>">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="breadcrumb__content">
                            <h2 class="title"><?= e($listing['title'] ?? 'Our Services') ?></h2>
                            <nav class="breadcrumb">
                                <span property="itemListElement" typeof="ListItem">
                                    <a href="index.php">Home</a>
                                </span>
                                <span class="breadcrumb-separator">/</span>
                                <span property="itemListElement" typeof="ListItem">Services</span>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- breadcrumb-area-end -->

        <!-- services-area -->
        <section class="services__area section-bg section-py-140">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-6">
                        <div class="section__title section__title-two text-center mb-50">
                            <span class="sub-title"><?= e($listing['sub_title'] ?? '') ?></span>
                            <h2 class="title"><?= e($listing['heading'] ?? '') ?></h2>
                        </div>
                    </div>
                </div>
                <div class="row gutter-y-30">
<?php if (!$services): ?>
                    <div class="col-12 text-center"><p>Services are currently unavailable. Please check back soon.</p></div>
<?php endif; ?>
<?php foreach ($services as $service): $url = service_url($service); ?>
                    <div class="col-lg-4 col-md-6">
                        <div class="services__item">
                            <div class="services__icon-wrap">
                                <div class="services__icon"><?= service_icon($service) ?></div>
                            </div>
                            <div class="services__content">
                                <h2 class="title"><a href="<?= e($url) ?>"><?= e($service['title']) ?></a></h2>
                                <p><?= e($service['summary'] ?? '') ?></p>
                                <a href="<?= e($url) ?>" class="tg-text-btn"><?= e($listing['read_more'] ?? 'Read More') ?> <?= svg_arrow() ?></a>
                            </div>
                        </div>
                    </div>
<?php endforeach; ?>
                </div>
            </div>
        </section>
        <!-- services-area-end -->

<?php include_once 'elements/footer.php'; ?>
