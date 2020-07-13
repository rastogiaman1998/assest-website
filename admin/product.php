<?php include_once("../common/db.php"); ?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <title>Product Details</title>

  <style>

    .card{
      width:300px;
      margin:10px;
      float: left;
    }

    .new-category-card{

      background: #eaeaea;

    }

    .form-row{

      border:1px solid #E0E0E0;
      bordr-radius:2px;
      padding:10px;
      margin:10px;

    }
       
    </style>
  </head>
  <body>

    <div class="container-fluid">

       
         <?php include_once('breadcrumb.php');?>

            <div class="row">
                <div id="product-photo-section" class=" col-md-3">
                 
                  <?php

                        $pid = $_GET['pid'];
                        $model="";
                       

                        $sql = "SELECT * FROM products where pid=$pid";
                        $result = $conn->query($sql);

                        if ($result->num_rows > 0) {
                        // output data of each row
                        while($row = $result->fetch_assoc()) {

                          $model = $row['model'];

                            ?>
                            <div class="card">
                              <div class="card-body">
                                 <img src="https://margshree.in/assets/images/about/about.jpeg" class="card-img-top" alt="...">
                                
                                <h5 class="card-title"><?php echo $row['name'];?></h5>
                                <p class="card-text">USD <?php echo $row['price_usd'];?></p>
                                <p class="card-text">EURO <?php echo $row['price_euro'];?></p>
                               
                                
                              
                              </div>
                          </div>  
                        
                        <?php

                        }
                        } else {
                        echo "0 results";
                        }
                    ?>



                    <?php
                    
                    // List Of Other SKUs of same model | It will make easy to know what other varieties are already available

                   
                    $sql = "SELECT * FROM products where model=$model";
                    $result = $conn->query($sql);

                    echo  ' <h6 class="badge badge-secondary">Available SKUs</h6>';
                    if ($result->num_rows > 0) {
                      
                      echo  ' <ul>';

                      while($row = $result->fetch_assoc()) {
                          echo  '<li><a href="product.php?pid='.$row['pid'].'">'.$row['name'].'</a></li>';
                          
                      }
                      echo  ' </ul>';
                    

                      }

                    else{

                      echo  ' <p>No SKUs Found !</p>  ';
                    
                    }


                    ?>

                </div>

                <div id="product-form-section" class="col-md-9">

                
                <a href="#" id="btnEdit" class="btn btn-danger">Edit Details</a>
                <a  href="#" id="btnPhotoChange" class="btn btn-danger">Change Photo</a>
                <a  href="#" id="btnPhotoChange" class="btn btn-danger">Add SKU</a> 
                <hr/>
              <?php

            $pid = $_GET['pid'];
                       

            $sql = "SELECT * FROM products where pid=$pid";
            $result = $conn->query($sql);


                if ($result->num_rows > 0) {
                        ?>
                     
                       
                      <?php

                        echo "<form> <fieldset id='formFieldset' disabled='disabled'>";
                        while($row = $result->fetch_assoc()) {

                      ?>

                  <h6 class="badge badge-secondary">Basic</h6>
                  <div class="form-row">
                  
                      <div class="form-group col-md-3">
                        <label class="col-form-label" >SKU Number</label>
                        <input type="text"  class="form-control" value="<?php echo $row['skuid'];?>"/>
                      </div>

                      <div class="form-group col-md-3">
                        <label class="col-form-label" >Model Name</label>
                        <input type="text"  class="form-control" value="<?php echo $row['name'];?>"/>
                      </div>

                    </div>


                    <!-- Second for sizing -->

                    <h6 class="badge badge-secondary">Sizing</h6>
                    <div class="form-row">
                  

                        <div class="form-group col-md-3">
                            <label class="col-form-label" >Height</label>
                            <input type="number"  class="form-control" value="<?php echo $row['height'];?>"/>
                          </div>

                          <div class="form-group col-md-3">
                            <label class="col-form-label" >Width</label>
                            <input type="number"  class="form-control" value="<?php echo $row['width'];?>"/>
                          </div>

                          <div class="form-group col-md-3 ">
                            <label class="col-form-label" >Depth</label>
                            <input type="number"  class="form-control" value="<?php echo $row['depth'];?>"/>
                          </div>

                          <div class="form-group col-md-3">
                            <label class="col-form-label" >Weight</label>
                            <input type="number"  class="form-control" value="<?php echo $row['weight'];?>"/>
                          </div>

                      </div>

                      <!-- Second for Material & Color -->
                      <h6 class="badge badge-secondary">Color</h6>
                      <div class="form-row">
                         <div class="form-group col-md-3">
                            <label class="col-form-label" >Primary Color</label>
                            <input type="text"  class="form-control" value="<?php echo $row['color'];?>"/>
                          </div>

                          <div class="form-group col-md-3">
                            <label class="col-form-label" >Secondary Color</label>
                            <input type="text"  class="form-control" value="<?php echo $row['color'];?>"/>
                          </div>
                          
                          <div class="form-group col-md-3">
                            <label class="col-form-label" >Primary Material</label>
                            <input type="text"  class="form-control" value="<?php echo $row['primary_material'];?>"/>
                          </div>

                          <div class="form-group col-md-3">
                            <label class="col-form-label" >Secondary Material</label>
                            <input type="text"  class="form-control"  value="<?php echo $row['secondary_material'];?>"/>
                          </div>
                      </div>

                        
                      <!-- Section for Packaging Options -->
                      <h6 class="badge badge-secondary">Packaging</h6>
                      <div class="form-row">
                         <div class="form-group col-md-6">
                            <label class="col-form-label" >Packaging Outer</label>
                            <input type="text"  class="form-control" value="<?php echo $row['packaging_outer'];?>"/>
                          </div>

                          <div class="form-group col-md-6">
                            <label class="col-form-label" >Packaging Inner</label>
                            <input type="text"  class="form-control" value="<?php echo $row['packaging_inner'];?>"/>
                          </div>
                          
                          
                      </div>


                      <button type="submit" class="btn btn-danger"> Save Changes </button>
                       
                          
                         
                        
                       
                      <?php
                        }
                        echo " </fieldset>
                               </form>";

                        } else {
                        echo "0 results";
                        }
                        ?>

                </div>

            </div>
    </div>




    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
  </body>
</html>

<script>


$(document).ready(function(){
  $("#btnEdit").click(function(){
    $("#formFieldset").prop('disabled', false);
  });

});
</script>


<?php    $conn->close(); ?>