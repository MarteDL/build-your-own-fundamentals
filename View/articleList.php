<?php
declare(strict_types=1);

require 'Includes/header.php';

/** @var Article[] $articles */
foreach ($articles as $article) : ?>
    <div>
        <h2><?= $article->getTitle() ?></h2>
        <a href="?page=article-detail&article_id=<?= $article->getId() ?>">Tell
            me more</a>
    </div>
<?php endforeach;

require 'Includes/footer.php';
