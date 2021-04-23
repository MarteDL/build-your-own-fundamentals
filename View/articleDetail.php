<?php
declare(strict_types=1);
require 'Includes/header.php';

/** @var Article $article */
/** @var Article $prevArticle */
/** @var Article $nextArticle */
?>

<main>
    <div class="row justify-content-center align-items-center mt-5">
        <div class="col-2 text-center">
            <a href="<?php echo isset($prevArticle) ? $prevArticle->getURL() : "" ?>"
               class="btn
            btn-info <?php echo isset($prevArticle) ? "" : "disabled"
               ?>">Previous</a>
        </div>

        <div class="col-6">
            <div class="card text-center">
                <div class="card-header"><?= $article->getTitle() ?></div>
                <div class="card-body"><?= $article->getContent() ?></div>
            </div>
        </div>

        <div class="col-2 text-center">
            <a href="<?php echo isset($nextArticle) ? $nextArticle->getURL() : "" ?>"
               class="btn
            btn-outline-info <?php echo isset($nextArticle) ? "" : "disabled"
               ?>">Next</a>
        </div>
    </div>
</main>

<?php
require 'Includes/footer.php';
?>

