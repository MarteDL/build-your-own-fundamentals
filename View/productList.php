<?php
declare(strict_types=1);
require 'Includes/header.php';

/** @var Product[] $products */
foreach ($products as $product) : ?>
    <div>
        <h2><?= $product->getName(); ?></h2>
        <p>Price (tax included):
            €<?= round($product->getPrice() * (1 + Product::TAX), 2) ?></p>
    </div>
<?php endforeach;

require 'Includes/footer.php';
?>


