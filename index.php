<?php

declare(strict_types=1);

ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

// models
require 'Model/Article.php';
require 'Model/Connection.php';
require 'Model/Product.php';

// loaders
require 'Loader/ProductLoader.php';
require 'Loader/ArticleLoader.php';

//controllers
require 'Controller/ArticleController.php';
require 'Controller/HomepageController.php';
require 'Controller/ProductController.php';

$controller = new HomepageController();

if (isset($_GET['page'])) {
    $controller = match ($_GET['page']) {
        'articles' => new ArticleController(),
        'products' => new ProductController(),
        default => new HomepageController(),
    };

    if ($_GET['page'] === 'article-detail') {
        $controller = new ArticleController();
        $controller->showArticleDetail($_GET);
    } else {
        $controller->render($_GET);
    }
}

