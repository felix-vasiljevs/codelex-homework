<?php

class Product {
    public $name;
    public $price;
    public $amount;

    public function __construct(string $name, float $price, int $amount)
    {
        $this->name = $name;
        $this->price = $price;
        $this->amount= $amount;
    }

    function printProduct(string $name, float $price, $amount)
    {
        return "$name, $price, $amount";
    }
}

$products = [
    new Product("Logitech mouse", 70.00, 14),
    new Product("iPhone 5s", 999.99, 3),
    new Product("Epson EB-UO5",440.46,1)
];

foreach ($products as $product) {
    echo "'{$product->name}', {$product->price} EUR, {$product->amount} units." . "\n";
}
