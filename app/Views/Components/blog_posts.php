<?php if (!empty($posts)): ?>
    <div class="blog-block card mb-4">
        <h4 class="card-header">Recent Blog Posts</h4>
        <div class="card-body">
            <?php foreach ($posts as $post): ?>
                <?php
                $title = isset($post['attributes']['title']) ? $post['attributes']['title'] : ($post['title'] ?? 'Untitled');
                $slug = isset($post['attributes']['slug']) ? $post['attributes']['slug'] : ($post['slug'] ?? '');
                $excerpt = isset($post['attributes']['excerpt']) ? $post['attributes']['excerpt'] : '';
                $content = isset($post['attributes']['content']) ? $post['attributes']['content'] : (isset($post['content']) ? $post['content'] : '');
                $contentText = is_array($content) ? extractTextFromRichText($content) : $content;
                $displayText = $excerpt ?: $contentText;
                ?>
                <div class="blog-item mb-3">
                    <h5><a href="<?= site_url('blog/' . esc($slug)) ?>" class="text-primary"><?= esc($title) ?></a></h5>
                    <p class="text-muted"><?= esc(substr((string)$displayText, 0, 100)) ?>...</p>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
<?php else: ?>
    <p>No posts available.</p>
    <pre>Posts Array: <?= esc(print_r($posts, true)) ?></pre>
    <pre>Strapi URL: <?= esc(getenv('strapi.baseURL')) ?></pre>
    <pre>API Token (partial): <?= esc(substr(getenv('strapi.apiToken'), 0, 10) . '...') ?></pre>
<?php endif; ?>