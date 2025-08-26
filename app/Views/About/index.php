<?= $this->extend('Layouts/default') ?>

<?= $this->section('title') ?>
Knowledge Group
<?= $this->endSection() ?>

<?= $this->section('content') ?>

<!-- Hero Section -->
<section class="row my-5">
    <div class="col">
        <h1 class="safg fw-light">
            <span class="text-primary serif fst-italic">Expertly</span> skilled team members proudly delivering
            innovative
            solutions & exceptional service across
            <span class="text-secondary serif d-inline-flex">Canada</span>
            <img class="leaf align-middle" src="../img/leaf.svg" alt="Canadian Maple Leaf" aria-hidden="true">
        </h1>
    </div>
</section>

<!-- Phone Spacer -->
<div class="row phone mb-5" aria-hidden="true"></div>

<!-- Knowledge Section -->
<section class="row mx-1 mb-4">
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
    </div>
</section>
<div class="row border-top mb-5" aria-hidden="true"></div>
<section class="row mx-1">
    <div class="col d-flex flex-wrap">
        <!-- Include the team members component -->
        <?= view('Components/team_members', ['members' => $members]) ?>
    </div>
</section>

<!-- Meeting Spacer -->
<div class="row meet mb-5" aria-hidden="true"></div>

<?= $this->endSection() ?>