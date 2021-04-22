<?php
declare(strict_types=1);

require 'Includes/header.php';

foreach ($articles as $article) : ?>
    <div>
        <h2><?= $article['title'] ?></h2>
        <a href="index.php?page=article-detail&article_slug=<?= $article['slug'] ?>">Tell
            me more</a>
    </div>
<?php endforeach;

require 'Includes/footer.php';
