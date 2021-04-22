<?php
declare(strict_types=1);
require 'Includes/header.php';
?>
    <header class="text-center m-3">
        <h1>Our articles</h1>
        <p>Click on the article of your choice to read more</p>
    </header>

    <main class="row justify-content-center mt-5">
        <div class="list-group col-8 text-center">
            <?php /** @var Article[] $articles */
            foreach ($articles as $article) : ?>
                <a class="list-group-item list-group-item-action"
                   href="?page=article-detail&article_id=<?= $article->getId() ?>">
                    <?php echo $article->getTitle() ?>
                </a>
            <?php endforeach; ?>
        </div>
    </main>

<?php
require 'Includes/footer.php';
