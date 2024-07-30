<?php
session_start();
ob_start();
$url = isset($_GET['url']) == true ? $_GET['url'] : '/';
require_once 'Controllers/AboutUsController.php';
require_once 'Controllers/ShopController.php';
require_once 'Controllers/ProductController.php';
require_once 'Controllers/UserController.php';
require_once 'Controllers/OnlineCheckoutController.php';
include 'Header.php';


switch ($url) {
    case '/':
        toHomePage();
        break;
    case 'about-us':
        toAboutUs();
        break;
    case 'shop':
        toShop();
        break;
        case 'quenmk':
            quenmk();
            break;
    case 'listCategory':
        toCategory();
        break;
    case 'detail-product':
        toDetailProduct();
        break;
    case 'shop-cart':
        if (isset($_POST['add'])) {
            addProductToCart();
        }
        toShopCart();
        break;
    case 'del-productCart':
        if (isset($_GET['idCart'])) {
            delProductCart();
        }
        break;
    case 'checkout':
        toCheckout();
        break;
    case 'buy-success':

        online_checkout();

        break;
    case 'thankyou':
        if (isset($_GET['cartId']) && $_GET['cartId']) {
            luuDonHang();
        }
        toThankYou();
        break;
    case 'account':
        checkAccount();
        break;
    case 'login':
        if (isset($_POST['login']) && $_POST['login']) {
            userOrAdmin();
        }
        toLogin();
        break;
    case 'accountInfor':
        toAccountInfor();
        break;
    case 'logout':
        unset($_SESSION['role'], $_SESSION['user_id'], $_SESSION['username'], $_SESSION['password']);
        header('Location:./index.php');
        exit();
        // break;
    case 'register':
        if (isset($_POST['register']) && $_POST['register']) {
            register();
        }
        toRegister();
        break;


    case 'myBill':
        myBill();
        break;
    case 'blog':
        toBlog();
        break;
    case 'contact':
        toContact();
        break;
    default:
        require_once 'PageNotFound.php';
        break;
}

include 'Footer.php';

























require_once 'Footer.php';