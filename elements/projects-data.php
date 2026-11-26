<?php
/**
 * Projects data helper.
 * Loads data/project.json once per request and exposes small helper functions.
 * Shared helpers (e(), svg_*) live in services-data.php.
 */
require_once __DIR__ . '/services-data.php';

/** Returns the decoded project.json (cached for the request). */
function projects_data(): array
{
    static $data = null;
    if ($data !== null) {
        return $data;
    }

    $data = ['settings' => [], 'listing' => [], 'details' => [], 'projects' => []];
    $file = dirname(__DIR__) . '/data/project.json';

    if (is_readable($file)) {
        $decoded = json_decode((string) file_get_contents($file), true);
        if (is_array($decoded)) {
            $data = array_merge($data, $decoded);
        }
    }
    return $data;
}

function projects_all(): array
{
    return array_values(array_filter(projects_data()['projects'], function ($p) {
        return is_array($p) && !empty($p['slug']) && !empty($p['title']);
    }));
}

function project_find(string $slug): ?array
{
    foreach (projects_all() as $project) {
        if ($project['slug'] === $slug) {
            return $project;
        }
    }
    return null;
}

function project_url(array $project): string
{
    return 'project-details.php?slug=' . rawurlencode($project['slug']);
}

/** Previous / next project (wraps around). Returns [prev, next]. */
function project_neighbors(string $slug): array
{
    $all = projects_all();
    $n   = count($all);
    foreach ($all as $i => $p) {
        if ($p['slug'] === $slug) {
            return [$all[($i - 1 + $n) % $n], $all[($i + 1) % $n]];
        }
    }
    return [null, null];
}

/** The next $count projects after the current one (wraps around, excludes current). */
function project_related(string $slug, int $count = 2): array
{
    $all = projects_all();
    $n   = count($all);
    foreach ($all as $i => $p) {
        if ($p['slug'] === $slug) {
            $out = [];
            for ($k = 1; $k <= min($count, $n - 1); $k++) {
                $out[] = $all[($i + $k) % $n];
            }
            return $out;
        }
    }
    return [];
}

function svg_project_arrow(): string
{
    return '<svg width="19" height="19" viewBox="0 0 19 19" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M2 17L17 2M17 2H2M17 2V17" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" /></svg>';
}

/** Social icon SVG by name: facebook | x | instagram | pinterest. */
function social_icon(string $name): string
{
    static $icons = [
        'facebook' => '<svg width="11" height="20" viewBox="0 0 11 20" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M9.86031 11.25L10.4075 7.63046H6.9863V5.28164C6.9863 4.2914 7.46421 3.32617 8.99646 3.32617H10.5518V0.244531C10.5518 0.244531 9.14037 0 7.7909 0C4.97345 0 3.13183 1.73359 3.13183 4.87187V7.63046H0V11.25H3.13183V20H6.9863V11.25H9.86031Z" fill="currentColor" /></svg>',
        'x' => '<svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M10.2337 7.28122L16.6351 0H15.118L9.55989 6.32204L5.12043 0H0L6.71329 9.56016L0 17.1955H1.51707L7.38684 10.5192L12.0751 17.1955H17.1955L10.2333 7.28122H10.2337ZM8.15595 9.64426L2.06363 1.11744H4.39374L15.1187 16.1288H12.7889L8.15595 9.64466V9.64426Z" fill="currentColor" /></svg>',
        'instagram' => '<svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M8.79512 4.29904C6.29988 4.29904 4.28722 6.31911 4.28722 8.82352C4.28722 11.3279 6.29988 13.348 8.79512 13.348C11.2904 13.348 13.303 11.3279 13.303 8.82352C13.303 6.31911 11.2904 4.29904 8.79512 4.29904ZM8.79512 11.765C7.18263 11.765 5.86439 10.4459 5.86439 8.82352C5.86439 7.20117 7.17871 5.88202 8.79512 5.88202C10.4115 5.88202 11.7258 7.20117 11.7258 8.82352C11.7258 10.4459 10.4076 11.765 8.79512 11.765ZM14.5389 4.11397C14.5389 4.70069 14.0681 5.16929 13.4874 5.16929C12.9028 5.16929 12.436 4.69676 12.436 4.11397C12.436 3.53118 12.9068 3.05865 13.4874 3.05865C14.0681 3.05865 14.5389 3.53118 14.5389 4.11397ZM17.5245 5.18504C17.4578 3.77138 17.1361 2.51918 16.1043 1.48749C15.0764 0.455795 13.8287 0.132899 12.4203 0.0620196C10.9686 -0.0206732 6.61767 -0.0206732 5.16604 0.0620196C3.76149 0.128961 2.51387 0.451857 1.48204 1.48355C0.450202 2.51524 0.132412 3.76745 0.0617924 5.1811C-0.0205975 6.63807 -0.0205975 11.005 0.0617924 12.462C0.128489 13.8757 0.450202 15.1279 1.48204 16.1596C2.51387 17.1912 3.75757 17.5141 5.16604 17.585C6.61767 17.6677 10.9686 17.6677 12.4203 17.585C13.8287 17.5181 15.0764 17.1952 16.1043 16.1596C17.1322 15.1279 17.4539 13.8757 17.5245 12.462C17.6069 11.005 17.6069 6.64201 17.5245 5.18504ZM15.6492 14.0253C15.3432 14.7971 14.7507 15.3917 13.9778 15.7028C12.8205 16.1635 10.0741 16.0572 8.79512 16.0572C7.51611 16.0572 4.76586 16.1596 3.6124 15.7028C2.84343 15.3956 2.25101 14.801 1.94107 14.0253C1.48204 12.8637 1.58797 10.1072 1.58797 8.82352C1.58797 7.53981 1.48596 4.77945 1.94107 3.62175C2.24709 2.84995 2.83951 2.25535 3.6124 1.94427C4.76978 1.48355 7.51611 1.58987 8.79512 1.58987C10.0741 1.58987 12.8244 1.48749 13.9778 1.94427C14.7468 2.25141 15.3392 2.84601 15.6492 3.62175C16.1082 4.78339 16.0023 7.53981 16.0023 8.82352C16.0023 10.1072 16.1082 12.8676 15.6492 14.0253Z" fill="currentColor" /></svg>',
        'pinterest' => '<svg width="16" height="20" viewBox="0 0 16 20" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M8.09703 0C4.0247 0 0 2.74089 0 7.1768C0 9.99783 1.57178 11.6007 2.52437 11.6007C2.91731 11.6007 3.14355 10.4947 3.14355 10.1822C3.14355 9.8095 2.20287 9.01608 2.20287 7.46532C2.20287 4.24357 4.63198 1.9595 7.77553 1.9595C10.4785 1.9595 12.479 3.51026 12.479 6.35934C12.479 8.48714 11.6335 12.4783 8.89483 12.4783C7.90651 12.4783 7.06109 11.757 7.06109 10.7231C7.06109 9.20843 8.10894 7.74181 8.10894 6.17902C8.10894 3.52629 4.38192 4.00715 4.38192 7.21287C4.38192 7.88607 4.46527 8.6314 4.76296 9.24449C4.21522 11.6247 3.09592 15.1711 3.09592 17.6234C3.09592 18.3808 3.20309 19.1261 3.27453 19.8835C3.40949 20.0357 3.34201 20.0197 3.5484 19.9436C5.54885 17.1786 5.4774 16.6377 6.38237 13.0192C6.87057 13.9569 8.13275 14.4618 9.13297 14.4618C13.3482 14.4618 15.2415 10.3144 15.2415 6.57573C15.2415 2.59663 11.836 0 8.09703 0Z" fill="currentColor" /></svg>',
    ];
    return $icons[$name] ?? '';
}

/** Renders one project card (used on the listing page and in "More Projects"). */
function project_card(array $project, string $wrapClass = 'col-lg-4 col-sm-6'): void
{
    $url = e(project_url($project));
    $slug = e($project['slug']);
    ?>
                    <div class="<?= e($wrapClass) ?>">
                        <div class="project__item">
                            <div class="project__thumb">
                                <a href="<?= $url ?>" data-slug="<?= $slug ?>"><img src="<?= e($project['thumb'] ?? '') ?>" alt="<?= e($project['title']) ?>" loading="lazy"></a>
                            </div>
                            <div class="project__content">
                                <h2 class="title"><a href="<?= $url ?>" data-slug="<?= $slug ?>"><?= e($project['title']) ?></a></h2>
                                <span><?= e($project['category'] ?? '') ?></span>
                            </div>
                            <div class="project__icon">
                                <a href="<?= $url ?>" data-slug="<?= $slug ?>" aria-label="<?= e($project['title']) ?>"><?= svg_project_arrow() ?></a>
                            </div>
                        </div>
                    </div>
<?php
}
