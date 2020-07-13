<?php 










if(isset($_REQUEST['add'])){
   
   
    
    
   $note =  isset($_POST['notes_for_customer']) ? $_POST['notes_for_customer'] : null;
  
  
   $sql1= "update customerdetails SET notes_for_customer=CONCAT(notes_for_customer, ', $note')  where customer_id=$id";
   $result = mysqli_query($conn , $sql1);

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