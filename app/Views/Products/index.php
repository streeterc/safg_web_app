<?= $this->extend('Layouts/default') ?>

<?= $this->section('title') ?>
Insurance & Investment
<?= $this->endSection() ?>

<?= $this->section('content') ?>
<!-- Hero Section -->
<section class="row my-5">
    <div class="col">
        <h1 class="safg fw-light">Our
            <span class="text-primary serif fst-italic">leading</span> insurance & investment companies
            proudly
            serving advisors & clients across
            <span class="text-secondary serif d-inline-flex">Canada</span>
            <img class="leaf align-middle" src="../img/leaf.svg" alt="Canadian Maple Leaf" aria-hidden="true">
        </h1>
    </div>
</section>

<!-- Phone Spacer -->
<div class="row phone mb-5" aria-hidden="true"></div>

<!-- Products Section -->
<section class="row mx-1 mb-4">
    <div class="col d-flex flex-column">
        <div class="d-inline-flex">
            <h2 class="serif">Trusted Insurance & Investment Solutions</h2>
        </div>
        <h3 class="lead">
            Partnering with industry <span class="text-primary">leaders</span> to deliver
            <span class="text-secondary">exceptional</span> financial products
        </h3>
        <p class="fw-light">
            Strategic Alliance Financial Group offers top-tier insurance and investment solutions
            to support advisors and clients across Canada.
        </p>
        <p class="fw-light">
            Gain a competitive edge, grow your business, and secure your clients with our support network.
        </p>
    </div>
</section>
<div class="row border-top mb-5" aria-hidden="true"></div>
<!-- Contact Spacer -->

<!-- Include the products component -->
<section class="row mx-1">
    <div class="col">
        <?= view('Components/products', ['products' => $products]) ?>
    </div>
</section>
<div class="row meet mb-5" aria-hidden="true"></div>

<?= $this->endSection() ?>