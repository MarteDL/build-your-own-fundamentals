<?php

declare(strict_types=1);

namespace Model;

class Article
{
    private int $id;
    private string $title;
    private string $content;

    public function __construct(int $id, string $title, string $content)
    {
        $this->id = $id;
        $this->title = $title;
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
