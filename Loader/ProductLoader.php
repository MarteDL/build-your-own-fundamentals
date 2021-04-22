<?php
declare(strict_types=1);

class ProductLoader
{
    /** @Product[] */
    public static function fetchAllProducts(PDO $pdo): array
    {
        $query = $pdo->query("SELECT * FROM Products");
        $rawData = $query->fetchAll();

        $products = [];

        foreach ($rawData as $rawProduct) {
            $products[] = new Product((int)$rawProduct['id'], $rawProduct['name'],
                (float)$rawProduct['price']);
        }

        return $products;
    }
}