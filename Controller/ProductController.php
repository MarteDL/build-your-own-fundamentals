<?php

declare(strict_types=1);

class ProductController
{
    private PDO $pdo;

    public function __construct()
    {
        $connection = new Connection();
        $this->pdo = $connection->connect();
    }

    public function render()
    {
        $pageName = 'Our guides';
        $products = ProductLoader::fetchAllProducts($this->pdo);
        require 'View/productList.php';
    }
}
