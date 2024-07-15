<?php
require_once 'BaseModel.php';

function getAllCategory()
{
    $sql = "SELECT * FROM category";
    return getData($sql);
}
function inserCategory($name)
{
    $sql = "INSERT INTO category (category_name) VALUES ('$name')";
    return getData($sql);
}
function delCategoryById($c_id)
{
    $sql = "DELETE FROM category WHERE category_id = '$c_id'";
    return getData($sql);
}
function getCategoryById($c_id)
{
    $sql = "SELECT * FROM category WHERE category_id = '$c_id'"; 
    return getData($sql);
}
function updateCategoryById($id, $name)
{
    $sql = "UPDATE category SET category_name = '$name' WHERE category_id = '$id'";
    return getData($sql);
}