<?php
require_once 'BaseModel.php';
    $id_product_cart[]= $_POST['product_id_buy'];
    var_dump($id_product_cart);
    foreach ($id_product_cart as $key) {
        foreach($key as $val) {
            $sql = "SELECT * FROM cart,user,product_variant WHERE cart.cart_id = $val AND cart.user_id = user.user_id AND cart.variant_id = product_variant.variant_id";
        $product_cart = getData($sql);
        $product_variant_id = $product_cart[0]['variant_id'];
        $query = "SELECT * FROM product_variant,product WHERE product_variant.variant_id = $product_variant_id AND product_variant.product_id = product.product_id";
        $product_name = getData($query);
        echo $product_cart[0]['cart_id'];
        echo $product_cart[0]['variant_id'];
        echo $product_cart[0]['username'];
        echo $product_name[0]['product_name'];
        echo $product_cart[0]['cart_quantity'];
        }
        
    }
?>

