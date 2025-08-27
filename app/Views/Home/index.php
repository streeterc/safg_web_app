<?= $this->extend('Layouts/default') ?>

<?= $this->section('title') ?>
Home
<?= $this->endSection() ?>

<?= $this->section('content') ?>

<!-- Hero Section -->
<section class="row my-5">
    <div class="col">
        <h1 class="safg fw-light">
            <span class="text-primary serif fst-italic">Independently</span> owned MGA proudly serving financial
            services groups & advisors across
            <span class="text-secondary serif d-inline-flex">Canada</span>
            <img class="leaf align-middle" src="../img/leaf.svg" alt="Canadian Maple Leaf" aria-hidden="true">
        </h1>
    </div>
</section>

<!-- Phone Spacer -->
<div class="row phone mb-5" aria-hidden="true"></div>

<!-- Knowledge Section -->
<section class="row mx-1 mb-5 ledger mx-auto">
    <div class="col d-flex flex-column">
        <div class="d-inline-flex">
            <h2 class="serif">Knowledge is Power</h2>
            <span class="fw-lighter" aria-label="Trademark">™</span>
        </div>
        <h3 class="lead">
            Gain <span class="text-primary">exclusive</span> access to decades of industry-leading <span
                class="text-secondary">expertise</span>
        </h3>
        <p class="fw-light">
            Strategic Alliance Financial Group equips brokers with expert guidance and exclusive solutions in life
            insurance, group benefits, and investments industry.
        </p>
        <p class="fw-light">
            Gain a competitive edge, grow your business, and secure your clients with our support network.
        </p>
        <button type="button" class="btn btn-safg align-self-end">
            <a class="icon-link icon-link-hove" href="<?= site_url('about') ?>">
                Meet the <span class="serif fst-italic fw-medium text-secondary">Knowledge Group</span>
                <i class="bi bi-chevron-right display-9 align-middle" aria-hidden="true"></i>
            </a>
        </button>
    </div>
</section>

<!-- Divider -->
<div class="row border-top mb-5" aria-hidden="true"></div>

<!-- Strategic Partners Section -->
<section class="row mx-1 mb-5 ledger mx-auto">
    <div class="col-2 d-flex justify-content-center">
        <span class="badge text-body d-flex p-0" aria-hidden="true">
            <i class="bi bi-person-fill-add display-1"></i>
        </span>
    </div>
    <div class="col-10 d-flex flex-column">
        <h2 class="serif h3">Strategic Partners</h2>
        <p class="mb-4">
            Give your <span class="text-primary fw-medium">clients</span> the <span
                class="text-secondary fw-medium">best</span> service using our elite group of companies.
        </p>
        <button type="button" class="btn btn-safg align-self-end">
            <a class="icon-link icon-link-hove" href="<?= site_url('partners') ?>">
                View Partners
                <i class="bi bi-chevron-right" aria-hidden="true"></i>
            </a>
        </button>
    </div>
</section>

<!-- Insurance & Investment Section -->
<section class="row mx-1 mb-5 ledger">
    <div class="col-2 d-flex">
        <span class="badge text-body d-flex p-0" aria-hidden="true">
            <i class="bi bi-safe2-fill display-1"></i>
        </span>
    </div>
    <div class="col-10 d-flex flex-column">
        <h2 class="serif h3">Insurance & Investment</h2>
        <p class="mb-4">
            Our <span class="text-primary fw-medium">short-list</span> of Canada's most <span
                class="text-secondary fw-medium">effective</span> insurance & investment companies.
        </p>
        <button type="button" class="btn btn-safg align-self-end">
            <a class="icon-link icon-link-hove" href="<?= site_url('products') ?>">
                View Companies
                <i class="bi bi-chevron-right" aria-hidden="true"></i>
            </a>
        </button>
    </div>
</section>

<!-- Meet Spacer -->
<div class="row meet mb-5" aria-hidden="true"></div>

<!-- Power of One Section -->
<section class="row mx-1 mb-5">
    <div class="col d-flex flex-column">
        <div class="d-inline-flex">
            <h2 class="serif">The Power of One</h2>
            <span class="fw-lighter" aria-label="Trademark">™</span>
        </div>
        <h3 class="lead">
            <span class="text-primary">Unlock</span> your <span class="text-secondary">client's</span> potential with
            Strategic Alliance Financial Group
        </h3>
        <p class="fw-light">
            Strategic Alliance Financial Group equips brokers for success by offering industry-leading expertise and
            exclusive life insurance, group benefits, and investment products.
        </p>
        <p class="fw-light">
            Gain a competitive edge, grow your business, and secure your clients with our support network.
        </p>
    </div>
</section>

<!-- Divider -->
<div class="row border-top mb-5" aria-hidden="true"></div>

<!-- Viver Platform Section -->
<section class="row mx-1 mb-5">
    <div class="col-2 d-flex justify-content-center">
        <span class="badge text-body d-flex p-0" aria-hidden="true">
            <i class="bi viver display-1"></i>
        </span>
    </div>
    <div class="col-10 d-flex flex-column">
        <h2 class="serif h3">Viver Platform</h2>
        <p class="mb-4">
            Reviving the client <span class="text-primary fw-medium">onboarding</span> experience with <span
                class="text-secondary fw-medium">instant</span> quotes online.
        </p>
        <button type="button" class="btn btn-safg align-self-end">
            <a href="https://viver.ca/">
                Get Started
                <i class="bi bi-box-arrow-up-right ms-1" aria-hidden="true"></i>
            </a>
        </button>
    </div>
</section>

<!-- Group Benefits Section -->
<section class="row mx-1 mb-5">
    <div class="col-2 d-flex justify-content-center">
        <span class="badge text-body d-flex p-0" aria-hidden="true">
            <i class="bi bi-file-earmark-medical-fill display-1"></i>
        </span>
    </div>
    <div class="col-10 d-flex flex-column">
        <h2 class="serif h3">Group Benefits</h2>
        <p class="mb-4">
            SAFG Benefits Solutions is <span class="text-primary fw-medium">already</span> where the
            <span class="text-secondary fw-medium">industry</span> wants to be.
        </p>
        <button type="button" class="btn btn-safg align-self-end">
            <a href="https://www.safgbenefitssolutions.com/">
                Get Started
                <i class="bi bi-box-arrow-up-right ms-1" aria-hidden="true"></i>
            </a>
        </button>
    </div>
</section>

<?php $posts = get_recent_posts(3); ?>
<?= $this->include('Components/blog_posts', ['posts' => $posts]) ?>

<!-- Toronto Spacer -->
<div class="row toronto mb-5" aria-hidden="true"></div>

<?= $this->endSection() ?>