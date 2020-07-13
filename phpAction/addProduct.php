<?php

//Basic
 $model=isset($_POST['model']) ? $_POST['model']:null;
 $sku=isset($_POST['sku']); 
 $name=isset($_POST['name']);  // Need to do this ternary operator for all 
 
 
 $width=isset($_POST['width']);  
 
 
 $radius=isset($_POST['radius']); 
 $sm=isset($_POST['smaterial']);
 $pm=isset($_POST['pmaterial']);
 $price=isset($_POST['price']); 
 $height=isset($_POST['height']); 
 $depth=isset($_POST['depth']);
 $finish=isset($_POST['finish']); 
 
 $smaterial1=isset($_POST['smaterial1']);    //packaging option
 $price1=   isset($_POST['price1']);    // packaging pricing
 $pmaterial1=isset($_POST['pmaterial1']);  //psc per pack
 
 $filename = addslashes($_FILES['file']['name']);
 $file = addslashes(file_get_contents($_FILES["file"]["tmp_name"]) );
 echo $filename;
$filetype=addslashes($_FILES['file']['type']);
$filesize=addslashes($_FILES['file']['size']);
 $array = array('jpg','jpeg','png');

 $ext =PATHinfo($filename,PATHINFO_EXTENSION);

 $dbhost = 'localhost';
 $dbuser = 'root';
 $dbpass = '';
 $dbname = 'product';

 $conn = new mysqli($dbhost , $dbuser, $dbpass, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
 if(in_array($ext,$array)){
    $sql ="Insert into detail(image,model,name,height,width,depth,radius,pmaterial,smaterial,sku,price)
     values('$file',$model,'$name',$height,$width,$depth,$radius,'$pm','$sm','$sku',$price)";
    
 }
    if (mysqli_query($conn, $sql)) {
        echo "New record created successfully";
    //    header('location:/index.php');
    echo "porduct add sucessfully";
    } 
  else{
      echo "failed to Add";
  }
    $conn->close();

?>

