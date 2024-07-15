<?php
require_once 'BaseModel.php';
function getAllProductVariant()
{
    $sql = "SELECT * FROM product_variant, product WHERE product_variant.product_id = product.product_id
    ORDER BY product_variant.product_id ASC, size ASC";
    return getData($sql);
}
function insertProductVariant($product_id, $size_id, $color, $quantity)
{
    $sql = "INSERT INTO product_variant (product_id, size, color, variant_quantity) VALUES ('$product_id', '$size_id', '$color', '$quantity')";
    return getData($sql);
}
function deleteProductVariant($variation_id)
{
    $sql = "DELETE FROM product_variant WHERE variant_id = '$variation_id'";
    return getData($sql);
}
function checkProduct($product_name, $category_id)
{
    $sql = "SELECT * FROM product WHERE product_name = '$product_name' AND category_id = '$category_id'";
    return getData($sql);
}