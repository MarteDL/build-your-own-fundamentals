<?php
declare(strict_types=1);
require 'Includes/header.php';

$article = null;

foreach ($articles as $articleToCheck) {
    if ($articleToCheck['slug'] === $_GET['article_slug']) {
        $article = $articleToCheck;
    }
}
?>
<article>
    <h2><?= $article['title'] ?></h2>
    <p><?= $article['content'] ?></p>
</article>

<?php
require 'Includes/footer.php';
?>

