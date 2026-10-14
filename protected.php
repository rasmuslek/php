<?php

// Your code here
class Product
{
    private $name;
    private $price;
    private $stock;

    public function setName($name)
    {
        $this->name = $name;
    }

    public function setPrice($price)
    {
        $this->price = $price;
    }

    public function setStock($stock)
    {
        $this->stock = $stock;
    }

    public function getName()
    {
        return $this->name;
    }

        public function getPrice()
    {
        return $this->price;
    }

    public function getStock()
    {
        return $this->stock ;
    }

    public function addStock($quantity)
    {
        $this->stock += $quantity;
    }

    public function purchase($quantity)
    {
        $this->stock -= $quantity;
    }
}

$product = new Product();
$product->setName("Laptop");
$product->setPrice(999.99);
$product->setStock(10);

echo $product->getName(). "\n"; // Laptop
$product->addStock(5);
echo $product->getStock() . "\n"; // 15
$product->purchase(3);
echo $product->getStock(). "\n"; // 12