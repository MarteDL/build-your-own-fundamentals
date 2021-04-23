<?php
declare(strict_types = 1);

class Article
{
    private int $id;
    private string $title;
    private string $slug;
    private string $content;

    public function __construct(int $id, string $title, string $slug, string $content)
    {
        $this->id = $id;
        $this->title = $title;
        $this->slug = $slug;
        $this->content = $content;
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function getTitle(): string
    {
        return $this->title;
    }

    public function getURL(): string
    {
        return "?page=article-detail&article_id=".$this->id;
    }

    public function getContent(): string
    {
        return $this->content;
    }
}