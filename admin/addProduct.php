<?php include_once("../common/db.php"); ?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <title>Add New Product</title>

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

         <h2> Add New Product </h2>

            <div class="row">
                <div id="product-photo-section" class=" col-md-3">
                 
                  <?php
                        // Model number will be available if SKU is created , but if it is a new Model then you need to generate model number
                      //  $model = $_GET['model'];
                        //$sku = "Automatically Generated";
                        //$pcid =$_GET['model']; // Make a query ono model number and get it in case of SKU 
                        
                       ?>
                      
                        <div class="card">
                              <div class="card-body">
                                <img src="https://margshree.in/assets/images/about/about.jpeg" class="card-img-top" alt="...">
                                
                                <h5 class="card-title">Title</h5>
                                <p class="card-text">USD </p>
                                <p class="card-text">EURO </p>
                               
                              </div>
                          </div>  
                        
                </div>

                <div id="product-form-section" class="col-md-9">

                       

           
                  <form> 
                 

                  <h6 class="badge badge-secondary">Automatically Generated</h6>
                  <div class="form-row">

                     <div class="form-group col-md-3">
                                <label class="col-form-label" >Product Category</label>
                                <input type="text"  class="form-control" value="<?php //echo $sku;?>" readonly/>
                            </div>

                        <div class="form-group col-md-3">
                                <label class="col-form-label" >Model Number</label>
                                <input type="text"  class="form-control" value="<?php //echo $model;?>" readonly />
                            </div>
                        
                            <div class="form-group col-md-3">
                                <label class="col-form-label" >SKU Number</label>
                                <input type="text"  class="form-control" value="<?php //echo $sku;?>" readonly/>
                            </div>

                           

                           
                        </div>

                <h6 class="badge badge-secondary">Basic</h6>
                  <div class="form-row">
                         <div class="form-group col-md-3">
                                <label class="col-form-label" >Model Name</label>
                                <input type="text" class="form-control"/>
                            </div>

                            <div class="form-group col-md-3">
                                <label class="col-form-label" >Upload Image</label>
                                <input type="file" class="form-control"/>
                            </div>

                        </div>


                    <!-- Second for sizing -->

                    <h6 class="badge badge-secondary">Dimensions</h6>
                    <div class="form-row">
                  

                        <div class="form-group col-md-3">
                            <label class="col-form-label" >Height</label>
                            <input type="number"  class="form-control" />
                          </div>

                          <div class="form-group col-md-3">
                            <label class="col-form-label" >Width</label>
                            <input type="number"  class="form-control" />
                          </div>

                          <div class="form-group col-md-3 ">
                            <label class="col-form-label" >Depth</label>
                            <input type="number"  class="form-control" />
                          </div>

                          <div class="form-group col-md-3">
                            <label class="col-form-label" >Weight</label>
                            <input type="number"  class="form-control" />
                          </div>

                      </div>

                      <!-- Second for Material & Color -->
                      <h6 class="badge badge-secondary">Color</h6>
                      <div class="form-row">
                         <div class="form-group col-md-3">
                            <label class="col-form-label" >Primary Color</label>
                            <input type="text"  class="form-control" />
                          </div>

                          <div class="form-group col-md-3">
                            <label class="col-form-label" >Secondary Color</label>
                            <input type="text"  class="form-control" />
                          </div>
                          
                          <div class="form-group col-md-3">
                            <label class="col-form-label" >Primary Material</label>
                            <input type="text"  class="form-control" />
                          </div>

                          <div class="form-group col-md-3">
                            <label class="col-form-label" >Secondary Material</label>
                            <input type="text"  class="form-control"  />
                          </div>
                      </div>

                        
                      <!-- Section for Packaging Options -->
                      <h6 class="badge badge-secondary">Packaging</h6>
                      <div class="form-row">
                         <div class="form-group col-md-6">
                            <label class="col-form-label" >Packaging Outer</label>
                            <input type="text"  class="form-control" />
                          </div>

                          <div class="form-group col-md-6">
                            <label class="col-form-label" >Packaging Inner</label>
                            <input type="text"  class="form-control" />
                          </div>
                          
                          
                      </div>


                      <button type="submit" class="btn btn-danger"> Add Product  </button>
                       
                          
                         
                        
                       
                      
                               </form>


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

// Script to avoid resubmission of form
$(document).ready(function(){
  $("#btnEdit").click(function(){
    $("#formFieldset").prop('disabled', false);
  });

});
</script>


<?php  
// Ensure all pages have this closure of connection
$conn->close(); ?>