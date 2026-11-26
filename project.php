<?php
include_once 'elements/projects-data.php';
$data     = projects_data();
$listing  = $data['listing'];
$settings = $data['settings'];
$projects = projects_all();

include_once 'elements/header.php';
?>
        <!-- breadcrumb-area -->
        <section class="breadcrumb__area breadcrumb__bg fix" data-background="<?= e($settings['breadcrumb_image'] ?? 'assets/img/bg/breadcrumb_bg.jpg') ?>">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="breadcrumb__content">
                            <h2 class="title"><?= e($listing['title'] ?? 'Our Project') ?></h2>
                            <nav class="breadcrumb">
                                <span property="itemListElement" typeof="ListItem">
                                    <a href="index.php">Home</a>
                                </span>
                                <span class="breadcrumb-separator">/</span>
                                <span property="itemListElement" typeof="ListItem">Project</span>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- breadcrumb-area-end -->

        <!-- project-area -->
        <section class="project__area section-py-140">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-6 col-lg-8">
                        <div class="section__title section__title-two text-center mb-50">
                            <span class="sub-title"><?= e($listing['sub_title'] ?? '') ?></span>
                            <h2 class="title"><?= e($listing['heading'] ?? '') ?></h2>
                        </div>
                    </div>
                </div>
                <div class="project__inner-item">
                    <div class="row gutter-y-40">
<?php if (!$projects): ?>
                        <div class="col-12 text-center"><p>Projects are currently unavailable. Please check back soon.</p></div>
<?php endif; ?>
<?php foreach ($projects as $project) { project_card($project); } ?>
                    </div>
                </div>
            </div>
        </section>
        <!-- project-area-end -->

<?php include_once 'elements/footer.php'; ?>
