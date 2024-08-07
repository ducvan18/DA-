<?php
require_once 'Models/Product.php';
require_once 'ShopController.php';
function toDetailProduct()
{
    $id = $_GET['id'];
    $colors = getColor($id);
    $sizes = getSize($id);
    $product = getOneProduct($id);
    include_once "Views/Product/DetailProduct.php";
}