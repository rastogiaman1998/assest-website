<?php 










if(isset($_REQUEST['add-details'])){
   
   
      
  
    
   $shop_location =  isset($_POST['shop_location']) ? $_POST['shop_location'] : null;
  
  $sql1= "update customerdetails SET shop_location='$shop_location' where customer_id=$id";
  // $sql1= "update customerdetails SET notes_for_customer=CONCAT(notes_for_customer, ', $note')  where customer_id=$id";
 
 
  
  $result = mysqli_query($conn , $sql1);





if(isset($_REQUEST['add-details'])){
   

  $name =  isset($_POST['name']) ? $_POST['name'] : null;
  $email_id = isset($_POST['email_id']) ? $_POST['email_id'] : null;
  $business_name = isset($_POST['business_name']) ? $_POST['business_name'] : null;
  $address = isset($_POST['address']) ? $_POST['address'] : null;
  $phone_no = isset($_POST['phone_no']) ? $_POST['phone_no'] : null;

  $sql= "update customers SET name='$name',
                              email_id='$email_id',
                              business_name='$business_name',
                              address='$address',
                              phone_no='$phone_no' 
          where customer_id=$id";
  
 
 
  
  $result1 = mysqli_query($conn , $sql);


}

if($result){
 
   echo "<meta http-equiv='refresh' content='0'>";
   
    //header('Location: ../customers.php');
    
   
  }
  else{
   
   echo "<meta http-equiv='refresh' content='0'>";
  // header('Location: ../customers.php');
   

  }
  


}

?>