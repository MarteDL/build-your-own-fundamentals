<?php
declare(strict_types=1);
require 'Includes/header.php';

foreach ($products as $product) : ?>
    <div>
        <h2><?= $product['name'] ?></h2>
        <p>Price (tax included):
            €<?= round($product['price'] * (1 + $product['tax']), 2) ?></p>
    </div>
<?php endforeach;

require 'Includes/footer.php';
?>


