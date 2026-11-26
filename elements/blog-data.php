<?php
/**
 * Blog data helper.
 * Loads data/blog.json once per request and provides filtering, pagination
 * and the shared sidebar. Shared helpers (e(), svg_*, social_icon()) come
 * from projects-data.php / services-data.php.
 */
require_once __DIR__ . '/projects-data.php';

function blog_data(): array
{
    static $data = null;
    if ($data !== null) {
        return $data;
    }

    $data = ['settings' => [], 'listing' => [], 'posts' => []];
    $file = dirname(__DIR__) . '/data/blog.json';

    if (is_readable($file)) {
        $decoded = json_decode((string) file_get_contents($file), true);
        if (is_array($decoded)) {
            $data = array_merge($data, $decoded);
        }
    }
    return $data;
}

function blog_slug(string $text): string
{
    return trim(preg_replace('/[^a-z0-9]+/', '-', strtolower($text)), '-');
}

/** All valid posts, newest first. */
function blog_posts(): array
{
    static $posts = null;
    if ($posts === null) {
        $posts = array_values(array_filter(blog_data()['posts'], function ($p) {
            return is_array($p) && !empty($p['slug']) && !empty($p['title']);
        }));
        usort($posts, function ($a, $b) {
            return strcmp($b['date'] ?? '', $a['date'] ?? '');
        });
    }
    return $posts;
}

function blog_find(string $slug): ?array
{
    foreach (blog_posts() as $post) {
        if ($post['slug'] === $slug) {
            return $post;
        }
    }
    return null;
}

function blog_post_url(array $post): string
{
    return 'blog-details.php?slug=' . rawurlencode($post['slug']);
}

function blog_date(array $post, string $format = 'd M, Y'): string
{
    $time = strtotime($post['date'] ?? '');
    return $time ? date($format, $time) : '';
}

/** Categories as [slug => ['name' => ..., 'count' => ...]] in order of first appearance. */
function blog_categories(): array
{
    $out = [];
    foreach (blog_posts() as $post) {
        $name = $post['category'] ?? '';
        if ($name === '') {
            continue;
        }
        $slug = blog_slug($name);
        $out[$slug] = ['name' => $name, 'count' => ($out[$slug]['count'] ?? 0) + 1];
    }
    return $out;
}

/** Tags as [slug => name]. */
function blog_tags(): array
{
    $out = [];
    foreach (blog_posts() as $post) {
        foreach ($post['tags'] ?? [] as $tag) {
            $out[blog_slug($tag)] = $tag;
        }
    }
    return $out;
}

/** Reads and sanitizes ?page, ?category, ?tag, ?q from a request array. */
function blog_params(array $input): array
{
    $get      = function (string $key) use ($input): string {
        return isset($input[$key]) && is_scalar($input[$key]) ? (string) $input[$key] : '';
    };
    $category = blog_slug($get('category'));
    $tag      = blog_slug($get('tag'));
    $q        = trim($get('q'));
    $q        = function_exists('mb_substr') ? mb_substr($q, 0, 80) : substr($q, 0, 80);

    return [
        'page'     => max(1, (int) $get('page')),
        'category' => isset(blog_categories()[$category]) ? $category : '',
        'tag'      => isset(blog_tags()[$tag]) ? $tag : '',
        'q'        => $q,
    ];
}

/** URL of the blog list for the given params (empty values and page 1 are omitted). */
function blog_url(array $params = []): string
{
    $query = array_filter([
        'category' => $params['category'] ?? '',
        'tag'      => $params['tag'] ?? '',
        'q'        => $params['q'] ?? '',
        'page'     => ($params['page'] ?? 1) > 1 ? $params['page'] : '',
    ], function ($v) {
        return $v !== '' && $v !== null;
    });
    return 'blog.php' . ($query ? '?' . http_build_query($query) : '');
}

function blog_contains(string $haystack, string $needle): bool
{
    return function_exists('mb_stripos') ? mb_stripos($haystack, $needle) !== false : stripos($haystack, $needle) !== false;
}

/** Filters and paginates. Returns items, page, pages, total (page is clamped). */
function blog_query(array $params): array
{
    $per   = max(1, (int) (blog_data()['listing']['per_page'] ?? 4));
    $items = array_values(array_filter(blog_posts(), function ($post) use ($params) {
        if ($params['category'] !== '' && blog_slug($post['category'] ?? '') !== $params['category']) {
            return false;
        }
        if ($params['tag'] !== '' && !in_array($params['tag'], array_map('blog_slug', $post['tags'] ?? []), true)) {
            return false;
        }
        if ($params['q'] !== '') {
            $text = ($post['title'] ?? '') . ' ' . ($post['author']['name'] ?? '') . ' ' . ($post['excerpt'] ?? '') . ' ' . ($post['category'] ?? '') . ' ' . implode(' ', $post['tags'] ?? []);
            return blog_contains($text, $params['q']);
        }
        return true;
    }));

    $total = count($items);
    $pages = max(1, (int) ceil($total / $per));
    $page  = min($params['page'], $pages);

    return ['items' => array_slice($items, ($page - 1) * $per, $per), 'page' => $page, 'pages' => $pages, 'total' => $total];
}

/** Page numbers to show, with null for "..." gaps. */
function blog_page_window(int $page, int $pages): array
{
    if ($pages <= 7) {
        return range(1, $pages);
    }
    $set = array_unique(array_filter([1, $page - 1, $page, $page + 1, $pages], function ($n) use ($pages) {
        return $n >= 1 && $n <= $pages;
    }));
    sort($set);
    $out  = [];
    $last = 0;
    foreach ($set as $n) {
        if ($n - $last > 1) {
            $out[] = null;
        }
        $out[] = $n;
        $last  = $n;
    }
    return $out;
}

function svg_search(): string
{
    return '<svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18" fill="none"><path d="M17 17L13.5247 13.5247M15.681 8.3405C15.681 12.3945 12.3945 15.681 8.3405 15.681C4.28645 15.681 1 12.3945 1 8.3405C1 4.28645 4.28645 1 8.3405 1C12.3945 1 15.681 4.28645 15.681 8.3405Z" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" /></svg>';
}

function svg_calendar(): string
{
    return '<svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M12.1111 2V4.80003M5.88888 2V4.80003M2 7.59992H16M3.55556 3.39988H14.4444C15.3036 3.39988 16 4.02668 16 4.79989V14.6C16 15.3732 15.3036 16 14.4444 16H3.55556C2.69645 16 2 15.3732 2 14.6V4.79989C2 4.02668 2.69645 3.39988 3.55556 3.39988Z" stroke="currentColor" stroke-width="1.1" stroke-linecap="round" stroke-linejoin="round"></path></svg>';
}

function svg_play(): string
{
    return '<svg width="16" height="18" viewBox="0 0 16 18" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M15.5 8.1341C16.1667 8.519 16.1667 9.48125 15.5 9.86615L2 17.6604C1.33333 18.0453 0.499999 17.5642 0.499999 16.7944L0.5 1.20589C0.5 0.436092 1.33333 -0.0450328 2 0.339867L15.5 8.1341Z" fill="currentColor"></path></svg>';
}

/** Renders the pagination <nav>. */
function blog_pagination(int $page, int $pages, array $params): void
{
    if ($pages < 2) {
        return;
    }
    $link = function (int $n, string $label, string $extra = '') use ($params) {
        $url = e(blog_url(array_merge($params, ['page' => $n])));
        return '<a href="' . $url . '" data-ajax data-page="' . $n . '"' . $extra . '>' . $label . '</a>';
    };
    ?>
                        <nav class="pagination__wrap mt-40" aria-label="Blog pagination">
                            <ul class="list-wrap">
<?php if ($page > 1): ?>
                                <li><?= $link($page - 1, '&laquo;', ' aria-label="Previous page" rel="prev"') ?></li>
<?php endif; ?>
<?php foreach (blog_page_window($page, $pages) as $n): ?>
<?php if ($n === null): ?>
                                <li><a href="#" class="pagination__gap" tabindex="-1" aria-hidden="true" onclick="return false">&hellip;</a></li>
<?php else: ?>
                                <li<?= $n === $page ? ' class="active"' : '' ?>><?= $link($n, (string) $n, $n === $page ? ' aria-current="page"' : '') ?></li>
<?php endif; ?>
<?php endforeach; ?>
<?php if ($page < $pages): ?>
                                <li><?= $link($page + 1, '&raquo;', ' aria-label="Next page" rel="next"') ?></li>
<?php endif; ?>
                            </ul>
                        </nav>
<?php
}

/**
 * Renders the shared sidebar.
 * $params = current list filters; $ajax adds data-ajax so the blog page swaps content in place.
 */
function blog_sidebar(array $params = [], bool $ajax = false): void
{
    $settings = blog_data()['settings'];
    $attr     = $ajax ? ' data-ajax' : '';
    $recent   = array_slice(blog_posts(), 0, max(1, (int) ($settings['recent_count'] ?? 4)));
    $phone    = $settings['phone'] ?? '';
    $href     = $settings['phone_href'] ?? preg_replace('/[^\d+]/', '', $phone);
    $base     = ['page' => 1, 'q' => ''];
    ?>
                        <aside class="blog__sidebar">
                            <div class="sidebar__widget">
                                <h2 class="widget__title">Search</h2>
                                <form action="blog.php" method="get" class="blog__search" id="blog-search"<?= $ajax ? ' data-ajax-form' : '' ?> role="search">
                                    <input type="text" name="q" value="<?= e($params['q'] ?? '') ?>" placeholder="Search" maxlength="80" aria-label="Search posts">
                                    <button type="submit" aria-label="Search"><?= svg_search() ?></button>
                                </form>
                            </div>
                            <div class="sidebar__widget">
                                <h2 class="widget__title">Recent Posts</h2>
                                <div class="rc-post-wrap">
<?php foreach ($recent as $post): ?>
                                    <div class="rc-post-item">
                                        <div class="thumb">
                                            <a href="<?= e(blog_post_url($post)) ?>"><img src="<?= e($post['image'] ?? '') ?>" alt="<?= e($post['title']) ?>" loading="lazy"></a>
                                        </div>
                                        <div class="content">
                                            <span class="date"><?= svg_calendar() ?> <?= e(blog_date($post, 'M d, Y')) ?></span>
                                            <h2 class="post-title"><a href="<?= e(blog_post_url($post)) ?>"><?= e($post['title']) ?></a></h2>
                                        </div>
                                    </div>
<?php endforeach; ?>
                                </div>
                            </div>
                            <div class="sidebar__widget">
                                <h2 class="widget__title">Categories</h2>
                                <div class="bs-cat-list">
                                    <ul class="list-wrap" id="blog-cat-list">
<?php foreach (blog_categories() as $slug => $cat):
    $on = ($params['category'] ?? '') === $slug; ?>
                                        <li><a href="<?= e(blog_url($base + ['category' => $on ? '' : $slug])) ?>"<?= $attr ?><?= $on ? ' class="active" aria-current="true"' : '' ?>><?= e($cat['name']) ?> <span>(<?= str_pad((string) $cat['count'], 2, '0', STR_PAD_LEFT) ?>)</span></a></li>
<?php endforeach; ?>
                                    </ul>
                                </div>
                            </div>
                            <div class="sidebar__widget">
                                <h2 class="widget__title">Popular Tags</h2>
                                <div class="sidebar__tag-list">
                                    <ul class="list-wrap" id="blog-tag-list">
<?php foreach (blog_tags() as $slug => $name):
    $on = ($params['tag'] ?? '') === $slug; ?>
                                        <li><a href="<?= e(blog_url($base + ['tag' => $on ? '' : $slug])) ?>"<?= $attr ?><?= $on ? ' class="active" aria-current="true"' : '' ?>><?= e($name) ?></a></li>
<?php endforeach; ?>
                                    </ul>
                                </div>
                            </div>
                            <div class="sidebar__widget sidebar__widget-bg sidebar__widget-bg-two" data-background="<?= e($settings['sidebar_image'] ?? 'assets/img/bg/sidebar_bg.jpg') ?>">
                                <div class="sidebar__contact">
                                    <h2 class="title">Reach out to us whenever you need</h2>
                                    <p>We are committed to excellence at our IT solutions company.</p>
                                    <div class="cta__contact">
                                        <div class="icon"><?= svg_phone() ?></div>
                                        <div class="content">
                                            <span>Call For More Info</span>
                                            <a href="tel:<?= e($href) ?>"><?= e($phone) ?></a>
                                        </div>
                                    </div>
                                    <a href="<?= e($settings['contact_url'] ?? 'contact.php') ?>" class="tg-btn">Contact With Us <?= svg_arrow(10) ?></a>
                                </div>
                            </div>
                        </aside>
<?php
}
