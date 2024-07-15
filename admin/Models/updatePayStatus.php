<?php

include_once "BaseModel.php";

    $order_id=$_POST['record'];
    //echo $order_id;
    $sql = "SELECT payment_status from orders where order_id='$order_id'"; 
    $result=getData($sql);
  //  echo $result;

    
   // echo $row["pay_status"];
    
    if($result[0]["payment_status"]==0){
         $update = getData("UPDATE orders SET payment_status=1 where order_id='$order_id'");
    }
    else if($result[0]["payment_status"]==1){
         $update = getData("UPDATE orders SET payment_status=0 where order_id='$order_id'");
    }
        
 
    // if($update){
    //     echo"success";
    // }
    // else{
    //     echo"error";
    // }
    
?>