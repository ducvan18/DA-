<?php
require_once 'BaseModel.php';

function getQuantityUser()
{
    $sql = "SELECT COUNT(user_id) AS quantity_user FROM user";
    return getData($sql);
}

function getQuantityProduct(){
    $sql = "SELECT COUNT(product_id) AS quantity_product FROM product";
    return getData($sql);
}

function getQuantityCategory(){
    $sql = "SELECT COUNT(category_id) AS quantity_category FROM category";
    return getData($sql);
}

function getQuantityOrder(){
    $sql = "SELECT COUNT(order_id) AS quantity_order FROM orders";
    return getData($sql);
}