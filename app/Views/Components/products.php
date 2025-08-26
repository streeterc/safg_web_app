<?php if (!empty($products)): ?>
<div class="col d-flex flex-wrap">
    <?php foreach ($products as $product): ?>
    <div class="col-sm-6 d-flex flex-row products">
        <div class="logo-container">
            <?php if ($product['logo']): ?>
            <img src="<?= base_url('uploads/products/' . esc($product['logo'])) ?>"
                alt="<?= esc($product['name']) ?> Logo" class="product-logo">
            <?php endif; ?>
        </div>
        <div class="d-flex product-desc-text w-75">
            <div class="product-text">
                <h3 class="serif h5"><?= esc($product['name']) ?></h3>
                <?php if ($product['website']): ?>
                <div class="website-link fw-light mb-3">
                    <a href="<?= $product['website'] ?>" target="_blank" rel="noopener noreferrer">
                        <?= esc($product['website']) ?>
                    </a>
                </div>
                <?php endif; ?>
                <?php if ($product['description']): ?>
                <p class="me-1"><?= esc($product['description']) ?></p>
                <?php endif; ?>
            </div>
        </div>
    </div>
    <?php endforeach; ?>
    <?php else: ?>
    <p>No products found.</p>
    <?php endif; ?>
</div>