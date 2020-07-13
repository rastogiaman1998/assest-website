<?php include_once('common/db.php')?>

<!DOCTYPE html>
<html lang="en">

<head>

    <!--====== Required meta tags ======-->
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
<!--====== Fontawesome css ======-->
       <link rel="stylesheet" href="assets/css/font-awesome.min.css">

<!--====== Line Icons css ======-->
<link rel="stylesheet" href="assets/css/LineIcons.css">

<!--====== Animate css ======-->
<link rel="stylesheet" href="assets/css/animate.css">

<!--====== Aos css ======-->
<link rel="stylesheet" href="assets/css/aos.css">

<!--====== Slick css ======-->
<link rel="stylesheet" href="assets/css/slick.css">

<!--====== Default css ======-->
<link rel="stylesheet" href="assets/css/default.css">

<!--====== Style css ======-->
<link rel="stylesheet" href="assets/css/style.css">

<!--====== portal css ======-->
<link rel="stylesheet" href="assets/css/portal.css">

 <!--====== Table css ======-->
 <link rel="stylesheet" href="assets/css/table.css">

</head>
<body>


<div class="container">
 
<header id="home" class="header-area pt-100"> 
        <?php include ("./sections/navigation.php"); ?>
</header>
        


<div class="row">
<div class="col-md-12">
<br>
<h2 class="alert alert-light"> Product Detail </h2>

<?php
                   
                   $id=$_GET['id'];
                   
                   $sql1 ="SELECT * FROM productdetails WHERE product_id =$id";
                   $result = $conn->query($sql1); 
                   while($row = $result->fetch_assoc())
                   {
                     
              
         ?> 
          <div class="row">
         <div class="col-md-6">
         <?php echo '<img src="data:image/jpeg;base64,'.base64_encode($row['image'] ).'" height="400" width="400" class="img-thumnail" /> '  ?>
         </div>
 <div class="col-md-6">
<table  class="table">

        
           <tr>
                 
                <h1 id="productCenter"> <?php echo $row['name']?></h1>
                 
              </tr>         
              <tr>
                 <td>Model Number</td>
                 <td><?php echo $row['model']?></td>
              </tr>
   
              <tr>
                 <td>SKU</td>
                 <td><?php echo  $row['sku'];?> </td>
              </tr>
              <tr>
                 <td>Height</td>
                 <td><?php echo  $row['height'];?> </td>
              </tr>
              <tr>
                 <td>Width</td>
                 <td><?php echo  $row['width'];?> </td>
              </tr>
              <tr>
                 <td>Depth</td>
                 <td><?php echo  $row['depth'];?> </td>
              </tr>
              
              <tr>
                 <td>Primary Material</td>
                 <td><?php echo  $row['pmaterial'];?> </td>
              </tr>

              <tr>
                 <td>Secondary Material</td>
                 <td><?php echo  $row['smaterial'];?> </td>
              </tr>
              </div>
              </div>
          

</table> 

<?php
                   }
                   ?>  

                   <div>
<button type="button" class="btn btn-secondaryproduct" onclick="goBack()">Back to Table</button>
<div>


</div>
</div>

    <?php include ("./sections/footer.php"); ?>
</div>

       <!--====== jquery js ======-->
    <script src="assets/js/vendor/modernizr-3.6.0.min.js"></script>
    <script src="assets/js/vendor/jquery.js"></script>

    <!--====== Bootstrap js ======-->
    <script src="assets/js/bootstrap.min.js"></script>


    <!--====== Popper Js =====-->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>

    <!--===== Jquery Table Js =====-->
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.js"></script>
   
    <!--==== Bootstrap Table Min Js ====-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-table/1.16.0/bootstrap-table.min.js"></script>

    <!--==== Bootstrap Table  Toolbar Min Js ====-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-table/1.16.0/extensions/toolbar/bootstrap-table-toolbar.min.js" integrity="sha256-qU3K3XqLVpOYRu6OvXcPJiqP2/ZtirdOREUGGvDZNRo=" crossorigin="anonymous"></script>

    <!--====  BootStrap Table Filter Control Min Js ====-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-table/1.16.0/extensions/filter-control/bootstrap-table-filter-control.min.js" integrity="sha256-LiySqypMLWn6xGWsvNvisHGgK/1X2xFw7hTJzs0B3f8=" crossorigin="anonymous"></script>

    <!--====  DataTable Buttons Min Js  ====-->
    <script type="text/javascript" src="https://cdn.datatables.net/buttons/1.3.1/js/dataTables.buttons.min.js"></script> 

    <!--====  Buttons Html5 Min Js   ====-->
    <script type="text/javascript" src="https://cdn.datatables.net/buttons/1.3.1/js/buttons.html5.min.js"></script>


    <!--====== WOW js ======-->
    <script src="assets/js/wow.min.js"></script>

    <!--====== Slick js ======-->
    <script src="assets/js/slick.min.js"></script>

    <!--====== Scrolling Nav js ======-->
    <script src="assets/js/scrolling-nav.js"></script>
    <script src="assets/js/jquery.easing.min.js"></script>

    <!--====== Aos js ======-->
    <script src="assets/js/aos.js"></script>


    <!--====== Main js ======-->
    <script src="assets/js/main.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.js"></script>

    
</body>
</html>



<script>
function goBack() {
window.history.back();
}
</script> 