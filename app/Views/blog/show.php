<?= $this->extend('Layouts/default') ?>
<?= $this->section('content') ?>
<div class="container">
    <?php
    $title = isset($post['attributes']['title']) ? $post['attributes']['title'] : ($post['title'] ?? 'Untitled');
    $content = isset($post['attributes']['content']) ? $post['attributes']['content'] : (isset($post['content']) ? $post['content'] : '');
    $contentText = is_array($content) ? extractTextFromRichText($content) : $content;
    ?>
    <h1><?= esc($title) ?></h1>
    <div class="card">
        <div class="card-body">
            <p class="card-text"><?= $contentText ?></p>
            <a href="<?= site_url('blog') ?>" class="btn btn-primary">Back to Blog</a>
        </div>
    </div>
</div>
<?= $this->endSection() ?>