<?php
require_once 'BaseModel.php';

function getAllProduct()
{
    $sql = "SELECT * FROM product";
    return getData($sql);
}
function getAllCarts($user_id)
{
    $sql = "SELECT * FROM cart, product_variant, product WHERE cart.variant_id = product_variant.variant_id AND product.product_id = product_variant.product_id AND cart.user_id = $user_id";
    return getData($sql);
}
function getVariantId($product_id, $size, $color)
{
    $sql = "SELECT variant_id FROM product_variant WHERE product_id = $product_id AND size = '$size' AND color = '$color'";
    return getData($sql);
}

function insertProductToCart($user_id,$variant_id, $quantity, $product_price)
{
    $sql = "INSERT INTO cart (user_id, variant_id, cart_quantity, cart_totals_money) VALUES ('$user_id','$variant_id', '$quantity','$product_price')";
    return getData($sql);
}
function deleteProductCart($id)
{
    $sql = "DELETE FROM cart WHERE cart_id = '$id'";
    return getData($sql);
}

function getProductCart($id)
{
    $sql = "SELECT * FROM cart, product_variant, product WHERE cart.variant_id = product_variant.variant_id AND product.product_id = product_variant.product_id AND cart.cart_id = '$id'";
    return getData($sql);
}

function getPaymentMethod()
{
    $sql = "SELECT * FROM payment_method";
    return getData($sql);
}
function addToOrder($user_id, $fullname, $phone, $address,$totals_money, $payment_method_id, $paied)
{
    $sql = "INSERT INTO orders (user_id, order_fullname, order_phone, order_address,order_total, payment_method_id, order_status) VALUES ('$user_id', '$fullname', '$phone', '$address',$totals_money, '$payment_method_id', $paied)";
    return getData($sql);
}
function lastOrderId()
{
    $sql = "SELECT order_id FROM orders ORDER BY order_id DESC LIMIT 1";
    return getData($sql);
}
function addToOrderDetails($order_id, $variant_id, $quantity, $totals_money)
{
    $sql = "INSERT INTO order_detail (order_id, variant_id, order_detail_quantity, order_detail_total_money) VALUES ('$order_id', '$variant_id', '$quantity', '$totals_money')";
    return getData($sql);
}
function toThankYou()
{
    include 'Views/Shop/ThankYou.php';
}
function getTotalMoney($cart_id, $user_id)
{
    $sql = "SELECT cart_totals_money FROM cart WHERE cart_id=$cart_id AND user_id=$user_id";
    return getData($sql);
}
function get_ttdh($order_status){
    switch ($order_status) {
      case 0:
        $tt = "chưa hoàn thành";
        break;
        case 1:
            $tt = "đã hoàn thành";
            break;
            case 2:
                $tt = "đơn hàng đã bàn giao <br> cho đơn vị vận chuyển";
                break;

                case 3:
                    $tt = "đơn hàng đang được giao đến bạn";
                    break;
    
    }
    return $tt;
};  

function getAllCategory(){
    $sql = "SELECT p.category_id, c.category_name, COUNT(p.product_id) AS product_count
    FROM product p
    JOIN category c ON p.category_id = c.category_id
    GROUP BY p.category_id, c.category_name
    ORDER BY product_count DESC;";
    return getData($sql);
}

function getCategory($category_id)
{
    $sql = "SELECT * FROM category WHERE category_id = $category_id";
    return getData($sql);
}
