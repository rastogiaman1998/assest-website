<?php include_once("../common/db.php"); ?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <title>Product Category</title>

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
        <?php include_once("breadcrumb.php");?>
          
          <section>

          <div class="jumbotron jumbotron-fluid">
            <div class="container">
              <h5 class="display-4">Product Categories</h5>
              <p class="lead">Add Your product under correct category only , if it is not there you can create new category</p>
             
            </div>
          </div>

          </section>

            <div class="row">
                <div class="actionbar col-md-12">
                 
                   <div class="card new-category-card">
                      <div class="card-body">  
                      <h5 class="card-title">Add New</h5>
                          <p class="card-text">Create new product category</p>
                      <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#exampleModal">
                      Add New Product Category
                    </button>
                      </div>
                    </div> 
                 
                 
                 
                  <?php

                        $sql = "SELECT * FROM product_categories";
                        $result = $conn->query($sql);

                        if ($result->num_rows > 0) {
                        // output data of each row
                        while($row = $result->fetch_assoc()) {
                            ?>
                            <div class="card">
                           
                              <div class="card-body">
                                <h5 class="card-title"><?php echo $row['name'];?></h5>
                                <p class="card-text"><?php echo $row['description'];?></p>
                                <a href="products.php?pcid=<?php echo $row['pcid'];?>" class="btn btn-danger">See Products</a>
                              </div>
                          </div>  
                        
                        <?php

                        }
                        } else {
                        echo "0 results";
                        }

                          




                    ?>

                          

                </div>

            </div>
    </div>

            <div class="alert">
             <p> Note For Developers </p>
              <p> 1. Edit Category where user should be able to edit category name and description </p>
              <p>2. Show total number of SKUs and Models in each category beside the category name</p>
              </div>




    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
  </body>
</html>


<!-- Modal For Adding New Categoru -->

<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add New Product Category</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
       <form action="categories.php" method="POST">
       <div class="form-group">
          <input type="text" class="form-control" name="category_name" placeholder="Enter Product Category Name"/> 
          </div>

          <div class="form-group">
          <input type="textarea" class="form-control" name="category_description" placeholder="Enter Product Category Description"/>
          </div>
          <button name="submitbtn" type="submit" class="btn btn-danger">Submit</button>
       </form>
      </div>
      
    </div>
  </div>
</div>

<?php

// Create New Form Category

if(isset($_POST['submitbtn'])){

  $name = $_POST['category_name'];
  $description = $_POST['category_description'];

  $sql = "INSERT INTO product_categories (name,description) VALUES ('$name','$description')";

  if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }


}

$conn->close();
?>


<script>
if ( window.history.replaceState ) {
  window.history.replaceState( null, null, window.location.href );
}
</script>
