<?php
require_once 'Models/Home.php';

function toHomePage()
{
    $quantity_user = getQuantityUser();
    $quantity_category = getQuantityCategory();
    $quantity_product = getQuantityProduct();
    $quantity_order = getQuantityOrder();
    include "Home.php";
}