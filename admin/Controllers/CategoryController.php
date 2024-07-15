<?php
require_once 'Models/Category.php';

function viewCategory()
{
    $categorys= getAllCategory();
    // var_dump($categorys);
    include('Views/Category/ViewCategory.php');
}

function addCategory()
{
    $name = $_POST['c_name'];
    $error = '';
    if (empty($name)) {
        $error = 'Name is required';
    }
    if ($error == 'Name is required') {
        echo "<script>alert('$error')</script>";
        viewCategory();
    }else
    {
        inserCategory($name);
        header('Location:./index.php?url=categorys');
        exit();
    }
    
}

function delCategory()
{
    $c_id=$_GET['id'];
    delCategoryById($c_id);
    header('Location:./index.php?url=categorys');
    exit();
}
function viewEditCategory()
{
    $c_id=$_GET['id'];
    $categorys = getCategoryById($c_id);
    include('Views/Category/EditCategory.php');
}
function updateCategory()
{
    $id=$_POST['id'];
    $name = $_POST['name'];
    $error = '';
    if (empty($name)) {
        $error = 'Name is required';
    }
    if ($error == 'Name is required') {
        $categorys = getCategoryById($id);
        include('Views/Category/EditCategory.php');
        exit();
    }else{
         updateCategoryById($id,$name);
        
            header('Location:./index.php?url=categorys');
            exit();
       
        
    }
   
}