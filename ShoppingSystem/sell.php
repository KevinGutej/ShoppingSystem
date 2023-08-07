<?php

require_once 'Customer.php';

if(!empty($_POST["ProductName"]) && isset($_POST["ProductName"])) {
    if(!empty($_POST["ProductPrice"]) && isset($_POST["ProductPrice"]) && (float)$_POST["ProductPrice"] > 0) {
        if(!empty($_POST["ProductExpireDate"]) && isset($_POST["ProductExpireDate"])) {
            $customer1 = new Customer(1, "Kevin", "Adamik", "014676236", "kevinisamazing@gmail.com", 100000);
            $expireDate = new DateTime($_POST["ProductExpireDate"]);
            $product1 = new Product(NULL, $_POST["ProductName"], $_POST["ProductPrice"], $expireDate);
            $isSuccessful = $customer1->sell($product1);
            if($isSuccessful === true) {
                echo "Selling product was successful";
            }else {
                echo "Selling product was unsuccessful";
            }
        }
    }else {
        echo "Product price can't be negative";
    }
}
?>


<html>
<form action = "sell.php" method="POST">
    <label for=""></label>
    <div>
    Product Name: <input type="text" name="ProductName" required>
    </div>
    <div>
        Product Price: <input type="number" name = "ProductPrice" min = "0.01" step="0.01" required>
    </div>
    <div>
        Product Expire date: <input type="date" name = "ProductExpireDate" required>
    </div>
    
    <button>Sell</button>
</form>

</html>