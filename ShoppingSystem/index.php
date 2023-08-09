<?php
require_once 'DataBaseController.php';

$db = new DataBaseController();
echo $db->getProductById(3);



?>