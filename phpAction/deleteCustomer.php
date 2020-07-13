<?php
 include_once('../common/db.php');
if(isset($_GET['customer_id'])){
    $id= $_GET['customer_id'];
    $sql= "delete from customers where customer_id=$id";
    $result = mysqli_query($conn , $sql);
    
    
    
    if(isset($_GET['customer_id'])){
        $id= $_GET['customer_id'];
        $sql1= "delete from customerdetails where customer_id=$id";
        $result1 = mysqli_query($conn , $sql1);
    }

   if($result){
       
       header('Location: ../customers.php');
   }
   else{
     
     header('Location: ../customers.php');
   }
                        
}




?>