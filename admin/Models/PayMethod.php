<?php
require_once 'BaseModel.php';
function getAllPayMethod()
{
    $sql = "SELECT * FROM payment_method";
    return getData($sql);
}
function insertPayMethod($name)
{
    $sql = "INSERT INTO payment_method (payment_method_name) VALUES ('$name')";
    return getData($sql);
}
function deletePayMethod($id)
{
    $sql = "DELETE FROM payment_method WHERE payment_method_id = '$id'";
    return getData($sql);
}

function getPayMethodById($id)
{
    $sql= "SELECT * FROM payment_method WHERE payment_method_id = '$id'";
    return getData($sql);
}
function updatePayMethodById($id,$name)
{
    $sql = "UPDATE payment_method SET payment_method_name = '$name' WHERE payment_method_id = '$id'";
    return getData($sql);
}