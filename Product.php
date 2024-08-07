<?php
require_once 'BaseModel.php';

function getColor($id)
{
    $sql = "SELECT DISTINCT color FROM product_variant  WHERE product_id = $id";
    return getData($sql);
}
function getSize($id)
{
    $sql = "SELECT DISTINCT size FROM product_variant  WHERE product_id = $id";
    return getData($sql);
}
function getOneProduct($id)
{
    $sql = "SELECT * FROM product WHERE product_id = $id";
    return getData($sql);
}
function getAllProductByCategory($idCategory ){
    $sql = "SELECT * FROM product WHERE category_id = $idCategory";
    return getData($sql);
}
function getAllSize(){

}