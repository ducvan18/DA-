<?php
require_once 'Models/PayMethod.php';

function viewPayMethod()
{
    $payMethods = getAllPayMethod();
    include 'Views/PayMethod/ViewPayMethod.php';
}

function addPayMethod()
{
    $name = $_POST['name'];
    insertPayMethod($name);
    header('Location:./index.php?url=pay-method');
    exit();
}
function delPayMethod()
{
    $id = $_GET['id'];
    deletePayMethod($id);
    header('Location:./index.php?url=pay-method');
    exit();
}

function viewEditPayMethod()
{
    $id = $_GET['id'];
    $payMethod = getPayMethodById($id);
    include 'Views/PayMethod/EditPayMethod.php';
}

function updatePayMethod()
{
    $id = $_POST['id'];
    $name = $_POST['name'];
    updatePayMethodById($id, $name);
    header('Location:./index.php?url=pay-method');
    exit();
}