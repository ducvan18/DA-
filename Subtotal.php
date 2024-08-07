<?php
require_once 'BaseModel.php';
$cart_id = $_POST['cart_id'];
$sql = "SELECT cart_totals_money FROM cart WHERE cart_id=$cart_id";
$data = getData($sql);
echo $data[0]['cart_totals_money'];