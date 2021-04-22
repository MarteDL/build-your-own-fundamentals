<?php
declare(strict_types=1);

class ArticleController
{
    private PDO $pdo;

    public function __construct()
    {
        $connection = new Connection();
        $this->pdo = $connection->connect();
    }

    public function render(array $GET)
    {
        $articles = ArticleLoader::fetchAllArticles($this->pdo);
        require 'View/articleList.php';
    }

    public function showArticleDetail($GET)
    {
        $article = ArticleLoader::fetchArticle($this->pdo, (int)$GET['article_id']);
        require 'View/articleDetail.php';
    }
}