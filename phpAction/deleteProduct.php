<?php   //Delete Product


  if(isset($_POST['delete'])){
                  
    $tab1=$_POST['delete'];
$sql1 ="DELETE FROM productdetails WHERE product_id =$tab1";

$result = $conn->query($sql1);

}




?>