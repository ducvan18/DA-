<?php
require_once 'Models/User.php';

function checkAccount()
{
    if(isset($_SESSION['user_id']) && isset($_SESSION['username']) && isset($_SESSION['password'])){
        header('Location:./index.php?url=accountInfor');
        
        exit();
    }else{
        header('Location:./index.php?url=login');
        exit();
    }
}
function toLogin()
{
    include 'Views/User/Login.php';
}
function quenmk()
{
    if (isset($_POST['guiemail']) && ($_POST['guiemail'])) {
        $email = $_POST['email'];
        $checkemail = checkEmail($email);
        // var_dump($checkemail);
            //$thongbao="Cập nhật thành công";
        if ($checkemail != null) {
            $thongbao = "Mật khẩu của bạn là: " . $checkemail[0]['password'];
        } else {
            $thongbao = "Email này không tồn tại";
        }
    }
    include 'Views/User/quenmk.php';
}
function userOrAdmin()
{
    $username = $_POST['username'];
    $password = $_POST['password'];
    $userInfor = getUser($username, $password);
    if($userInfor != null)
    {
        $_SESSION['role'] = $userInfor[0]['role'];
        $_SESSION['user_id'] = $userInfor[0]['user_id'];
        $_SESSION['username']= $userInfor[0]['username'];
        $_SESSION['password']= $userInfor[0]['password'];
        if($_SESSION['role'] == 1)
        {
            header('Location:../admin/index.php');
            exit();
        }else{
            header('Location:index.php');
            exit();
        }
    }else
    {
        $error = 'Username or password incorrect';
        header('Location:./index.php?url=login&error='.$error);
        exit();
    }
    
}
function toAccountInfor()
{
    $listBill = getAllBill($_SESSION['user_id']);
    // echo "<pre>";
    // var_dump($listBill);
    // die();
    include 'Views/User/AccountInfor.php';
}
function toRegister()
{
    include 'Views/User/Register.php';
}
function register()
{
    $username = $_POST['username'];
    $password = $_POST['password'];
    $repassword = $_POST['repassword'];
    $email = $_POST['email'];
    $checkUsername = checkUserName($username);
    $checkEmail = checkEmail($email);

    $error = [];
    if(empty(trim($username))){
        $error['username']['required'] = 'Username is required';
    }elseif(strlen(trim($username)) < 6)
    {
        $error['username']['min'] = 'Username must be at least 6 characters';
    }elseif($checkUsername != null){
        $error['username']['exists'] = 'Username already exists';
    }

    if(empty(trim($password))){
        $error['password']['required'] = 'Password is required';
    }elseif(strlen(trim($password)) < 6){
        $error['password']['min'] = 'Password must be at least 6 characters';
    }elseif($password != $repassword){
        $error['password']['match'] = 'Passwords do not match';
    }

    if(empty(trim($email))){
        $error['email']['required'] = 'Email is required';
    }elseif(!(filter_var($email,FILTER_VALIDATE_EMAIL)))
    {
        $error['email']['valid'] = 'Email is not valid';
    }elseif($checkEmail != null){
        $error['email']['exists'] = 'Email already exists';
    }
    if(count($error) > 0){
        include 'Views/User/Register.php';
    }else {
        addUser($username, $password, $email);
        header('Location:./index.php?url=login');
        exit();
    }
}
function myBill()
{
    if (isset($_GET['idBill']) && ($_GET['idBill'] > 0)) {
        $yourOrder = getOneBill($_GET['idBill']);
      
        include "Views/User/mybill.php";
    }else{
        include "PageNotFound.php"; 
    }
}