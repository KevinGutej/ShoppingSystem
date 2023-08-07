<?php 

class Product {
    public int|NULL $id = 0;
    public string $name = "";
    public float $price = 0.0;
    public DateTime $expireDate;

    public function __construct(int|NULL $id, string $name, float $price, DateTime $expireDate)
    {
        $this->id = $id;
        $this->name = $name;
        $this->price = $price;
        $this->expireDate = $expireDate;
    }

}