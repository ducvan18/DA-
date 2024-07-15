<?php
require_once 'Models/Customer.php';

function viewCustomer()
{
    $customers = getAllCustomers();
    include 'Views/Customer/ViewCustomer.php';
}