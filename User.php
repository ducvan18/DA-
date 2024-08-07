<?php
require_once 'BaseModel.php';

function getUser($username, $password)
{
    $sql = "SELECT * FROM user WHERE username = '$username' AND password = '$password'";
    return getData($sql);
}
function checkUserName($username)
{
    $sql = "SELECT * FROM user WHERE username = '$username'";
    return getData($sql);
}
function checkEmail($email)
{
    $sql = "SELECT * FROM user WHERE email = '$email'";
    return getData($sql);
}
function addUser($username, $password, $email)
{
    $sql = "INSERT INTO user (username, password, email) VALUES ('$username', '$password', '$email')";
    return getData($sql);
}
function getAllBill($user_id)
{
    $sql = "select * from orders where user_id = $user_id order by order_created_at desc";
    return getData($sql);
}
;
function getOneBill($id_bill)
{
    $sql = "SELECT order_detail.*, orders.*, product_variant.*
     FROM order_detail
      JOIN orders ON order_detail.order_id = orders.order_id
       JOIN product_variant ON order_detail.variant_id = product_variant.variant_id 
       WHERE order_detail.order_id = $id_bill";
    return getData($sql);
}
;

