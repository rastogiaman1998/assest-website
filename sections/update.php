<?php 

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "product"; // margshree
$limit = 10;

$conn = mysqli_connect($servername, $username, $password, $dbname) or
 die("Connection failed: " . mysqli_connect_error());
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
}
$id=$_POST['id'];
  $image=$_POST['file'];
  $model=$_POST['md'];
  $name=$_POST['nm'];
  $height=$_POST['he'];
  $width=$_POST['wtt'];
  $depth=$_POST['dtt'];
  $radius=$_POST['rd'];
  $pm=$_POST['pm'];
  $sm=$_POST['sm'];
  $sku=$_POST['sk'];
  $price=$_POST['pr'];
  echo $id,$model;  
  $sql1 ="UPDATE detail SET model='$model',name='$name',height='$height',width='$width',depth='$depth',radius='$radius',pmaterial='$pm',smaterial='$sm',sku='$sku',price='$price'
   WHERE id=$id";
  $result = $conn->query($sql1); 
    echo "update sucessfull";
    header('location:../products.php');
      
    ?>