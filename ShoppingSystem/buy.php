<html>
<form action = "buy.php" method="POST">
    <label for=""></label>
    <div>
    Product Name: <select name="ProductId" id="" required>
        <option value = "">Product Name(ProductPrice)</option>
        <option value = ""></option>
        <option value = ""></option>
        <option value = ""></option>
        <option value = ""></option>
    </select>
    </div>
    <button>Buy</button>
</form>
</html>

<?php
if(!empty($_POST["ProductId"]) && isset($_POST["ProductId"])) {
    $customer = new Customer(1, "Krzysiek", "Olaf", "012375643", "krzysiekolaf123@gmail.com", 150);
    $product = new Product($_POST["ProductId"], USE FUNCTION FROM DataBaseController)
}



?>