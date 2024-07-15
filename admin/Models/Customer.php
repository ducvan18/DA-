<?php
require_once 'BaseModel.php';

function getAllCustomers()
{
    $sql = "SELECT * FROM user WHERE user_id !=1";
    return getData($sql);
}