<?php if (!empty($members)): ?>
<?php foreach ($members as $member): ?>
<article class="col-sm-6 member mb-5 pe-3">
    <div class="d-inline-flex name w-100">
        <h3 class="serif me-2">
            <?= esc($member['name']) ?>
        </h3>
        <?php if (!empty($member['credentials'])): ?>
        <?php
                    // Split credentials by comma
                    $credentials = array_map('trim', explode(',', $member['credentials']));
                    // Define five alternating primary/secondary classes with opacities, darkest first
                    $badgeClasses = [
                        'text-bg-primary bg-opacity-100',
                        'text-bg-secondary bg-opacity-100',
                        'text-bg-primary bg-opacity-75',
                        'text-bg-secondary bg-opacity-75',
                        'text-bg-primary bg-opacity-50'
                    ];
                    ?>
        <?php foreach ($credentials as $index => $credential): ?>
        <span class="badge align-self-center lh-1 cred <?= esc($badgeClasses[$index % count($badgeClasses)]) ?>">
            <?= esc($credential) ?>
        </span>
        <?php endforeach; ?>
        <?php endif; ?>
    </div>
    <div class="company-group fw-light mb-2">
        <?php if ($member['position']): ?>
        <div class="position" role="region" aria-label="Position">
            <?= esc($member['position']) ?>
        </div>
        <?php endif; ?>
        <?php if ($member['company']): ?>
        <cite class="company">
            <?= esc($member['company']) ?>
        </cite>
        <?php endif; ?>
    </div>
    <?php if ($member['description']): ?>
    <p class="description">
        <?= esc($member['description']) ?>
    </p>
    <?php endif; ?>
    <?php if (!empty($member['social_media'])): ?>
    <div class="social-links">
        <?php foreach ($member['social_media'] as $platform => $username): ?>
        <?php if (isset(\Config\SocialMedia::$platforms[$platform])): ?>
        <a href="<?= esc($username) ?>" target="_blank" rel="noopener noreferrer"
            aria-label="<?= esc($platform) ?> profile">
            <i class="<?= \Config\SocialMedia::$platforms[$platform]['icon'] ?>" id="icon"></i>
        </a>
        <?php endif; ?>
        <?php endforeach; ?>
    </div>
    <?php endif; ?>
</article>
<?php endforeach; ?>
<?php else: ?>
<p>No team members found.</p>
<?php endif; ?>