<?= $this->extend('Layouts/default') ?>
<?= $this->section('content') ?>
<div class="container">
    <h1>Blog</h1>
    <?php if (!empty($posts)): ?>
        <div class="row">
            <?php foreach ($posts as $post): ?>
                <?php
                // Handle variable Strapi response structure
                $title = isset($post['attributes']['title']) ? $post['attributes']['title'] : ($post['title'] ?? 'Untitled');
                $slug = isset($post['attributes']['slug']) ? $post['attributes']['slug'] : ($post['slug'] ?? '');
                $excerpt = isset($post['attributes']['excerpt']) ? $post['attributes']['excerpt'] : '';
                $content = isset($post['attributes']['content']) ? $post['attributes']['content'] : (isset($post['content']) ? $post['content'] : '');

                // Extract text from content if it's an array (e.g., rich text)
                $contentText = is_array($content) ? extractTextFromRichText($content) : $content;
                $displayText = $excerpt ?: $contentText;
                ?>
                <div class="col-md-4 mb-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title"><?= esc($title) ?></h5>
                            <p class="card-text"><?= esc(substr((string)$displayText, 0, 150)) ?>...</p>
                            <a href="<?= site_url('blog/' . esc($slug)) ?>" class="btn btn-primary">Read More</a>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    <?php else: ?>
        <p>No posts available.</p>
        <pre>Posts Array: <?= esc(print_r($posts, true)) ?></pre>
    <?php endif; ?>
</div>
<?= $this->endSection() ?>