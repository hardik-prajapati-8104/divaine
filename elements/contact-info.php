<?php
/**
 * Contact information list: both offices, email and phone.
 * Include inside the contact column:  <?php include 'elements/contact-info.php'; ?>
 * Selecting an office highlights it and switches the map (see assets/js/contact-map.js).
 */
$offices = [
    [
        'label' => 'Dubai Office',
        'lines' => ['Office No: 430-1, Bin Dasmal Building,', 'Al Goze Industrial First, Al Qouz,', 'Dubai - UAE'],
        'map'   => 'https://maps.google.com/maps?q=Bin+Dasmal+Building+Al+Quoz+Dubai&z=15&output=embed',
    ],
    [
        'label' => 'Hong Kong Office',
        'lines' => ['Unit 29-30 11/F Beverley Commercial', 'Centre 87-105 Chatham Road South,', 'Tsim Sha Tsui, Hong Kong'],
        'map'   => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3691.3802847915804!2d114.17321962615162!3d22.301453192852478!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x340401001043262d%3A0x1c5b9aca0f6efd32!2sUnit%201307%2C%20Beverley%20Commercial%20Centre%2C%2087-105%20Chatham%20Road%20South%2C%20Tsim%20Sha%20Tsui%2C%20KLN%2CHongkong!5e0!3m2!1sen!2sin!4v1795594364513!5m2!1sen!2sin',
    ],
];
$email = 'hello@divainetech.io';
// Phone numbers: add or edit entries here (label => number).
// TODO: replace the Hong Kong placeholder below with the real number.
$phones = [
    'Phone - Dubai'     => '+971 552783479',
    'Phone - Hong Kong' => '+852 51699601',
];
$icons = [
    'pin'   => '<svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M25 12.5761C25 21.0609 14.1667 28.3337 14.1667 28.3337C14.1667 28.3337 3.33334 21.0609 3.33334 12.5761C3.33334 9.68281 4.47471 6.90804 6.50635 4.86219C8.538 2.81634 11.2935 1.66699 14.1667 1.66699C17.0399 1.66699 19.7954 2.81634 21.827 4.86219C23.8586 6.90804 25 9.68281 25 12.5761Z" stroke="currentColor" stroke-width="2.16667" stroke-linecap="round" stroke-linejoin="round" /><path d="M14.1667 16.2124C16.161 16.2124 17.7778 14.5844 17.7778 12.5761C17.7778 10.5678 16.161 8.93972 14.1667 8.93972C12.1723 8.93972 10.5556 10.5678 10.5556 12.5761C10.5556 14.5844 12.1723 16.2124 14.1667 16.2124Z" stroke="currentColor" stroke-width="2.16667" stroke-linecap="round" stroke-linejoin="round" /></svg>',
    'mail'  => '<svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M28.3333 7.5C28.3333 6.125 27.1333 5 25.6667 5H4.33332C2.86666 5 1.66666 6.125 1.66666 7.5M28.3333 7.5V22.5C28.3333 23.875 27.1333 25 25.6667 25H4.33332C2.86666 25 1.66666 23.875 1.66666 22.5V7.5M28.3333 7.5L15 16.2501L1.66666 7.5" stroke="currentColor" stroke-width="1.83333" stroke-linecap="round" stroke-linejoin="round" /></svg>',
    'phone' => '<svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M26.6197 20.8025V24.3151C26.6211 24.6412 26.5543 24.964 26.4236 25.2627C26.293 25.5615 26.1014 25.8297 25.8611 26.0502C25.6208 26.2706 25.3371 26.4384 25.0282 26.5429C24.7193 26.6474 24.392 26.6862 24.0672 26.6568C20.4643 26.2653 17.0034 25.0342 13.9626 23.0623C11.1336 21.2646 8.73509 18.8661 6.93742 16.0371C4.95862 12.9825 3.72718 9.50477 3.34285 5.88562C3.31359 5.56183 3.35207 5.2355 3.45584 4.92741C3.55961 4.61931 3.72639 4.33619 3.94557 4.09608C4.16475 3.85598 4.43153 3.66414 4.72891 3.53278C5.0263 3.40142 5.34777 3.33343 5.67288 3.33312H9.18548C9.75372 3.32753 10.3046 3.52875 10.7354 3.89927C11.1663 4.2698 11.4477 4.78435 11.5272 5.34702C11.6755 6.47113 11.9504 7.57486 12.3468 8.63716C12.5044 9.05624 12.5385 9.5117 12.4451 9.94956C12.3517 10.3874 12.1347 10.7893 11.8199 11.1077L10.3329 12.5947C11.9997 15.526 14.4268 17.9531 17.3582 19.6199L18.8452 18.1329C19.1635 17.8181 19.5654 17.6012 20.0033 17.5078C20.4411 17.4144 20.8966 17.4485 21.3157 17.606C22.378 18.0024 23.4817 18.2774 24.6058 18.4256C25.1746 18.5059 25.694 18.7923 26.0654 19.2306C26.4367 19.6688 26.634 20.2283 26.6197 20.8025Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" /></svg>',
];
$h = function ($v) { return htmlspecialchars((string) $v, ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8'); };
?>
<link rel="stylesheet" href="assets/css/contact-offices.css">
                            <div class="contact__info-list contact__info-list-three" id="office-list">
<?php foreach ($offices as $i => $office): ?>
                                <div class="contact__info-item contact__info-item-three contact__office<?= $i === 0 ? ' is-active' : '' ?>">
                                    <div class="icon"><?= $icons['pin'] ?></div>
                                    <div class="content">
                                        <span><?= $h($office['label']) ?></span>
                                        <h2 class="title"><?= implode('<br>', array_map($h, $office['lines'])) ?></h2>
                                        <a href="#office-map" class="office__map-link" data-map="<?= $h($office['map']) ?>" aria-label="View <?= $h($office['label']) ?> on map">View on map</a>
                                    </div>
                                </div>
<?php endforeach; ?>
                                <div class="contact__info-item contact__info-item-three">
                                    <div class="icon"><?= $icons['mail'] ?></div>
                                    <div class="content">
                                        <span>Email Address</span>
                                        <h2 class="title"><a href="mailto:<?= $h($email) ?>"><?= $h($email) ?></a></h2>
                                    </div>
                                </div>
                                <div class="contact__phone-row">
<?php foreach ($phones as $plabel => $pnum): ?>
                                <div class="contact__info-item contact__info-item-three">
                                    <div class="icon"><?= $icons['phone'] ?></div>
                                    <div class="content">
                                        <span><?= $h($plabel) ?></span>
                                        <h2 class="title"><a href="tel:<?= $h(preg_replace('/[^\d+]/', '', $pnum)) ?>"><?= $h($pnum) ?></a></h2>
                                    </div>
                                </div>
<?php endforeach; ?>
                                </div>
                            </div>
