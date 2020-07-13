<?php
// Complete this logic to populate Breadcrumb

$pcid = isset($_GET['pcid']) ? $_GET['pcid'] : null;
$model = isset($_GET['model']) ? $_GET['model'] : null;
$pid = isset($_GET['pid']) ? $_GET['pid'] : null;


?>


<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
  
    <li class="breadcrumb-item"><a href="categories.php">Margshree</a></li> 

  <?php
  
    if($pcid){

        echo'  <li class="breadcrumb-item"><a href="products.php?pcid=1">Kitchenware</a></li>';
    
    }

    if($model ){
      echo'  <li class="breadcrumb-item"><a href="products.php?pcid=1">Kitchenware</a></li>';
      echo'  <li class="breadcrumb-item"><a href="sku.php?model=1234">Model</a></li>';

    }

    if($pid ){
      echo'  <li class="breadcrumb-item"><a href="products.php?pcid=1">Kitchenware</a></li>';
      echo'  <li class="breadcrumb-item"><a href="sku.php?model=1234"">Model</a></li>';
      echo'  <li class="breadcrumb-item"><a href="product.php?pid=1">SKUID</a></li>';

    }

  ?>


  </ol>
</nav>