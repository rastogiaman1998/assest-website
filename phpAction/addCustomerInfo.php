<?php

    require_once('../common/db.php');


if(isset($_REQUEST['submit-customerRecord'])){
  
  $name =  isset($_POST['name']) ? $_POST['name'] : null;
  $email_id = isset($_POST['email_id']) ? $_POST['email_id'] : null;
  $business_name = isset($_POST['business_name']) ? $_POST['business_name'] : null;
  $address = isset($_POST['address']) ? $_POST['address'] : null;
  $phone_no = isset($_POST['phone_no']) ? $_POST['phone_no'] : null;
  
  $sql = "INSERT INTO customers (name, email_id, business_name, address, phone_no)
                        VALUES('$name', '$email_id', '$business_name', '$address', '$phone_no')";
   //$sql= "INSERT INTO customerdetails (customer_id)
     //                    VALUES('.$conn->insert_id')";

  
  $result = mysqli_query($conn , $sql);
  $xyz="".$conn->insert_id;
  
  if(isset($_REQUEST['submit-customerRecord'])){

      $sql1= "INSERT INTO customerdetails (customer_id)
      VALUES('$xyz')";
      $result1 = mysqli_query($conn , $sql1);

  }



  if($result){

    //echo "last id". $conn-> insert_id;
    header('Location: ../customers.php');
    
   // showAlert("success","Product Registration Successful");
  }
  else{
    
    header('Location: ../customers.php');
   // showAlert("danger","Product Registration Failed");

  }
  


}


?>