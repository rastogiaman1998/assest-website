<?php 



if(isset($_REQUEST['deletenote'])){

$id = $_POST['customer_id'];
$index= $_POST['note_index'];
$sql="select notes_for_customer from customerdetails where customer_id=$id";

$result = mysqli_query($conn , $sql);
$row = mysqli_fetch_assoc($result);


$notes= $row['notes_for_customer'];

$notesArray= explode("," , $notes);
//print_r($notesArray);
array_splice($notesArray,$index,1);

//print_r($notesArray);

$finalNotes= implode(",", $notesArray);

//echo $finalNotes;



$updateSql="update customerdetails SET notes_for_customer='$finalNotes' where customer_id=$id";

$result1 = mysqli_query($conn , $updateSql);


if($result1){

   
  
   echo "<meta http-equiv='refresh' content='0'>";
}

else{
    
   

    echo "<meta http-equiv='refresh' content='0'>";
}

}





?>