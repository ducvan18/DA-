<?php
require_once 'Models/Product.php';
require_once 'Models/Category.php';


function viewProduct()
{
    $categorys = getAllCategory();
    $products = getAllProduct();
    include 'Views/Product/ViewProduct.php';
}

function addProduct()
{
    $productName = $_POST['name'];
    $desc = $_POST['desc'];
    $price = $_POST['price'];
    $category = $_POST['category'];

    $image = $_FILES['image'];
    $targetDir = "../public/img/shop/product/";
    $image_name = $image['name'];
    $image_tmp = $image['tmp_name'];
    $targetFile = $targetDir . basename($image_name);
    move_uploaded_file($image_tmp, $targetFile);
    $imageUrl = $targetFile;
    insertProduct($productName, $price, $desc,  $imageUrl, $category);
    header('Location:./index.php?url=products');
    exit();
}
function delProduct()
{
    $product_id = $_GET['id'];
    deleteProduct($product_id);
    header('Location:./index.php?url=products');
    exit();
}
function viewEditProduct()
{
    $product_id = $_GET['id'];
    $categorys = getAllCategory();
    $product = getProductById($product_id);
    include('Views/Product/EditProduct.php');
}

function updateProduct()
{
    $product_id = $_POST['product_id'];
    $p_name = $_POST['name'];
    $p_desc = $_POST['desc'];
    $p_price = $_POST['price'];
    $category = $_POST['category'];

    // $checkProduct = checkProduct($productName,$category);

    $error = array();
    if (empty(trim($p_name))) {
        $error['product_name']['required'] = "Khônng được để chống và ít nhất 2 ký tự";
    } elseif (strlen(trim($p_name)) < 2) {
        $error['product_name']['min'] = "Tên sản phẩm ít nhất 2 ký tự";
    }

    if (!filter_var($p_price, FILTER_VALIDATE_INT)) {
        $error['price']['isInt'] = "Giá sản phẩm là số nguyên và không được bỏ trống";
    }elseif($p_price < 1000){
        $error['price']['min'] = "Giá sản phẩm phải lớn hơn băng 1000";
    }
    
    if (!empty($error)) {
        $categorys = getAllCategory();
        $product = getProductById($product_id);
        include('Views/Product/EditProduct.php');
        exit();
    } else {
        $targetDir = "../public/img/shop/product/";
        if (isset($_FILES['newImage']) && $_FILES['newImage']['error'] === UPLOAD_ERR_OK) {

            $image = $_FILES['newImage'];

            $image_name = $image['name'];
            $image_tmp = $image['tmp_name'];
            $targetFile = $targetDir . basename($image_name);
            move_uploaded_file($image_tmp, $targetFile);

            $imageUrl = $targetFile;
        } else {

            $imageUrl = $_POST['existingImage'];
        }

        updateProductById($product_id, $p_name, $p_desc, $p_price, $category, $imageUrl);

        header('Location:./index.php?url=products');
        exit();
    }
}
