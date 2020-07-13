<?php

include_once('../../common/db.php');


$sql = $conn->query('SELECT * FROM products');
$rows = array();

while($data = $sql->fetch_array()) {

  //  echo $data['pname'];
    $rows['products'][] = $data;

}

print json_encode($rows);

?>