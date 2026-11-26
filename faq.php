<?php
/**
 * FAQ page – Divaine Tech
 * Edit the $faqs array below to add / change questions.
 * Categories are generated automatically from the 'cat' key.
 */
if (!function_exists('e')) {
    function e($v) { return htmlspecialchars((string) $v, ENT_QUOTES, 'UTF-8'); }
}

$email = 'hello@divainetech.io';
$phone = '+971 552783479';

$categories = [
    'general'  => 'General',
    'services' => 'Services',
    'process'  => 'Process & Timeline',
    'support'  => 'Support & Security',
];

$faqs = [
    // ---------- General ----------
    ['cat' => 'general', 'q' => 'What does Divaine Tech do?',
     'a' => 'Divaine Tech helps businesses turn ideas into powerful digital solutions. We build custom software, web and mobile applications, AI-driven automation and modern IT solutions that are secure, scalable and easy to use.'],
    ['cat' => 'general', 'q' => 'Which industries do you work with?',
     'a' => 'We work with startups, growing businesses and established enterprises across industries such as retail and e-commerce, finance, logistics, healthcare and education. Our team adapts its approach to the needs of each sector.'],
    ['cat' => 'general', 'q' => 'Where is Divaine Tech located?',
     'a' => 'We have offices in Dubai (UAE) and Hong Kong, and we collaborate with clients remotely across time zones through video calls, shared project boards and regular progress updates.'],
    ['cat' => 'general', 'q' => 'How can I get in touch with your team?',
     'a' => 'Use the contact form on our Contact page, email us at ' . $email . ' or call ' . $phone . '. We usually respond within one business day.'],

    // ---------- Services ----------
    ['cat' => 'services', 'q' => 'What services do you offer?',
     'a' => 'Our services include custom software development, website and web application development, mobile app development, AI and automation integration, cloud and IT infrastructure, and ongoing maintenance. Visit our Services page for the full list.'],
    ['cat' => 'services', 'q' => 'Can you build a custom solution for my business?',
     'a' => 'Yes. Every project starts with understanding your goals, users and existing workflows. We then design a tailored solution rather than forcing your business into a one-size-fits-all product.'],
    ['cat' => 'services', 'q' => 'Do you work with AI and automation?',
     'a' => 'Absolutely. We help businesses automate repetitive tasks, integrate AI into existing systems and build intelligent workflows that save time and reduce operating costs.'],
    ['cat' => 'services', 'q' => 'Which technologies do you use?',
     'a' => 'We choose the stack that fits the project. Our team works with technologies such as React, Node.js, Python, Django, Laravel, Flutter, Swift, Kotlin, PostgreSQL, MySQL, MongoDB, Docker and AWS.'],
    ['cat' => 'services', 'q' => 'Can you improve or take over an existing project?',
     'a' => 'Yes. We can audit your current application, fix performance and security issues, add new features or modernise the codebase so it is easier to maintain and scale.'],

    // ---------- Process ----------
    ['cat' => 'process', 'q' => 'How does a project with Divaine Tech work?',
     'a' => 'We follow a clear process: discovery and requirements, planning and design, development, testing, launch, and post-launch support. You are involved at every stage and see progress through regular demos and updates.'],
    ['cat' => 'process', 'q' => 'How long will my project take?',
     'a' => 'It depends on scope and complexity. A simple website may take a few weeks, while a custom platform or mobile app can take several months. After the discovery call we provide a realistic timeline with milestones.'],
    ['cat' => 'process', 'q' => 'How much does a project cost?',
     'a' => 'Pricing is based on the scope, features and timeline of your project. Request a quote and we will prepare a transparent estimate after understanding your requirements, with no hidden charges.'],
    ['cat' => 'process', 'q' => 'Will I be able to see progress during development?',
     'a' => 'Yes. We work in short iterations and share working builds, so you can review progress, give feedback and adjust priorities as the project moves forward.'],

    // ---------- Support ----------
    ['cat' => 'support', 'q' => 'Do you provide support after launch?',
     'a' => 'Yes. We offer maintenance and support plans covering bug fixes, updates, monitoring, backups and feature enhancements, so your solution keeps running smoothly.'],
    ['cat' => 'support', 'q' => 'How do you keep my data and code secure?',
     'a' => 'We follow secure development practices, restrict access to project assets, use encrypted connections and apply regular security reviews. We are also happy to sign an NDA before discussing your project.'],
    ['cat' => 'support', 'q' => 'Who owns the source code and intellectual property?',
     'a' => 'You do. Once the project is completed and agreed payments are made, the source code and deliverables are handed over to you, as set out in our project agreement.'],
    ['cat' => 'support', 'q' => 'What if I need changes after the project is delivered?',
     'a' => 'That is common. We can handle new features or changes as follow-up work or through an ongoing support plan, whichever suits you best.'],
];

include_once 'elements/header.php';
?>
        <!-- breadcrumb-area -->
        <section class="breadcrumb__area breadcrumb__bg fix" data-background="assets/img/bg/breadcrumb_bg.jpg">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="breadcrumb__content">
                            <h2 class="title">Frequently Asked Questions</h2>
                            <nav class="breadcrumb">
                                <span property="itemListElement" typeof="ListItem">
                                    <a href="index.php">Home</a>
                                </span>
                                <span class="breadcrumb-separator">/</span>
                                <span property="itemListElement" typeof="ListItem">FAQ</span>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- breadcrumb-area-end -->

        <!-- faq-area -->
        <section class="faq-page__area section-py-140 p-relative fix">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-7 col-lg-8">
                        <div class="section__title section__title-two text-center mb-40" data-sal="slide-up" data-sal-duration="700" data-sal-delay="100">
                            <span class="sub-title">FAQ</span>
                            <h2 class="title">Answers To Your Most Common Questions</h2>
                            <p class="faq-page__intro">Everything you need to know about working with Divaine Tech. Can't find what you're looking for? Our team is happy to help.</p>
                        </div>
                    </div>
                </div>

                <!-- search + tabs -->
                <div class="faq-page__toolbar" data-sal="slide-up" data-sal-duration="700" data-sal-delay="200">
                    <div class="faq-page__search">
                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                            <path d="M9 17A8 8 0 1 0 9 1a8 8 0 0 0 0 16ZM19 19l-4.35-4.35" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                        <input type="search" id="faqSearch" placeholder="Search a question..." aria-label="Search frequently asked questions" autocomplete="off">
                    </div>
                    <ul class="faq-page__tabs list-wrap" role="tablist" aria-label="FAQ categories">
                        <li><button type="button" class="faq-tab active" data-filter="all">All</button></li>
                        <?php foreach ($categories as $key => $label): ?>
                            <li><button type="button" class="faq-tab" data-filter="<?= e($key) ?>"><?= e($label) ?></button></li>
                        <?php endforeach; ?>
                    </ul>
                </div>

                <div class="row gutter-y-40 align-items-start">
                    <!-- accordion -->
                    <div class="col-lg-8">
                        <div class="faq__wrap faq-page__wrap" data-sal="slide-up" data-sal-duration="800" data-sal-delay="100">
                            <div class="accordion" id="faqAccordion">
                                <?php foreach ($faqs as $i => $faq): $open = ($i === 0); ?>
                                    <div class="accordion-item faq-item" data-cat="<?= e($faq['cat']) ?>">
                                        <h2 class="accordion-header">
                                            <button class="accordion-button<?= $open ? '' : ' collapsed' ?>" type="button" data-bs-toggle="collapse" data-bs-target="#faqItem<?= $i ?>" aria-expanded="<?= $open ? 'true' : 'false' ?>" aria-controls="faqItem<?= $i ?>">
                                                <span class="faq-num"><?= str_pad($i + 1, 2, '0', STR_PAD_LEFT) ?></span>
                                                <span class="faq-q"><?= e($faq['q']) ?></span>
                                            </button>
                                        </h2>
                                        <div id="faqItem<?= $i ?>" class="accordion-collapse collapse<?= $open ? ' show' : '' ?>" data-bs-parent="#faqAccordion">
                                            <div class="accordion-body">
                                                <p><?= e($faq['a']) ?></p>
                                            </div>
                                        </div>
                                    </div>
                                <?php endforeach; ?>
                            </div>
                            <div class="faq-page__empty" id="faqEmpty" hidden>
                                <h3>No matching questions found</h3>
                                <p>Try a different keyword, or <a href="contact.php">ask our team directly</a>.</p>
                            </div>
                        </div>
                    </div>

                    <!-- sidebar -->
                    <div class="col-lg-4">
                        <aside class="faq-page__side">
                            <div class="faq-help" data-sal="slide-left" data-sal-duration="800" data-sal-delay="200">
                                <div class="faq-help__icon">
                                    <svg width="34" height="34" viewBox="0 0 34 34" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                        <path d="M17 31c7.732 0 14-6.268 14-14S24.732 3 17 3 3 9.268 3 17c0 2.2.508 4.28 1.413 6.13L3 31l7.87-1.413A13.94 13.94 0 0 0 17 31Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                        <path d="M13 13.2a4 4 0 1 1 5.2 3.8c-.7.3-1.2.9-1.2 1.6V19M17 22.6v.2" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                </div>
                                <h3 class="title">Still Have Questions?</h3>
                                <p>Our experts are ready to discuss your idea and suggest the right solution.</p>
                                <ul class="list-wrap faq-help__list">
                                    <li><span>Email</span><a href="mailto:<?= e($email) ?>"><?= e($email) ?></a></li>
                                    <li><span>Phone</span><a href="tel:<?= e(preg_replace('/\s+/', '', $phone)) ?>"><?= e($phone) ?></a></li>
                                </ul>
                                <a href="contact.php" class="tg-btn">Contact With Us
                                    <svg width="10" height="10" viewBox="0 0 10 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M1 9L9 1M9 1H1M9 1V9" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                </a>
                            </div>

                            <div class="faq-links" data-sal="slide-left" data-sal-duration="800" data-sal-delay="300">
                                <h3 class="title">Quick Links</h3>
                                <ul class="list-wrap">
                                    <li><a href="services.php">Our Services <span>&rarr;</span></a></li>
                                    <li><a href="project.php">Our Projects <span>&rarr;</span></a></li>
                                    <li><a href="why-choose-us.php">Why Choose Us <span>&rarr;</span></a></li>
                                    <li><a href="career.php">Careers <span>&rarr;</span></a></li>
                                </ul>
                            </div>
                        </aside>
                    </div>
                </div>
            </div>
            <div class="about__shape">
                <img src="assets/img/images/inner_about_shape02.svg" alt="" class="rotateme rotatemeTwo">
            </div>
        </section>
        <!-- faq-area-end -->

        <!-- SEO: FAQPage structured data -->
        <script type="application/ld+json">
        <?= json_encode([
            '@context'   => 'https://schema.org',
            '@type'      => 'FAQPage',
            'mainEntity' => array_map(function ($f) {
                return ['@type' => 'Question', 'name' => $f['q'],
                        'acceptedAnswer' => ['@type' => 'Answer', 'text' => $f['a']]];
            }, $faqs),
        ], JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE | JSON_HEX_TAG) ?>
        </script>

<script src="assets/js/faq.js" defer></script>

<?php include_once 'elements/footer.php'; ?>
