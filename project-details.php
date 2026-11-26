<?php
include_once 'elements/projects-data.php';

$data     = projects_data();
$settings = $data['settings'];
$labels   = $data['details'];
$projects = projects_all();

// Resolve the requested project (?slug=...). Fall back to the first one, redirect if unknown.
$slug    = isset($_GET['slug']) ? (string) $_GET['slug'] : '';
$project = $slug !== '' ? project_find($slug) : ($projects[0] ?? null);

if ($project === null) {
    header('Location: project.php', true, 302);
    exit;
}

[$prev, $next] = project_neighbors($project['slug']);
$related       = project_related($project['slug'], 2);
$phone         = $settings['phone'] ?? '';
$phoneHref     = $settings['phone_href'] ?? preg_replace('/[^\d+]/', '', $phone);

include_once 'elements/header.php';
?>
<!-- breadcrumb-area -->
<section class="breadcrumb__area breadcrumb__bg fix" data-background="<?= e($settings['breadcrumb_image'] ?? 'assets/img/bg/breadcrumb_bg.jpg') ?>">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="breadcrumb__content">
                    <h2 class="title" id="project-title"><?= e($project['title']) ?></h2>
                    <nav class="breadcrumb">
                        <span property="itemListElement" typeof="ListItem">
                            <a href="index.php">Home</a>
                        </span>
                        <span class="breadcrumb-separator">/</span>
                        <span property="itemListElement" typeof="ListItem">
                            <a href="project.php">Project</a>
                        </span>
                        <span class="breadcrumb-separator">/</span>
                        <span property="itemListElement" typeof="ListItem" id="project-crumb"><?= e($project['title']) ?></span>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- breadcrumb-area-end -->

<!-- project-details-area -->
<section class="project__details-area section-py-120" data-switcher data-swap="#project-title,#project-crumb,#project-thumb,#project-main,#project-info" data-scroll="#project-thumb">
    <div class="container">
        <div class="project__details-wrap">
            <div class="project__details-thumb" id="project-thumb">
                <img src="<?= e($project['image'] ?? '') ?>" alt="<?= e($project['title']) ?>">
            </div>
            <div class="row">
                <div class="col-lg-8">
                    <div id="project-main">
                        <div class="project__details-content">
                            <h2 class="title"><?= e($labels['overview_title'] ?? 'Overview:') ?></h2>
                            <?php foreach ($project['overview'] ?? [] as $para): ?>
                                <p><?= e($para) ?></p>
                            <?php endforeach; ?>
                            <?php if (!empty($project['challenge'])): ?>
                                <h2 class="title-two"><?= e($project['challenge_title'] ?? '') ?></h2>
                                <p><?= e($project['challenge']) ?></p>
                            <?php endif; ?>
                            <div class="project__details-inner">
                                <?php if (!empty($project['features'])): ?>
                                    <ul class="choose__list choose__list-three list-wrap">
                                        <?php foreach ($project['features'] as $feature): ?>
                                            <li><?= svg_check() ?> <?= e($feature) ?></li>
                                        <?php endforeach; ?>
                                    </ul>
                                <?php endif; ?>
                                <?php if (!empty($project['inner_image'])): ?>
                                    <div class="project__details-inner-img">
                                        <img src="<?= e($project['inner_image']) ?>" alt="<?= e($project['title']) ?>">
                                    </div>
                                <?php endif; ?>
                            </div>
                            <?php if (!empty($project['result'])): ?>
                                <h2 class="title-two"><?= e($project['result_title'] ?? '') ?></h2>
                                <p><?= e($project['result']) ?></p>
                            <?php endif; ?>
                            <div class="project__details-content-bottom">
                                <div class="thumb">
                                    <img src="<?= e($project['bottom_image'] ?? '') ?>" alt="<?= e($project['title']) ?>">
                                </div>
                                <div class="project__details-content-bottom-right">
                                    <?php foreach ($project['counters'] ?? [] as $counter): ?>
                                        <div class="counter__item counter__item-six">
                                            <h2 class="count"><span class="counter-number"><?= (int) ($counter['value'] ?? 0) ?></span>%</h2>
                                            <p><?= e($counter['label'] ?? '') ?></p>
                                        </div>
                                    <?php endforeach; ?>
                                </div>
                            </div>
                        </div>

                        <div class="project__pager">
                            <?php if ($prev): ?>
                                <a href="<?= e(project_url($prev)) ?>" data-slug="<?= e($prev['slug']) ?>" class="tg-btn">&larr; <?= e($labels['prev'] ?? 'Previous Project') ?></a>
                            <?php endif; ?>
                            <?php if ($next): ?>
                                <a href="<?= e(project_url($next)) ?>" data-slug="<?= e($next['slug']) ?>" class="tg-btn">
                                    <?= e($labels['next'] ?? 'Next Project') ?> &rarr;</a>
                            <?php endif; ?>
                        </div>

                        <?php if ($related): ?>
                            <div class="project__related">
                                <h2 class="project__related-title"><?= e($labels['related_title'] ?? 'More Projects') ?></h2>
                                <div class="row gutter-y-30">
                                    <?php foreach ($related as $item) {
                                        project_card($item, 'col-md-6');
                                    } ?>
                                </div>
                            </div>
                        <?php endif; ?>
                    </div>
                </div>
                <div class="col-lg-4">
                    <aside class="services__sidebar">
                        <div class="sidebar__widget">
                            <h2 class="widget__title"><?= e($labels['sidebar_title'] ?? 'Project Overview') ?></h2>
                            <div class="project__details-info">
                                <ul class="list-wrap" id="project-info">
                                    <?php foreach ($project['info'] ?? [] as $label => $value): ?>
                                        <li><span><?= e($label) ?>:</span><?= e($value) ?></li>
                                    <?php endforeach; ?>
                                    <?php if (!empty($settings['social'])): ?>
                                        <li><span>Share:</span>
                                            <ul class="list-wrap social__wrap">
                                                <?php foreach ($settings['social'] as $social): ?>
                                                    <li><a href="<?= e($social['url'] ?? '#') ?>" target="_blank" rel="noopener" aria-label="<?= e($social['name'] ?? '') ?>"><?= social_icon((string) ($social['name'] ?? '')) ?></a></li>
                                                <?php endforeach; ?>
                                            </ul>
                                        </li>
                                    <?php endif; ?>
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
    </div>
</section>
<!-- project-details-area-end -->

<script src="assets/js/detail-switcher.js" defer></script>
<script src="assets/js/sticky-sidebar.js" defer></script>
<?php include_once 'elements/footer.php'; ?>