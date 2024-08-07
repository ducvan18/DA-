<?php
require_once 'Models/Shop.php';

function toShop()
{
    $topCategories = getAllCategory();
    $products = getAllProduct();
    include_once "Views/Shop/Shop.php";
}
function toShopCart()
{   
    if(isset($_SESSION['user_id']) && isset($_SESSION['username']) && isset($_SESSION['password']))
    {
        $user_id = $_SESSION["user_id"];
        $productCarts = getAllCarts($user_id);
        include_once "Views/Shop/ShopCart.php";
    } else {
        header('Location:./index.php?url=login');
        exit();
    }
    
}

function toCategory(){
    $idCategory = $_GET['idCategory'];
    $category = getCategory($idCategory);
    $topCategories = getAllCategory();
    $productCategory = getAllProductByCategory($idCategory);
    include_once "Views/Shop/ShowProductsByCategoryName.php";

}
function addProductToCart()
{   
    if(isset($_SESSION['user_id']) && isset($_SESSION['username']) && isset($_SESSION['password']))
    {
        $product_id = $_POST['product_id'];
        $size = $_POST['size'];
        $color = $_POST['color'];
        $variant_id = getVariantId($product_id,$size, $color);
        $product_price = getOneProduct($product_id);
        $quantity = $_POST['quantity'];
        $totals_money = $product_price[0]['product_price'] * $quantity;
        $user_id = $_SESSION['user_id'];
        insertProductToCart($user_id,$variant_id[0]['variant_id'], $quantity, $totals_money);
        toShopCart();
    } else {
        header('Location:./index.php?url=login');
        exit();
    }
    
}
function delProductCart()
{
    $id = $_GET['idCart'];
    deleteProductCart($id);
    toShopCart();
}
function toCheckout()
{   
    if(isset($_SESSION['user_id']) && isset($_SESSION['username']) && isset($_SESSION['password']))
    {   
        $userInfor = getUser($_SESSION['username'], $_SESSION['password']); 
        // echo $userInfor[0]['username'];
        $inforProduct=[];
        $cart_id = $_POST['cart_id'];
        $payment_method = getPaymentMethod();

        // var_dump($cart_id);
        foreach($cart_id as $value){
            $inforProduct[] = getProductCart($value);
            // var_dump($inforProduct);
        }
        include_once "Views/Shop/Checkout.php";
    } else {
        header('Location:./index.php?url=login');
        exit();
    }
    
}
function saveOrder()
{   
    if(isset($_SESSION['user_id']) && isset($_SESSION['username']) && isset($_SESSION['password']))
    {   
        $cart_id = $_POST['cart_id'];
        // echo "<pre>";print_r($cart_id);
        $fullname = $_POST['fullname'];
        $phone = $_POST['phone'];
        // $email = $_POST['email'];
        $address = $_POST['address'];
        $payment_method = 'Tiền mặt';
        $user_id = $_SESSION['user_id'];
        $order_details = [];
        $total=0;
        foreach ($cart_id as $key) {
            $getTotalMoney = getTotalMoney($key, $user_id);
            $total += $getTotalMoney[0]['cart_totals_money'];
        }
        $addToOrder = addToOrder($user_id, $fullname, $phone, $address,$total, $payment_method);
        $newOrederId = lastOrderId();
        foreach ($cart_id as $value) {
            $order_details[] = getProductCart($value);
        }
        // // echo "<pre>";
        // // var_dump($order_details);
        foreach ($order_details as $key) {
            $addToOrderDetails= addToOrderDetails($newOrederId[0]['order_id'], $key[0]['variant_id'], $key[0]['cart_quantity'], $key[0]['cart_totals_money']);
        }
      
            foreach ($cart_id as $value) {
                deleteProductCart($value);
            }
            header('Location:./index.php?url=thankyou');
            exit();
       
    } else {
        header('Location:./index.php?url=login');
        exit();
    }
    
}
function toHomePage()
{   
    $products = getAllProduct();
    include_once "Views/Shop/Home.php";
}
function toBlog()
{
    include_once "Views/Shop/Blog.php";
}
function toContact()
{
    include_once "Views/Shop/Contact.php";
}
function luuDonHang()
{   
    $cart_id = $_GET['cartId'];
    $fullname = $_GET['fullname'];
    $phone = $_GET['phone'];
    // $email = $_POST['email'];
    $address = $_GET['address'];
    // $payment_method = 'code';
    $user_id = $_SESSION['user_id'];
    $totals_money = $_GET['amount'];
    $payment_method = $_GET['orderInfo'];
     addToOrder($user_id, $fullname, $phone, $address, $totals_money, $payment_method, 1 );
    $newOrederId = lastOrderId();
    foreach ($cart_id as $value) {
        $order_details[] = getProductCart($value);
    }
    // // echo "<pre>";
    // // var_dump($order_details);
    foreach ($order_details as $key) {
        addToOrderDetails($newOrederId[0]['order_id'], $key[0]['variant_id'], $key[0]['cart_quantity'], $key[0]['cart_totals_money']);
    }
  
        foreach ($cart_id as $value) {
            deleteProductCart($value);
        }
        header('Location:./index.php?url=thankyou');
        exit();
}