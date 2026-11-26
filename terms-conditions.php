<?php
include_once 'elements/blog-data.php'; // loads e() and shared helpers (svg_*, etc.)

/** Loads data/terms.json (cached for the request). */
function terms_data(): array
{
    static $data = null;
    if ($data !== null) {
        return $data;
    }
    $data = ['settings' => [], 'page' => [], 'sections' => []];
    $file = __DIR__ . '/data/terms.json';
    if (is_readable($file)) {
        $decoded = json_decode((string) file_get_contents($file), true);
        if (is_array($decoded)) {
            $data = array_merge($data, $decoded);
        }
    }
    return $data;
}

$data     = terms_data();
$page     = (array) $data['page'];
$settings = (array) $data['settings'];
$sections = array_values(array_filter((array) $data['sections'], function ($s) {
    return is_array($s) && !empty($s['id']) && !empty($s['title']);
}));
$phone     = (string) ($settings['phone'] ?? '');
$phoneHref = (string) ($settings['phone_href'] ?? preg_replace('/[^\d+]/', '', $phone));
$email     = (string) ($settings['email'] ?? '');
$updated   = !empty($page['last_updated']) ? date('F j, Y', (int) strtotime($page['last_updated'])) : '';

include_once 'elements/header.php';
?>
<!-- breadcrumb-area -->
<section class="breadcrumb__area breadcrumb__bg fix" data-background="<?= e($settings['breadcrumb_image'] ?? 'assets/img/bg/breadcrumb_bg.jpg') ?>">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="breadcrumb__content">
                    <h2 class="title"><?= e($page['title'] ?? 'Terms & Conditions') ?></h2>
                    <nav class="breadcrumb">
                        <span property="itemListElement" typeof="ListItem">
                            <a href="index.php">Home</a>
                        </span>
                        <span class="breadcrumb-separator">/</span>
                        <span property="itemListElement" typeof="ListItem"><?= e($page['title'] ?? 'Terms & Conditions') ?></span>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- breadcrumb-area-end -->

<!-- terms-area -->
<section class="terms__area section-py-140">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-8 col-lg-9">
                <div class="section__title section__title-two text-center mb-50" data-sal="slide-up" data-sal-delay="100" data-sal-duration="700">
                    <span class="sub-title"><?= e($page['sub_title'] ?? '') ?></span>
                    <h2 class="title"><?= e($page['heading'] ?? '') ?></h2>
                    <p class="terms__intro"><?= e($page['intro'] ?? '') ?></p>
                    <?php if ($updated): ?><span class="terms__updated">Last updated: <?= e($updated) ?></span><?php endif; ?>
                </div>
            </div>
        </div>
        <div class="row gutter-y-40">
            <div class="col-lg-4 order-lg-2">
                <aside class="terms__sidebar" data-sal="slide-left" data-sal-delay="200" data-sal-duration="700">
                    <div class="terms__toc">
                        <h3 class="terms__toc-title"><?= e($page['toc_title'] ?? 'Table of Contents') ?></h3>
                        <ol class="list-wrap" id="terms-toc">
                            <?php foreach ($sections as $i => $s): ?>
                                <li><a href="#<?= e($s['id']) ?>"><span><?= sprintf('%02d', $i + 1) ?></span><?= e($s['title']) ?></a></li>
                            <?php endforeach; ?>
                        </ol>
                    </div>
                    <div class="terms__contact">
                        <h3 class="title"><?= e($page['contact_heading'] ?? '') ?></h3>
                        <p><?= e($page['contact_text'] ?? '') ?></p>
                        <ul class="list-wrap">
                            <?php if ($email): ?>
                                <li><a href="mailto:<?= e($email) ?>"><?= e($email) ?></a></li>
                            <?php endif; ?>
                            <?php if ($phone): ?>
                                <li><a href="tel:<?= e($phoneHref) ?>"><?= e($phone) ?></a></li>
                            <?php endif; ?>
                        </ul>
                        <a href="<?= e($settings['contact_url'] ?? 'contact.php') ?>" class="tg-btn">Contact With Us <?= svg_arrow(10) ?></a>
                    </div>
                </aside>
            </div>
            <div class="col-lg-8 order-lg-1">
                <div class="terms__content">
                    <?php foreach ($sections as $i => $s): ?>
                        <article class="terms__item" id="<?= e($s['id']) ?>" data-sal="slide-up" data-sal-delay="100" data-sal-duration="700">
                            <div class="terms__head">
                                <span class="terms__num"><?= sprintf('%02d', $i + 1) ?></span>
                                <h2 class="terms__title"><?= e($s['title']) ?></h2>
                            </div>
                            <?php foreach ((array) ($s['paragraphs'] ?? []) as $p): ?>
                                <p><?= e($p) ?></p>
                            <?php endforeach; ?>
                            <?php if (!empty($s['items'])): ?>
                                <ul class="terms__list list-wrap">
                                    <?php foreach ((array) $s['items'] as $item): ?>
                                        <li><?= svg_check() ?><span><?= e($item) ?></span></li>
                                    <?php endforeach; ?>
                                </ul>
                            <?php endif; ?>
                        </article>
                    <?php endforeach; ?>

                </div>
            </div>
        </div>
    </div>
</section>
<!-- terms-area-end -->

<style>
    html {
        scroll-behavior: smooth;
    }

    .terms__intro {
        margin: 15px 0 0;
    }

    .terms__updated {
        display: inline-block;
        margin-top: 18px;
        padding: 6px 18px;
        border-radius: 50px;
        background: var(--tg-color-gray-3);
        color: var(--tg-theme-primary);
        font-size: 14px;
        font-weight: 600;
    }

    .terms__item {
        position: relative;
        margin-bottom: 25px;
        padding: 35px 40px;
        background: #fff;
        border: 1px solid var(--tg-color-gray-7);
        border-radius: 12px;
        scroll-margin-top: 120px;
        transition: box-shadow .3s ease, transform .3s ease, border-color .3s ease;
    }

    .terms__item:hover {
        transform: translateY(-4px);
        border-color: var(--tg-theme-primary);
        box-shadow: 0 15px 35px rgba(10, 22, 94, .08);
    }

    .terms__head {
        display: flex;
        align-items: center;
        gap: 16px;
        margin-bottom: 16px;
    }

    .terms__num {
        flex: 0 0 auto;
        display: flex;
        align-items: center;
        justify-content: center;
        width: 46px;
        height: 46px;
        border-radius: 50%;
        background: var(--tg-theme-primary);
        color: #fff;
        font-weight: 700;
        font-size: 16px;
    }

    .terms__title {
        margin: 0;
        font-size: 24px;
    }

    .terms__item p {
        margin-bottom: 12px;
    }

    .terms__item p:last-child {
        margin-bottom: 0;
    }

    .terms__list {
        margin-top: 14px;
        display: grid;
        gap: 10px;
    }

    .terms__list li {
        display: flex;
        align-items: flex-start;
        gap: 12px;
    }

    .terms__list svg {
        flex: 0 0 auto;
        width: 22px;
        height: 22px;
        margin-top: 2px;
        color: var(--tg-theme-primary);
    }

    .terms__list svg path:first-child {
        fill: currentColor;
    }

    .terms__sidebar {
        position: static;
    }

    @media (min-width: 992px) {
        .terms__sidebar {
            position: sticky;
            top: 110px;
            align-self: flex-start;
        }
    }

    .terms__toc,
    .terms__contact {
        margin-bottom: 20px;
        padding: 24px 22px;
        border-radius: 12px;
    }

    .terms__toc {
        background: var(--tg-color-gray-3);
    }

    .terms__toc-title,
    .terms__contact .title {
        margin: 0 0 14px;
        font-size: 20px;
    }

    .terms__toc ol {
        margin: 0;
        padding: 0;
        overflow: visible;
    }

    .terms__toc li a {
        display: flex;
        align-items: center;
        gap: 12px;
        padding: 6px 12px;
        border-radius: 8px;
        color: var(--tg-heading-color);
        font-weight: 500;
        font-size: 14.5px;
        line-height: 1.35;
        transition: background .25s ease, color .25s ease, padding-left .25s ease;
    }

    .terms__toc li a span {
        flex: 0 0 22px;
        color: var(--tg-theme-primary);
        font-weight: 700;
        font-size: 13px;
    }

    .terms__toc li a:hover,
    .terms__toc li a.active {
        background: var(--tg-theme-primary);
        color: #fff;
        padding-left: 16px;
    }

    .terms__toc li a:hover span,
    .terms__toc li a.active span {
        color: #fff;
    }

    .terms__contact {
        background: var(--tg-theme-secondary);
        color: #fff;
        margin-bottom: 0;
    }

    .terms__contact p {
        margin-bottom: 10px;
        font-size: 14.5px;
    }

    /* Keep the whole contents list visible while sticky: show the contact card only on tall screens. */
    @media (min-width: 992px) and (max-height: 899px) {
        .terms__contact {
            display: none;
        }
    }

    .terms__contact .title,
    .terms__contact p,
    .terms__contact li a {
        color: #fff;
    }

    .terms__contact ul {
        margin: 0 0 22px;
        display: grid;
        gap: 6px;
    }

    .terms__contact li a:hover {
        text-decoration: underline;
    }

    .terms__footer {
        margin-top: 35px;
        padding: 30px 40px;
        border-radius: 12px;
        background: var(--tg-color-gray-3);
        display: flex;
        align-items: center;
        justify-content: space-between;
        gap: 20px;
        flex-wrap: wrap;
    }

    .terms__footer p {
        margin: 0;
        flex: 1 1 280px;
    }

    @media (max-width: 575px) {
        .terms__item {
            padding: 25px 20px;
        }

        .terms__title {
            font-size: 20px;
        }
    }

    @media print {

        header,
        footer,
        .breadcrumb__area,
        .terms__sidebar,
        .terms__footer button,
        #scroll-top {
            display: none !important;
        }

        .terms__item {
            break-inside: avoid;
            box-shadow: none;
            border-color: #ccc;
            transform: none;
        }

        [data-sal] {
            opacity: 1 !important;
            transform: none !important;
        }
    }
</style>
<script>
    // Highlight the table-of-contents link for the section currently in view.
    (function() {
        var links = document.querySelectorAll('#terms-toc a');
        if (!links.length || !('IntersectionObserver' in window)) {
            return;
        }
        var map = {};
        links.forEach(function(a) {
            map[a.getAttribute('href').slice(1)] = a;
        });
        var observer = new IntersectionObserver(function(entries) {
            entries.forEach(function(entry) {
                if (!entry.isIntersecting) {
                    return;
                }
                links.forEach(function(a) {
                    a.classList.remove('active');
                });
                var link = map[entry.target.id];
                if (link) {
                    link.classList.add('active');
                }
            });
        }, {
            rootMargin: '-25% 0px -65% 0px'
        });
        document.querySelectorAll('.terms__item').forEach(function(el) {
            observer.observe(el);
        });
    })();
</script>

<?php include_once 'elements/footer.php'; ?>