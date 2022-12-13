<?php
class Toy extends Product {
    public $material;

    function __construct(public string $name, public float $price, public Category $category){
        parent::__construct($name, $price, $category);
    }

    public function getDetails(){
        return "name: $this->name";
    }
}
