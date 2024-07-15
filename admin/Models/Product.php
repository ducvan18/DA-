<?php
require_once 'BaseModel.php';

function getAllProduct()
{
    $sql = "SELECT * FROM product, category WHERE product.category_id = category.category_id";
    return getData($sql);
}

function insertProduct($productName,$price, $desc, $image, $category)
{
    $sql = "INSERT INTO product (product_name,product_price,product_description,product_image, category_id) VALUES ('$productName','$price','$desc','$image','$category')";
    return getData($sql);
}
function deleteProduct($product_id)
{
    $sql = "DELETE FROM product WHERE product_id = '$product_id'";
    return getData($sql);
}
function getProductById($product_id)
{
    $sql = "SELECT * FROM product WHERE product_id = '$product_id'"; 
    return getData($sql);
}
function updateProductById($product_id, $p_name, $p_desc, $p_price, $category, $imageUrl)
{
    $sql = "UPDATE product SET product_name='$p_name', product_description='$p_desc',product_price=$p_price,category_id=$category,product_image='$imageUrl' 
    WHERE product_id=$product_id";
    return getData($sql);
}