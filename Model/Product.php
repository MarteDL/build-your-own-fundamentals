<?php
declare(strict_types = 1);

class Product
{
    private int $id;
    private string $name;
    private float $price;
    public const TAX = 0.21;

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
}


$products = [
    [
        'id' => 1,
        'name' => 'A guide to brewing the perfect Duvel',
        'price' => 3.5,
        'tax' => 0.21,
    ],
    [
        'id' => 2,
        'name' => 'The secrets of the world wide web',
        'price' => 9000,
        'tax' => 0.21,
    ]
];
