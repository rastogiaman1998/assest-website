<?php include ("./common/db.php"); ?>

<!DOCTYPE html>
<html lang="en">
   <head>
      <!--====== Required meta tags ======-->
      <meta charset="utf-8">
      <meta http-equiv="x-ua-compatible" content="ie=edge">
      <meta name="description" content="">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <!--====== Title ======-->
      <title>Margshree - Glass Handicraft </title>
      <!--====== Favicon Icon ======-->
      <link rel="shortcut icon" href="assets/images/favicon.png" type="image/png">
      <!--====== Bootstrap css ======-->
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
         <!--====== HEADER PART START ======-->
         <header id="home" class="header-area pt-100">
            <?php include ("./sections/header-shapes.php"); ?>  
            <?php include ("./sections/navigation.php"); ?>
            <h3 class="alert alert-light"> Your Selections </h3>
         </header>
         <!--====== HEADER PART ENDS ======-->

        <!-- Deleting record -->
         <?php
          if (isset($_POST['delete'])){
          include("./phpAction/deleteProduct.php"); 
          }
          ?> 
          `
       <!-- Edit record -->     
       
         <?php 
         if (isset($_POST['edit'])){
         include ("./phpAction/editProduct.php"); 
         }
         ?>

         <section id="products" >
        <div class="row cardbox">
            <div class="col-md-12">
         <!-- Cart View -->
            <?php 
            if (isset($_POST['addtocart'])){
            include ("./phpAction/export.php");
            }
            ?>  
            
            </div>
        </div>
      
        </section>
      
      
         
      </div>
      <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
   </body>
</html>

