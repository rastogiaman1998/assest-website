<?php include_once("../common/db.php"); ?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <title>Product</title>

    <style>

    .card{
      width:300px;
      margin:10px;
      float: left;
    }

    .new-category-card{

      background: #eaeaea;

    }
       
    </style>
  </head>
  <body>

    <div class="container-fluid">

  
       <?php include_once('breadcrumb.php');?>

          <h1> Product Model </h1>

            <div class="row">
                <div class="actionbar col-md-12">
                 
                   <div class="card new-category-card">
                      <div class="card-body">  
                      <h5 class="card-title">Add New</h5>
                          <p class="card-text">Create new product </p>
                          <a href="addProduct.php?pcid=<?php echo $_GET['pcid'] ?>" type="button" class="btn btn-danger">
                      Add New Product
                    </a>
                      </div>
                    </div> 
                 
                 
                 
                  <?php

                        $pcid = $_GET['pcid'];

                        $sql = "SELECT DISTINCT model,name FROM products where pcid=$pcid";
                        $result = $conn->query($sql);

                        if ($result->num_rows > 0) {
                        // output data of each row
                        while($row = $result->fetch_assoc()) {
                            ?>
                            <div class="card">
                           
                              <div class="card-body">
                                 <img src="about.jpeg" class="card-img-top" alt="...">
                                <h5 class="card-title"><?php echo $row['model'];?></h5>
                                <p class="card-text"><?php echo $row['name'];?></p>
                                <a href="sku.php?model=<?php echo $row['model'];?>" class="btn btn-danger">View SKUs</a>
                              
                              </div>
                          </div>  
                        
                        <?php

                        }
                        } else {
                        echo "0 results";
                        }

                          


                        $conn->close();

                    ?>

                          

                </div>

            </div>
    </div>


    <div class="alert">
             <p> Note For Developers : </p>
              <p> 1. Add New Product Form Complete  </p>
              <p>2. Show total number of SKUs for each model</p>
              </div>




    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
  </body>
</html>


