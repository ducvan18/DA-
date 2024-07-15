<?php

    include_once "BaseModel.php";
   
    $order_id=$_POST['record'];
    //echo $order_id;
    $sql = "SELECT order_status FROM orders WHERE order_id='$order_id'"; 
    $result=getData($sql);
  //  echo $result;

    
     
   // echo $row["pay_status"];
    
    if($result[0]["order_status"]==0){
         $update = getData("UPDATE orders SET order_status=1 WHERE order_id='$order_id'");
    }
    else if($result[0]["order_status"]==1){
         $update = getData("UPDATE orders SET order_status=0 WHERE order_id='$order_id'");
    }
    
        
 
    // if($update){
    //     echo"success";
    // }
    // else{
    //     echo"error";
    // }
    
?>
<?=$row['order_status'];?>