<?php

declare(strict_types=1);

class Product
{
    private int $id;
    private string $name;
    private float $price;
    private const TAX = 0.21;

    public function __construct(int $id, string $name, float $price)
    {
        $this->id = $id;
        $this->name = $name;
        $this->price = $price;
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getPrice(): float
    {
        return $this->price;
    }

    public function getPriceWithTax(): float
    {
        return round($this->price * (1 + self::TAX), 2);
    }
}
