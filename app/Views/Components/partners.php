<?php if (!empty($partners)): ?>
<div class="col d-flex flex-wrap">
    <?php foreach ($partners as $partner): ?>
    <div class="col-sm-6 d-flex flex-row partner">
        <div class="logo-container">
            <?php if ($partner['logo']): ?>
            <img src="<?= base_url('uploads/partners/' . esc($partner['logo'])) ?>"
                alt="<?= esc($partner['name']) ?> Logo" class="partner-logo">
            <?php endif; ?>
        </div>
        <div class="d-flex product-desc-text w-75">
            <div class="partner-text">
                <h3 class="serif h5"><?= esc($partner['name']) ?></h3>
                <?php if ($partner['website']): ?>
                <div class="website-link fw-light mb-3">
                    <a href="<?= $partner['website'] ?>" target="_blank" rel="noopener noreferrer">
                        <?= esc($partner['website']) ?>
                    </a>
                </div>
                <?php endif; ?>
                <?php if ($partner['description']): ?>
                <p class="description pe-2"><?= esc($partner['description']) ?></p>
                <?php endif; ?>
            </div>
        </div>
    </div>
    <?php endforeach; ?>
    <?php else: ?>
    <p>No partners found.</p>
    <?php endif; ?>
</div>