<?php
require_once 'BaseModel.php';

function getAllOrder()
{
    $sql = "SELECT * FROM orders, user, payment_method WHERE orders.user_id = user.user_id ORDER BY order_created_at DESC
    LIMIT 10";
    return getData($sql);
}