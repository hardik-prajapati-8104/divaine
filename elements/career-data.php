<?php
/**
 * Career data helper.
 * Loads data/career.json once per request and exposes small helper functions.
 * Shared helpers (e(), svg_check(), svg_arrow(), svg_phone()) live in services-data.php.
 */
require_once __DIR__ . '/services-data.php';

function career_data(): array
{
    static $data = null;
    if ($data !== null) {
        return $data;
    }

    $data = ['settings' => [], 'intro' => [], 'benefits' => [], 'jobs_section' => [], 'contact' => [], 'countries' => [], 'jobs' => []];
    $file = dirname(__DIR__) . '/data/career.json';

    if (is_readable($file)) {
        $decoded = json_decode((string) file_get_contents($file), true);
        if (is_array($decoded)) {
            $data = array_merge($data, $decoded);
        }
    }
    return $data;
}

function career_jobs(): array
{
    return array_values(array_filter(career_data()['jobs'], function ($job) {
        return is_array($job) && !empty($job['slug']) && !empty($job['title']);
    }));
}

function career_find(string $slug): ?array
{
    foreach (career_jobs() as $job) {
        if ($job['slug'] === $slug) {
            return $job;
        }
    }
    return null;
}

function career_url(array $job): string
{
    return 'career-details.php?slug=' . rawurlencode($job['slug']);
}

/** Renders a <li> check list from an array of strings. */
function career_check_list(array $items, string $class): void
{
    ?>
                                <ul class="<?= e($class) ?>">
<?php foreach ($items as $item): ?>
                                    <li><?= svg_check() ?> <?= e($item) ?></li>
<?php endforeach; ?>
                                </ul>
<?php
}

function svg_arrow_prev(): string
{
    return '<svg width="20" height="16" viewBox="0 0 20 16" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M17.9997 7.99998H1.33301M1.33301 7.99998L7.99967 14.6666M1.33301 7.99998L7.99967 1.33331" stroke="currentColor" stroke-width="2.4" stroke-linecap="round" stroke-linejoin="round" /></svg>';
}

function svg_arrow_next(): string
{
    return '<svg width="20" height="16" viewBox="0 0 20 16" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M2.00033 7.99998H18.667M18.667 7.99998L12.0003 14.6666M18.667 7.99998L12.0003 1.33331" stroke="currentColor" stroke-width="2.4" stroke-linecap="round" stroke-linejoin="round" /></svg>';
}

function svg_pin(): string
{
    return '<svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M16.6671 8.38381C16.6671 14.0404 9.44488 18.8889 9.44488 18.8889C9.44488 18.8889 2.22266 14.0404 2.22266 8.38381C2.22266 6.45496 2.98357 4.60512 4.338 3.24122C5.69243 1.87732 7.52943 1.11108 9.44488 1.11108C11.3603 1.11108 13.1973 1.87732 14.5518 3.24122C15.9062 4.60512 16.6671 6.45496 16.6671 8.38381Z" stroke="currentColor" stroke-width="1.44444" stroke-linecap="round" stroke-linejoin="round" /><path d="M9.44488 10.8081C10.7745 10.8081 11.8523 9.72268 11.8523 8.38381C11.8523 7.04494 10.7745 5.95957 9.44488 5.95957C8.1153 5.95957 7.03747 7.04494 7.03747 8.38381C7.03747 9.72268 8.1153 10.8081 9.44488 10.8081Z" stroke="currentColor" stroke-width="1.44444" stroke-linecap="round" stroke-linejoin="round" /></svg>';
}

/** Contact icons: location | mail | phone. */
function career_contact_icon(string $name): string
{
    static $icons = [
        'location' => '<svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M25 12.5761C25 21.0609 14.1667 28.3337 14.1667 28.3337C14.1667 28.3337 3.33334 21.0609 3.33334 12.5761C3.33334 9.68281 4.47471 6.90804 6.50635 4.86219C8.538 2.81634 11.2935 1.66699 14.1667 1.66699C17.0399 1.66699 19.7954 2.81634 21.827 4.86219C23.8586 6.90804 25 9.68281 25 12.5761Z" stroke="currentColor" stroke-width="2.16667" stroke-linecap="round" stroke-linejoin="round" /><path d="M14.1667 16.2124C16.161 16.2124 17.7778 14.5844 17.7778 12.5761C17.7778 10.5678 16.161 8.93972 14.1667 8.93972C12.1723 8.93972 10.5556 10.5678 10.5556 12.5761C10.5556 14.5844 12.1723 16.2124 14.1667 16.2124Z" stroke="currentColor" stroke-width="2.16667" stroke-linecap="round" stroke-linejoin="round" /></svg>',
        'mail'     => '<svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M28.3333 7.5C28.3333 6.125 27.1333 5 25.6667 5H4.33332C2.86666 5 1.66666 6.125 1.66666 7.5M28.3333 7.5V22.5C28.3333 23.875 27.1333 25 25.6667 25H4.33332C2.86666 25 1.66666 23.875 1.66666 22.5V7.5M28.3333 7.5L15 16.2501L1.66666 7.5" stroke="currentColor" stroke-width="1.83333" stroke-linecap="round" stroke-linejoin="round" /></svg>',
        'phone'    => '<svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M26.6197 20.8025V24.3151C26.6211 24.6412 26.5543 24.964 26.4236 25.2627C26.293 25.5615 26.1014 25.8297 25.8611 26.0502C25.6208 26.2706 25.3371 26.4384 25.0282 26.5429C24.7193 26.6474 24.392 26.6862 24.0672 26.6568C20.4643 26.2653 17.0034 25.0342 13.9626 23.0623C11.1336 21.2646 8.73509 18.8661 6.93742 16.0371C4.95862 12.9825 3.72718 9.50477 3.34285 5.88562C3.31359 5.56183 3.35207 5.2355 3.45584 4.92741C3.55961 4.61931 3.72639 4.33619 3.94557 4.09608C4.16475 3.85598 4.43153 3.66414 4.72891 3.53278C5.0263 3.40142 5.34777 3.33343 5.67288 3.33312H9.18548C9.75372 3.32753 10.3046 3.52875 10.7354 3.89927C11.1663 4.2698 11.4477 4.78435 11.5272 5.34702C11.6755 6.47113 11.9504 7.57486 12.3468 8.63716C12.5044 9.05624 12.5385 9.5117 12.4451 9.94956C12.3517 10.3874 12.1347 10.7893 11.8199 11.1077L10.3329 12.5947C11.9997 15.526 14.4268 17.9531 17.3582 19.6199L18.8452 18.1329C19.1635 17.8181 19.5654 17.6012 20.0033 17.5078C20.4411 17.4144 20.8966 17.4485 21.3157 17.606C22.378 18.0024 23.4817 18.2774 24.6058 18.4256C25.1746 18.5059 25.694 18.7923 26.0654 19.2306C26.4367 19.6688 26.634 20.2283 26.6197 20.8025Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" /></svg>',
    ];
    return $icons[$name] ?? '';
}
