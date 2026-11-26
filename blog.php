<?php
include_once 'elements/blog-data.php';

$data     = blog_data();
$listing  = $data['listing'];
$settings = $data['settings'];
$params   = blog_params($_GET);
$result   = blog_query($params);
$params['page'] = $result['page'];

// Human readable description of the active filters (empty when none).
$cats    = blog_categories();
$tags    = blog_tags();
$filters = [];
if ($params['category'] !== '') { $filters[] = 'Category: ' . e($cats[$params['category']]['name']); }
if ($params['tag'] !== '')      { $filters[] = 'Tag: ' . e($tags[$params['tag']]); }
if ($params['q'] !== '')        { $filters[] = 'Search: &ldquo;' . e($params['q']) . '&rdquo;'; }

include_once 'elements/header.php';
?>
        <!-- breadcrumb-area -->
        <section class="breadcrumb__area breadcrumb__bg fix" data-background="<?= e($settings['breadcrumb_image'] ?? 'assets/img/bg/breadcrumb_bg.jpg') ?>">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="breadcrumb__content">
                            <h2 class="title"><?= e($listing['title'] ?? 'Blogs') ?></h2>
                            <nav class="breadcrumb">
                                <span property="itemListElement" typeof="ListItem">
                                    <a href="index.php">Home</a>
                                </span>
                                <span class="breadcrumb-separator">/</span>
                                <span property="itemListElement" typeof="ListItem"><?= e($listing['breadcrumb'] ?? 'Latest Blogs') ?></span>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- breadcrumb-area-end -->

        <!-- blog-post-area -->
        <section class="blog-post__area-four section-py-140" data-switcher data-link="a[data-ajax]" data-swap="#blog-results,#blog-search,#blog-cat-list,#blog-tag-list" data-scroll="#blog-results">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8">
                        <div id="blog-results">
<?php if ($filters): ?>
                            <div class="blog__filter">
                                <span><?= $result['total'] ?> result<?= $result['total'] === 1 ? '' : 's' ?> &mdash; <?= implode(' &middot; ', $filters) ?></span>
                                <a href="blog.php" data-ajax class="blog__filter-clear">Clear filters &times;</a>
                            </div>
<?php endif; ?>
                            <div class="inner-blog-post-wrap">
<?php if (!$result['items']): ?>
                                <p class="blog__empty"><?= e($listing['empty'] ?? 'No posts found.') ?></p>
<?php endif; ?>
<?php foreach ($result['items'] as $post): $url = e(blog_post_url($post)); ?>
                                <div class="blog-post__item-five">
                                    <div class="blog-post__thumb-five">
                                        <a href="<?= $url ?>"><img src="<?= e($post['image'] ?? '') ?>" alt="<?= e($post['title']) ?>" loading="lazy"></a>
                                    </div>
                                    <div class="blog-post__content-five">
                                        <ul class="blog-post__meta blog-post__meta-three list-wrap">
                                            <li><?= e(blog_date($post)) ?></li>
                                            <li>by <a href="blog.php?q=<?= rawurlencode($post['author']['name'] ?? '') ?>" data-ajax><?= e($post['author']['name'] ?? '') ?></a></li>
                                        </ul>
                                        <h2 class="post-title"><a href="<?= $url ?>"><?= e($post['title']) ?></a></h2>
                                        <p><?= e($post['excerpt'] ?? '') ?></p>
                                        <a href="<?= $url ?>" class="tg-btn"><?= e($listing['read_more'] ?? 'Read More') ?> <?= svg_arrow(10) ?></a>
                                    </div>
                                </div>
<?php endforeach; ?>
                            </div>
<?php blog_pagination($result['page'], $result['pages'], $params); ?>
                        </div>
                    </div>
                    <div class="col-lg-4">
<?php blog_sidebar($params, true); ?>
                    </div>
                </div>
            </div>
        </section>
        <!-- blog-post-area-end -->

<script src="assets/js/detail-switcher.js" defer></script>
<?php include_once 'elements/footer.php'; ?>
