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

    public function render()
    {
        $articles = ArticleLoader::fetchAllArticles($this->pdo);
        $pageName = 'Our articles';
        require 'View/articleList.php';
    }

    public function showArticleDetail(array $GET)
    {
        $article = ArticleLoader::fetchArticle($this->pdo, (int)$GET['article_id']);

        $prevArticle = ArticleLoader::fetchPrevArticle($this->pdo, $article->getId());
        $nextArticle = ArticleLoader::fetchNextArticle($this->pdo, $article->getId());

        $pageName = $article->getTitle();
        require 'View/articleDetail.php';
    }
}
