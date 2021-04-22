<?php
declare(strict_types=1);

class ArticleLoader
{
    public static function fetchArticle(PDO $pdo, int $id) : Article
    {
        $query = $pdo->prepare("SELECT * FROM Articles WHERE id = :id");
        $query->bindValue(':id', $id);
        $query->execute();
        $rawArticle = $query->fetch();

        return new Article((int)$rawArticle['id'], $rawArticle['title'],
                $rawArticle['slug'], $rawArticle['content']);

    }

    /** @Article[] */
    public static function fetchAllArticles(PDO $pdo): array
    {
        $query = $pdo->query("SELECT * FROM Articles");
        $rawData = $query->fetchAll();

        $articles = [];

        foreach ($rawData as $rawArticle) {
            $articles[] = new Article((int)$rawArticle['id'], $rawArticle['title'],
                $rawArticle['slug'], $rawArticle['content']);
        }

        return $articles;
    }
}