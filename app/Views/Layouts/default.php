<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]>      <html class="no-js"> <![endif]-->
<html>

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="google-site-verification" content="0S_VjcXP7J6EL7ie6kKufHRzQ6lHLVlP4mnM3c20_h8" />


    <title>
        <?= $this->renderSection('title') ?> - Strategic Alliance Financial Group
    </title>
    <meta name="description"
        content="Strategic Alliance Financial Group offers expert financial advice and customized investment solutions to help you achieve your financial goals." />

    <meta name="keywords"
        content="financial services, investment planning, wealth management, Strategic Alliance Financial Group" />

    <meta name="author" content="Strategic Alliance Financial Group" />
    <meta property="og:title" content="Strategic Alliance Financial Group" />
    <meta property="og:description"
        content="Helping you grow and manage your wealth through strategic financial planning." />
    <meta property="og:image" content="https://safg.ca/img/phone-blue.jpg" />
    <meta property="og:url" content="https://safg.ca/" />
    <meta property="og:type" content="website" />
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:title" content="Strategic Alliance Financial Group" />
    <meta name="twitter:description"
        content="Helping you grow and manage your wealth through strategic financial planning." />
    <meta name="twitter:image" content="https://safg.ca/img/phone-blue.jpg" />


    <meta name="theme-color" content="#003876" />

    <meta name="robots" content="index, follow" />
    <link rel="canonical" href="https://safg.ca/" />


    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" />
    <link rel="stylesheet" href="<?= base_url('/css/custom.css') ?>" />
    <link rel="stylesheet" href="<?= base_url('/css/safg.css') ?>" />
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link
        href="https://fonts.bunny.net/css?family=fustat:200,300,400,500,600,700,800|lora:400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet" />
    <!-- Favicon: Branding and UX -->
    <link rel="icon" type="image/png" href="<?= base_url('/favicon.ico') ?>">
    <script src="<?= base_url('js/loading.js') ?>"></script>
</head>
<header>

    <div id="loading">
        <img src="<?= base_url('img/simple-logo.svg') ?>" alt="Loading...">
    </div>

    <nav class="navbar navbar-expand-lg">
        <a class="navbar-brand" href="<?= site_url('/') ?>"><img src="<?= base_url('img/logo.svg') ?>" alt="logo" /></a>
        <button class="navbar-toggler p-2" type="button" data-bs-toggle="collapse"
            data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
            aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
            <ul class="navbar-nav fw-light h-100 my-2">
                <li class="nav-link">
                    <a class="icon-link icon-link-hover" href="<?= site_url('/') ?>">
                        Home
                        <i class="bi bi-chevron-right"></i>
                    </a>
                </li>
                <li class="nav-link">
                    <a class="icon-link icon-link-hover" href="<?= site_url('about') ?>">
                        Knowledge Group
                        <i class="bi bi-chevron-right"></i>
                    </a>
                </li>
                <li class="nav-link">
                    <a class="icon-link icon-link-hover" href="<?= site_url('partners') ?>">
                        Strategic Partners
                        <i class="bi bi-chevron-right"></i>
                    </a>
                </li>
                <li class="nav-link">
                    <a class="icon-link icon-link-hove" href="<?= site_url('products') ?>">
                        Insurance & Investment
                        <i class="bi bi-chevron-right"></i>
                    </a>
                </li>
                <li class="nav-link">
                    <a class="icon-link icon-link-hover" href="https://www.safgbenefitssolutions.com/">
                        Group Benefits
                        <i class="bi bi-box-arrow-up-right"></i>
                    </a>
                </li>
            </ul>
        </div>
    </nav>
</header>

<body class="container lh-base">
    <div class="ledger mx-auto">
        <?= $this->renderSection('content'); ?>
        <section class="row my-5">
            <div class="col">
                <h1 class="text-dark-emphasis fw-light">
                    <span class="text-primary">Gain</span> the Strategic Alliance <span
                        class="text-secondary">advantage</span>.
                    Join our <span class="serif fst-italic">winning</span> team today!
                </h1>
            </div>
        </section>

        <section class="row mx-1 mb-5">
            <div class="col">
                <h2 class="serif">
                    Connect with the Group
                </h2>
                <h3 class="lead"><span class="text-primary">Call</span> or
                    <span class="text-secondary">email</span> us for more details or to ask a question.
                </h3>
                <ul class="list-group list-unstyled text-body-tertiary fw-light w-55">
                    <li class="list-item d-flex d-flex">
                        <a class="text-body-tertiary"
                            href="https://www.google.ca/maps/place/5500+Explorer+Dr,+Mississauga,+ON+L4W+5C7/@43.65978,-79.612339,1270m/data=!3m2!1e3!4b1!4m6!3m5!1s0x882b38fe1445f335:0xf88b5061975dffcd!8m2!3d43.65978!4d-79.6097641!16s%2Fg%2F11bw3hvt8j?entry=ttu&g_ep=EgoyMDI1MDUxMi4wIKXMDSoASAFQAw%3D%3D">
                            Mississauga ON
                            <i class="bi bi-geo-alt-fill me-1"></i>
                        </a>
                    </li>
                    <li class="list-item d-flex">
                        <a class="text-body-tertiary"
                            href="https://www.google.ca/maps/place/3+Director+Ct,+Toronto,+ON+L4L+4S5/@43.7722047,-79.5423266,1268m/data=!3m2!1e3!4b1!4m6!3m5!1s0x882b2fe0c579bcb7:0xb502baecec6e50e1!8m2!3d43.7722047!4d-79.5397517!16s%2Fg%2F11c0_qn1s9?entry=ttu&g_ep=EgoyMDI1MDUxMi4wIKXMDSoASAFQAw%3D%3D">
                            Woodbridge ON
                            <i class="bi bi-geo-alt-fill me-1"></i>
                        </a>
                    </li>
                    <li class="list-item">
                        <a class="text-body-tertiary" href="tel:1-866-737-9494">
                            1-866-737-9494
                        </a>
                    </li>
                    <li class="list-item">
                        <a class="text-body-tertiary" href="mailto:info@safg.ca">
                            info@safg.ca</a>
                    </li>
                </ul>
        </section>

        <section class="row row mx-1 mb-5">
            <div class="col">
                <h2 class="serif">
                    Resource Center
                </h2>
                <h3 class="lead">For <span class="text-primary">brokers</span>, our
                    compliance
                    <span class="text-secondary">resource</span> center.
                </h3>
                <ul class="list-group list-unstyled text-body-tertiary fw-light">
                    <li class="list-item">
                        <a class="text-body-tertiary" href="https://docs.safg.ca">
                            Policies & Procedures Manual
                            <i class="bi bi-box-arrow-up-right ms-1 align-top fs-7"></i>
                        </a>
                    </li>
                </ul>
            </div>
        </section>
    </div>
    <!--     <button id="to-top-btn" title="Go to top" aria-label="Scroll to top">
        <i class="bi bi-arrow-up-circle"></i>
    </button> -->
</body>

<footer class="text-body-tertiary mb-3 ledger mx-auto">
    <div class="row border-top">
        <div class="py-5 p-0 d-flex">
            <div class="col">
                <ul class="rights">
                    <li>
                        <a class="fw-light mb-1 text-body-tertiary" href="mailto:info@safg.ca">Submit a Complaint</a>
                    </li>
                    <li>
                        <a href="/privacy-policy" class="fw-light mb-1 text-body-tertiary">Privacy Policy</a>
                    </li>
                    <li>
                        <a href="/terms-conditions" class="fw-light mb-1 text-body-tertiary">Terms & Conditions</a>
                    </li>
                    <li>
                        <a href="/accessibility-policy" class="fw-light mb-1 text-body-tertiary">Accessibility
                            Policy</a>
                    </li>
                </ul>
            </div>
            <div class="col">
                <ul class="rights">
                    <li>
                        <a class="fw-light mb-1 text-body-tertiary" href="<?= site_url('about') ?>">Knowledge
                            Group</a>
                    </li>
                    <li>
                        <a class="fw-light mb-1 text-body-tertiary" href="<?= site_url('partners') ?>">Strategic
                            Partners</a>
                    </li>
                    <li>
                        <a class="fw-light mb-1 text-body-tertiary" href="<?= site_url('products') ?>">Insurance &
                            Investment</a>
                    </li>
                    <li>
                        <a class="fw-light mb-1 text-body-tertiary" href="https://www.safgbenefitssolutions.com/>">Group
                            Benefits</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-sm rights fw-light text-center">© 2024 Strategic Alliance Financial Group Inc. All rights
            reserved.</div>
        <div class="col-sm rights fw-light text-body-tertiary text-center">Built by <a class="text-primary"
                href="https://hamsterdam.dev">hamsterdam.dev</a></div>
    </div>
</footer>
<!--[if lt IE 7]>
      <p class="browsehappy">
        You are using an <strong>outdated</strong> browser. Please
        <a href="#">upgrade your browser</a> to improve your experience.
      </p>
    <![endif]-->


</html>