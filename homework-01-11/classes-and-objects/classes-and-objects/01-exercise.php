<?php

class Product {
    public string $name;
    public float $price;
    public int $amount;

    public function __construct(string $name, float $price, int $amount)
    {
        $this->name = $name;
        $this->price = $price;
        $this->amount= $amount;
    }

    public function getName (): string
    {
        return $this->name;
    }

    public function getPrice (): float
    {
        return $this->price;
    }

    public function setAmount (int $amount = 1): int
    {
        $this->amount += $amount;
        return $this->amount;
    }

    public function setPrice (int $price = 1): int
    {
        $this->price += $price;
        return $this->price;
    }

    public function getAmount (): int
    {
        return $this->amount;
    }
}
//man ir jautājums par pirmo uzdevumu - lai precēm varētu samainīt daudzumu un cenu, vajag izmantot set?

$products = [
    new Product("Logitech mouse", 70.00, 14),
    new Product("iPhone 5s", 999.99, 3),
    new Product("Epson EB-U05", 440.46, 1)
];


foreach ($products as $product) {
    echo "'{$product->name}', {$product->price} EUR, {$product->amount} units" . PHP_EOL;
}
