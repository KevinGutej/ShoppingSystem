<?php

require_once "Product.php";

class Customer
{
    private int $id = 0;
    private string $firstName = "";
    private string $lastName = "";
    private string $phoneNumber = "014327546";
    private string $email = "";
    private float $accountBalance = 0.0;

    public function __construct(int $id, string $firstName, string $lastName, string $phoneNumber, string $email, float $accountBalance)
    {
        $this->id = $id;
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->phoneNumber = $phoneNumber;
        $this->email = $email;
        $this->accountBalance = $accountBalance;
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function buy(Product $product): bool
    {
        if ($this->accountBalance >= $product->price) {
            $this->accountBalance -= $product->price;
            //ADD TO DATABASE
            return true;
        } else {
            return false;
        }
    }


    public function sell(Product $product)
    {
        $connection = new mysqli("localhost", "root", "", "shoppingsystem");
        if ($connection->errno == 0) {
            $productId = $product->id;
            $sqlRequest = "SELECT id FROM products WHERE id = '$productId';"; //START NEXT LESSON HERE!!!
        }
        $has = true;
        if ($has === true) {
            //CHANGE OWNER OF PRODUCT
            return true;
        } else {
            return false;
        }
    }
}
