<?php
include_once 'elements/blog-data.php';

$data     = blog_data();
$settings = $data['settings'];
$posts    = blog_posts();

// Resolve the requested post (?slug=...). Fall back to the newest one, redirect if unknown.
$slug = isset($_GET['slug']) && is_string($_GET['slug']) ? $_GET['slug'] : '';
$post = $slug !== '' ? blog_find($slug) : ($posts[0] ?? null);

if ($post === null) {
    header('Location: blog.php', true, 302);
    exit;
}

$author = $post['author'] ?? [];
$hl     = $post['highlights'] ?? [];

include_once 'elements/header.php';
?>
        <!-- breadcrumb-area -->
        <section class="breadcrumb__area breadcrumb__bg fix" data-background="<?= e($settings['breadcrumb_image'] ?? 'assets/img/bg/breadcrumb_bg.jpg') ?>">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="breadcrumb__content">
                            <h2 class="title">Blog Details</h2>
                            <nav class="breadcrumb">
                                <span property="itemListElement" typeof="ListItem">
                                    <a href="index.php">Home</a>
                                </span>
                                <span class="breadcrumb-separator">/</span>
                                <span property="itemListElement" typeof="ListItem">
                                    <a href="blog.php">Blogs</a>
                                </span>
                                <span class="breadcrumb-separator">/</span>
                                <span property="itemListElement" typeof="ListItem">Blog Details</span>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- breadcrumb-area-end -->

        <!-- blog-post-area -->
        <section class="blog-post__area-four section-py-140">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="blog__details-wrap">
                            <div class="blog-post__thumb-five blog__details-thumb">
                                <img src="<?= e($post['image'] ?? '') ?>" alt="<?= e($post['title']) ?>">
                            </div>
                            <div class="blog__details-content blog-post__content-five">
                                <ul class="blog-post__meta blog-post__meta-three list-wrap">
                                    <li><?= e(blog_date($post)) ?></li>
                                    <li>by <a href="blog.php?q=<?= rawurlencode($author['name'] ?? '') ?>"><?= e($author['name'] ?? '') ?></a></li>
                                    <li><a href="<?= e(blog_url(['category' => blog_slug($post['category'] ?? '')])) ?>"><?= e($post['category'] ?? '') ?></a></li>
                                </ul>
                                <h2 class="post-title"><?= e($post['title']) ?></h2>
<?php foreach (array_slice($post['content'] ?? [], 0, 2) as $para): ?>
                                <p><?= e($para) ?></p>
<?php endforeach; ?>
<?php if (!empty($post['quote']['text'])): ?>
                                <blockquote>
                                    <p>&ldquo; <?= e($post['quote']['text']) ?> &rdquo;</p>
                                    <?php if (!empty($post['quote']['cite'])): ?><cite><?= e($post['quote']['cite']) ?></cite><?php endif; ?>
                                </blockquote>
<?php endif; ?>
<?php foreach (array_slice($post['content'] ?? [], 2) as $para): ?>
                                <p><?= e($para) ?></p>
<?php endforeach; ?>
<?php if ($hl): ?>
                                <div class="blog__details-inner">
                                    <div class="row align-items-center">
                                        <div class="col-46 order-0 order-lg-2">
                                            <div class="blog__details-inner-thumb">
                                                <img src="<?= e($hl['image'] ?? '') ?>" alt="<?= e($hl['title'] ?? '') ?>">
<?php if (!empty($settings['video_url'])): ?>
                                                <a href="<?= e($settings['video_url']) ?>" class="play-btn popup-video video__icon" aria-label="Play video"><?= svg_play() ?></a>
<?php endif; ?>
                                            </div>
                                        </div>
                                        <div class="col-54">
                                            <div class="blog__details-inner-content">
                                                <h2 class="title"><?= e($hl['title'] ?? '') ?></h2>
                                                <p><?= e($hl['text'] ?? '') ?></p>
                                                <ul class="choose__list choose__list-three list-wrap">
<?php foreach ($hl['items'] ?? [] as $item): ?>
                                                    <li><?= svg_check() ?> <?= e($item) ?></li>
<?php endforeach; ?>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
<?php endif; ?>
<?php if (!empty($post['closing'])): ?>
                                <h2 class="title-two"><?= e($post['closing_title'] ?? '') ?></h2>
                                <p><?= e($post['closing']) ?></p>
<?php endif; ?>
                                <div class="blog__details-bottom">
                                    <div class="row">
                                        <div class="col-md-7">
                                            <div class="post-tags">
                                                <h2 class="title">Post Tags:</h2>
                                                <ul class="list-wrap">
<?php foreach ($post['tags'] ?? [] as $tag): ?>
                                                    <li><a href="<?= e(blog_url(['tag' => blog_slug($tag)])) ?>"><?= e($tag) ?></a></li>
<?php endforeach; ?>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="col-md-5">
                                            <div class="post-share">
                                                <h2 class="title">Social Share:</h2>
                                                <ul class="list-wrap">
<?php foreach ($settings['social'] ?? [] as $social): ?>
                                                    <li><a href="<?= e($social['url'] ?? '#') ?>" target="_blank" rel="noopener" aria-label="<?= e($social['name'] ?? '') ?>"><?= social_icon((string) ($social['name'] ?? '')) ?></a></li>
<?php endforeach; ?>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="blog__avatar-wrap mb-60">
                                <div class="blog__avatar-img">
                                    <a href="blog.php?q=<?= rawurlencode($author['name'] ?? '') ?>"><img src="<?= e($author['avatar'] ?? 'assets/img/images/testi_avatar01.jpg') ?>" alt="<?= e($author['name'] ?? '') ?>"></a>
                                </div>
                                <div class="blog__avatar-info">
                                    <span class="designation">Author</span>
                                    <h2 class="name"><a href="blog.php?q=<?= rawurlencode($author['name'] ?? '') ?>"><?= e($author['name'] ?? '') ?></a></h2>
                                    <p><?= e($author['bio'] ?? '') ?></p>
                                </div>
                            </div>
                            <div class="comments-wrap">
                                <h3 class="comments-wrap-title">02 Comments</h3>
                                <div class="latest-comments">
                                    <ul class="list-wrap">
                                        <li>
                                            <div class="comments-box">
                                                <div class="comments-avatar">
                                                    <img src="assets/img/images/testi_avatar02.jpg" alt="img">
                                                </div>
                                                <div class="comments-text">
                                                    <div class="avatar-name">
                                                        <h2 class="name">Jessica Rose</h2>
                                                        <span class="date">December 27, 2025</span>
                                                    </div>
                                                    <p>Finanappreciate your trust greatly Our clients choose dentace ducts because know we are the best area Awaitingare really.</p>
                                                    <a href="#" class="reply-btn">Reply</a>
                                                </div>
                                            </div>
                                            <ul class="children">
                                                <li>
                                                    <div class="comments-box">
                                                        <div class="comments-avatar">
                                                            <img src="assets/img/images/testi_avatar03.jpg" alt="img">
                                                        </div>
                                                        <div class="comments-text">
                                                            <div class="avatar-name">
                                                                <h2 class="name">Parker Willy</h2>
                                                                <span class="date">December 28, 2025</span>
                                                            </div>
                                                            <p>Finanappreciate your trust greatly Our clients choose dentace ducts because know we are the best area Awaitingare really.</p>
                                                            <a href="#" class="reply-btn">Reply</a>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="comment-respond">
                                <h3 class="comment-reply-title">Post a comment</h3>
                                <form action="#" class="comment-form">
                                    <p class="comment-notes">Your email address will not be published. Required fields are marked *</p>
                                    <div class="form-grp">
                                        <textarea name="comment" placeholder="Comment"></textarea>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-grp">
                                                <input type="text" placeholder="Name">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-grp">
                                                <input type="email" placeholder="Email">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-grp">
                                                <input type="url" placeholder="Website">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-grp checkbox-grp">
                                        <input type="checkbox" id="checkbox">
                                        <label for="checkbox">Save my name, email, and website in this browser for the next time I comment.</label>
                                    </div>
                                    <button type="submit" class="tg-btn tg-btn-three">Submit Comment</button>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
<?php blog_sidebar(); ?>
                    </div>
                </div>
            </div>
        </section>
        <!-- blog-post-area-end -->

<?php include_once 'elements/footer.php'; ?>
