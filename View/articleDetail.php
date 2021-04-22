<?php
declare(strict_types=1);
require 'Includes/header.php';

/** @var Article $article */ ?>

<main class="d-flex justify-content-center">
    <div class="col-6">
        <div class="card mt-5 text-center">
            <div class="card-header"><?= $article->getTitle() ?></div>
            <div class="card-body"><?= $article->getContent() ?></div>
        </div>
    </div>
</main>

<?php
require 'Includes/footer.php';
?>

