<?php if (!empty($members)): ?>
    <div class="col team-members-section">
        <div class="team-members">
            <?php foreach ($members as $member): ?>
                <div class="team-member">
                    <?= esc($member['name']) ?>

                    <?php if ($member['credentials']): ?>
                        <?= esc($member['credentials']) ?>
                    <?php endif; ?>

                    <?php if ($member['company']): ?>
                        <?= esc($member['company']) ?>
                    <?php endif; ?>

                    <?php if ($member['position']): ?>
                        <?= esc($member['position']) ?>
                    <?php endif; ?>

                    <?php if ($member['description']): ?>
                        <?= esc($member['description']) ?>
                    <?php endif; ?>

                    <?php if (!empty($member['social_media'])): ?>
                        <div class="social-links">
                            <?php foreach ($member['social_media'] as $platform => $username): ?>
                                <?php if (isset(\Config\SocialMedia::$platforms[$platform])): ?>
                                    <a href="<?= esc($username) ?>" target="_blank" rel="noopener noreferrer">
                                        <i class="<?= \Config\SocialMedia::$platforms[$platform]['icon'] ?>"></i>
                                    </a>
                                <?php endif; ?>
                            <?php endforeach; ?>
                        </div>
                    <?php endif; ?>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
<?php else: ?>
    <p>No team members found.</p>
<?php endif; ?>