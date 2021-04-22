<?php
declare(strict_types=1);
require 'Includes/header.php';


?>
<header class="text-center m-3">
    <h1>Our Guides</h1>
    <p>Check our awesome guides and their cheap prices (tax included)</p>
</header>

<main class="row justify-content-center mt-5">
    <div class="list-group col-8">
        <?php /** @var Product[] $products */
        foreach ($products as $product) : ?>
            <a href="?page=article-detail&article_id=<?= $product->getId() ?>"
               class="list-group-item list-group-item-action flex-column align-items-start">
                <div class="d-flex w-100 justify-content-between">
                    <h5 class="mb-1"><?php echo $product->getName(); ?></h5>
                    <small class="text-muted">€<?php echo $product->getPriceWithTax() ?></small>
                </div>
            </a>
        <?php endforeach; ?>
    </div>
</main>

<?php
require 'Includes/footer.php';
?>


