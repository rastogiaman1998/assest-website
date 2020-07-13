<?php
 include_once('../common/db.php');
if(isset($_GET['oeid'])){
    $oeid= $_GET['oeid'];
    $customer_id = $_GET['customer_id'];
    $orderid = $_GET['orderid'];
    $sql= "delete from orders where oeid=$oeid";
    $result = mysqli_query($conn , $sql);
    
  
    
    

   if($result){
    
     header('Location: order.php?customer_id='.$customer_id. '&orderid='.$orderid);
   // echo "<meta http-equiv='refresh' content='0'>";
   }
   else{
    header('Location: order.php?customer_id='.$customer_id. '&orderid='.$orderid);
    //echo "<meta http-equiv='refresh' content='0'>";
   }
                        
}




?>