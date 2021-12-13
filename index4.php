<?php

class Product
{
    var $name;
    var $description;
    var $price;

    function __construct(String $name, String $desc, float $pri)
    {
        $this->name         = $name;
        $this->description  = $desc;
        $this->price        = $pri;   
    }

    function get()
    {
        return "{$this->name}, {$this->description}, {$this->price} <hr>";
    }

    function __destruct()
    {
        echo 'Entrei no destrutor';
    }

}

$product1 = new Product('TV', 'muito boa', 4.990);
echo $product1->get();

$product2 = new Product('Geladeira', 'gela muito', 2.990);
echo $product2->get();