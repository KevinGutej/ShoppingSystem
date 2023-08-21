
<html>
<form action = "buy.php" method="POST">
    <label for=""></label>
    <div>
    Product Name: <select name="ProductId" id="" required>
        <option value = "">Product Name(ProductPrice)</option>
        <option value = "1">Apple ($2.50)</option>
        <option value = "2">Banana ($1.50)</option>
    </select> <!--DISPLAY PRODUCT FROM DATABASE-->
    </div>
    <button>Buy</button>
</form>
</html>

<?php
require_once 'Customer.php';
require_once 'DataBaseController.php';

if(!empty($_POST["ProductId"]) && isset($_POST["ProductId"])) {
    $customer = new Customer(1, "Krzysiek", "Olaf", "012375643", "krzysiekolaf123@gmail.com", 150);
    $db = new DataBaseController();
    $product = $db->getProductById($_POST["ProductId"]);
    $successfulTransaction = $customer->buy($product);
    if($successfulTransaction === true) {
        echo "<p> Successful transaction </p>";
    }else
    {
        echo "<p> Unsuccessful transaction </p>";
    }
    
}



?>