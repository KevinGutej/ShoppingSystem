<?php

require_once 'Product.php';

class DataBaseController {

    private mysqli $db;

    public function __construct()
    {
        $this->db = new mysqli("localhost", "root", "", "ShoppingSystem");
        if($this->db->errno == 0) {
            $this->db->set_charset("utf8mb4");
        }else {
            echo "Error " . $this->db->error . " with connecting to dataBase";
        }
    
    }

    public function getProductById(int $productId): Product|NULL {
        $sqlRequest = "SELECT * FROM products WHERE id = $productId;";
        $result = $this->db->query($sqlRequest);
        if($result === false) {
            return NULL;
        }else {
            if($result->num_rows === 1) {
                $row = $result->fetch_assoc();
                $expireDate = new DateTime($row["expireDate"]);
                $product = new Product($productId, $row["name"], $row["price"], $expireDate, $row["ownerID"]);
                return $product;
            }else {
                echo "No product with ID " . $productId;
                return NULL;
            }
        }
    }
}