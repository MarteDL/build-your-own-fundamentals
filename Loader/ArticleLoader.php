<?php
declare(strict_types=1);

class ArticleLoader
{
    public static function fetchArticle(PDO $pdo, int $id): Article
    {
        $query = $pdo->prepare("SELECT * FROM Articles WHERE id = :id");
        $query->bindValue(':id', $id);
        $query->execute();
        $rawArticle = $query->fetch();

        if ($rawArticle == null) {
            http_response_code(404);
            include('my_404.php');
            die();
        }

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

    public static function fetchPrevArticle(PDO $pdo, int $id): Article|null
    {
        $articles = self::fetchAllArticles($pdo);
        $index = "";

        foreach ($articles as $key => $article) {
            if ($article->getId() === $id) {
                $index = $key;
            }
        }

        if ($index === 0) {
            return null;
        }
        return $articles[$index - 1];
    }

    public static function fetchNextArticle(PDO $pdo, int $id): Article|null
    {
        $articles = self::fetchAllArticles($pdo);
        $index = "";

        foreach ($articles as $key => $article) {
            if ($article->getId() === $id) {
                $index = $key;
            }
        }

        if ($index === count($articles)-1) {
            return null;
        }
        return $articles[$index + 1];
    }

}