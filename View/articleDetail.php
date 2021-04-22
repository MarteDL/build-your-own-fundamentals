<?php
declare(strict_types=1);
require 'Includes/header.php';

/** @var Article $article */ ?>
<article>
    <h2><?= $article->getTitle() ?></h2>
    <p><?= $article->getContent() ?></p>
</article>

<?php
require 'Includes/footer.php';
?>

