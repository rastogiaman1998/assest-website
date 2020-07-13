<?php

    


if(isset($_REQUEST['submit-addorder'])){
  
  $customer_id =  isset($_POST['customer_id']) ? $_POST['customer_id'] : null;
  $status = isset($_POST['status']) ? $_POST['status'] : null;
  $delivery_date = isset($_POST['delivery_date']) ? $_POST['delivery_date'] : null;
  
  
  $sql1 = "INSERT INTO orders (customer_id, status, delivery_date)
                        VALUES('$customer_id', '$status', '$delivery_date')";
        

  
  $result1 = mysqli_query($conn , $sql1);
  



  if($result1){

    //echo "last id". $conn-> insert_id;
 echo "<meta http-equiv='refresh' content='0'>";
    
   // showAlert("success","Product Registration Successful");
  }
  else{
    
    
   echo "<meta http-equiv='refresh' content='0'>";
   // showAlert("danger","Product Registration Failed");

  }
  


}


?>