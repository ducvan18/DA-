<?php
require_once 'Models/ProductVariant.php';
require_once 'Models/Product.php';

function viewProductVariant()
{   
    $products = getAllProduct();
    $productVariants = getAllProductVariant();
    include 'Views/ProductVariant/ViewProductVariant.php';
}
function addProductVariant()
{
    $product_id = $_POST['product'];
    $size_id = $_POST['size'];
    $color = $_POST['color'];
    $quantity = $_POST['qty'];
    insertProductVariant($product_id, $size_id, $color, $quantity);
    header('Location:./index.php?url=product-variant');
    exit();
}
function delProductVariant()
{
    $id = $_GET['id'];
    deleteProductVariant($id);
    header('Location:./index.php?url=product-variant');
    exit();
}