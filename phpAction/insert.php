<?php

 $model=isset($_POST['model']) ? $_POST['model']:null;
 $name=isset($_POST['name']) ? $_POST['name']:null;  // Need to do this ternary operator for all 
 $sku=$_POST['sku'];

 if($_POST['width']!=null){
 $width=$_POST['width'];                           //width
}
else{
    $width=0;
}
if($_POST['radius']!=null){
 $radius=$_POST['radius'];                       //Radius
}
else{
    $radius=0;
}
if($height=$_POST['height']!=null){
    $height=$_POST['height'];                   // Height
   }
   else{
       $height=0;
   }
   if($_POST['depth']!=null){
    $depth=$_POST['depth'];                     //depth
   }
   else{
       $depth=0;
   }
if($_POST['smaterial']!=null){
 $sm=$_POST['smaterial'];                      //Secondary Material
}
else{
    $sm="Null";
}
if($_POST['pmaterial']!=null){
 $pm=$_POST['pmaterial'];                     //Primary Material
}
else{
    $pm="Null";
}
if($_POST['price']!=Null){
 $price=$_POST['price'];                      //Packaging price
}
else{
    $price=0;
}
if($_POST['smaterial1']!=null){
 $smaterial1=$_POST['smaterial1'];    //packaging option
}
else{
    $smaterial1="NULL";
}
if($_POST['price1']!=null){
 $price1=$_POST['price1'];    // packaging pricing
}
else{
    $price1=0;
} 
$pmaterial1=isset($_POST['pmaterial1']); 
 
 $filename = addslashes($_FILES['file']['name']);
 $file = addslashes(file_get_contents($_FILES["file"]["tmp_name"]));
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
    $sql ="Insert into productdetails(image,model,name,height,width,depth,radius,pmaterial,smaterial,sku,price)
     values('$file',$model,'$name',$height,$width,$depth,$radius,'$pm','$sm','$sku',$price)";
    
 }
    if (mysqli_query($conn, $sql)) {
        echo "New record created successfully";
    //    header('location:/index.php');
    echo "product add sucessfully";
   // header('location:../add.php');
    } 
    else{
        echo "<br>";
        echo "Not sucessfull";
    }
  
    $conn->close();

?>

