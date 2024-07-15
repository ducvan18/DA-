<?php
session_start();
ob_start();
if(isset($_SESSION['role']) && $_SESSION['role'] == 1)
{
$url = isset($_GET['url']) == true ? $_GET['url'] : '/';
require_once 'Controllers/CategoryController.php';
require_once 'Controllers/CustomerController.php';
require_once 'Controllers/ProductController.php';
require_once 'Controllers/PayMethodController.php';
require_once 'Controllers/ProductVariantController.php';
require_once 'Controllers/OrderController.php';
require_once 'Controllers/HomeController.php';
include 'Header.php';
switch ($url) {
    case '/':
        toHomePage();
        break;
    //category
    case 'categorys':
        viewCategory();
        break;
    case 'add-category':
        if(isset($_POST['add']))
        {
            addCategory();
        }
        break;
    case 'del-category':
        if(isset($_GET['id']))
        {
            delCategory();
        }
        break;
    case 'edit-category':
        if(isset($_POST['update']))
        {
            updateCategory();
        }
        viewEditCategory();
        break;
    //customer
    case 'customers':
        viewCustomer();
        break;
    //product
    case 'products':
        viewProduct();
        break;
    case 'add-product':
        if(isset($_POST['add']))
        {
            addProduct();
        }
        break;
    case 'del-product':
        if(isset($_GET['id']))
        {
            delProduct();
        }
        break;
    case 'edit-product':
        if(isset($_POST['update']))
        {   
            updateProduct();
        }
        viewEditProduct();
        break;
    //Pay Method
    case'pay-method':
        viewPayMethod();
        break;
    case 'add-payMethod':
        if(isset($_POST['add']))
        {
            addPayMethod();
        }
        break;
    case 'del-payMethod':
        if(isset($_GET['id']))
        {
            delPayMethod();
        }
        break;
    case 'edit-payMethod':
        if(isset($_POST['update']))
        {
            updatePayMethod();
        }
        viewEditPayMethod();
        break;
    //Product variant
    case 'product-variant':
        viewProductVariant();
        break;
    case 'add-productVariant':
        if(isset($_POST['add']))
        {
            addProductVariant();
        }
        break;
    case 'del-productVariant':
        if(isset($_GET['id']))
        {
            delProductVariant();
        }
        break;
    //orders
    case 'orders':
        viewOrder();
        break;
    case 'logout':
        unset($_SESSION['role'],$_SESSION['user_id'], $_SESSION['username'], $_SESSION['password']);
        header("Location:../web/index.php");
        break;
    default:
        # code...
        break;
}



include 'Footer.php';
} else 
{
    header("Location:../web/index.php");
}