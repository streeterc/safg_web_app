<?= $this->extend('Layouts/default') ?>

<?= $this->section('title') ?>
Strategic Partners
<?= $this->endSection() ?>

<?= $this->section('content') ?>
<!-- Hero Section -->
<section class="row my-5">
    <div class="col">
        <h1 class="safg fw-light">Our
            <span class="text-primary serif fst-italic">trusted</span> partners proudly serving
            financial
            advisors & groups across
            <span class="text-secondary serif d-inline-flex">Canada</span>
            <img class="leaf align-middle" src="../img/leaf.svg" alt="Canadian Maple Leaf" aria-hidden="true">
        </h1>
    </div>
</section>

<!-- Phone Spacer -->
<div class="row phone mb-5" aria-hidden="true"></div>

<!-- Partners Section -->
<section class="row mx-1 mb-4">
    <div class="col d-flex flex-column">
        <div class="d-inline-flex">
            <h2 class="serif">Our Trusted Partners</h2>
        </div>
        <h3 class="lead">
            Collaborating with industry <span class="text-primary">leaders</span> to deliver
            <span class="text-secondary">exceptional </span>solutions
        </h3>
        <p class="fw-light">
            Strategic Alliance Financial Group's list of top companies offer clear and effective financial solutions for
            you and your clients across Canada.
        </p>
        <p class="fw-light">Gain a competitive edge, grow your business, and secure your clients with our support
            network.
        </p>
        <!-- Include the partners component -->
    </div>
</section>
<div class="row border-top mb-5" aria-hidden="true"></div>
<section class="row mx-1">
    <div class="col">
        <?= view('Components/partners', ['partners' => $partners]) ?>
    </div>
</section>

<!-- Contact Spacer -->
<div class="row meet mb-5" aria-hidden="true"></div>

<?= $this->endSection() ?>