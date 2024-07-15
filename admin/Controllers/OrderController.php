<?php
require_once 'Models/Order.php';

function viewOrder()
{
    $orders = getAllOrder();
    include 'Views/Order/ViewOrder.php';
}