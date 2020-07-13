<?php include_once("../common/db.php");?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="/DataTables/datatables.css">
     <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.css">
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
     
    <title>List </title>
  </head>
  <body>



    <div class="container">
    <?php 
    $customer_id = $_GET['customer_id'];
      $sql1="Select * from customers where customer_id=$customer_id";
      $result1= mysqli_query($conn, $sql1);
      $row = mysqli_fetch_assoc($result1);

      $customer_id= $row['customer_id'];
?>

    <h2>Customer Name: <?php echo $row['name'];?></h2>
    <br>
    
    <table  class="table table-hover ">
    <thead>
    <tr>
    <th>SKU</th>
    <th>Product Name</th>
    <th>Image</th>
    <th>Product Price</th>
    <th>Notes</th>
    <th>Dimension</th>
    <th>Packaging Option</th>
    <th>Quantity</th>
    <th>Total Price</th>
    

    <th></th>
    <th></th>
    </tr>
    </thead>

<?php 


            $orderid = $_GET['orderid'];

           /* $sql = "SELECT * FROM orders where orderid=$orderid";*/
           $sql = "SELECT orders.oeid, orders.pid, products.price_usd , products.skuid, products.name, products.image, products.height, products.width, products.depth,  orders.note , orders.note, orders.quantity from orders INNER JOIN products ON orders.pid= products.pid where orderid=$orderid";
            $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                
              $total_bill=0;
                while($row = $result->fetch_assoc()) {
                ?>
                    <tr>
                        <td><?php echo $row['skuid']; ?> </td>
                        <td><?php  echo $row['name']; ?> </td>
                        <td><?php echo $row['image']; ?> </td>
                        <td><?php echo $row['price_usd'];?></td>
                        <td><?php echo $row['note'];?></td>
                        
                        <td><?php 
                        
                        $height= $row['height'];
                        $width = $row['width'];
                        $depth= $row['depth'];

                        $dimension= $height * $width * $depth;

                        echo $dimension;
                        ?>
                        </td>
                        <td><?php ?></td>

                        <td><?php echo $row['quantity'];?></td>

                        <td><?php
                        
                        $quantity = $row['quantity'];
                        $price= $row['price_usd'];
                        
                        $total_price= $quantity * $price;
                        
                        $total_bill = $total_bill + $total_price;
                        
                        echo $total_price; ?> 
                        
                        
                        </td>
                        
                        <td><button class="btn btn-outline-danger passingID" data-toggle="modal" data-target="#updateorders" data-id="<?php echo $row['oeid'];?>"><i class="fa fa-pencil" style="color:red"></i></button>
                        <a href="deleteorder.php?oeid=<?=$row['oeid'];?> &customer_id=<?php echo $customer_id;?>&orderid=<?php echo $orderid;?>" ><button class="btn btn-outline-danger"><i  class="fa fa-close" style="color:red"></i></button></a></td>
                    </tr>
                   
                    
                
                <?php
                }

                ?>
                
                <td colspan="7"></td>
                <td >Total Bill:</td>
                <td><?php echo $total_bill;?></td>
               <?php

              

            }

            else{


            }

?>
</table>


<br>
<a href="list.php"><button type="button" class="btn btn-danger" >BACK</button></a>

<button type="submit" id="export_excel" name="export_excel" class="btn btn-danger">Download Excel</button>


             
<!-- add button orders---->


<button type="button" class="btn btn-danger" data-toggle="modal" data-target="#addneworder">
Add New Order
</button>

<!--  add order button ends here--->

<!-- update order Modal -->

<div class="modal fade" id="updateorders" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Update Orders</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="" method="post">
        
        
           
                        
        <input type="hidden" class="form-control" name="idkl" id="idkl" value="">              
         
        <label>Quantity</label>
        <input type="number" min="1" name="quant" id="quant" class="form-control" placeholder="Enter Quantity">
        <label>Notes</label>
                        
        <input type="text" name="note" id="note" value="" class="form-control">
        </div>
      <div class="modal-footer">
      <button type="submit" class="btn btn-danger" name="change_quant">save changes</button>
      </div>
      </from>
    </div>
  </div>
</div>
</div>


<!---update order end here-->




<!--add order  Modal -->
<div class="modal fade" id="addneworder" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">ADD New Order</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        
       <form action="" method="post">
      <table id="employee_table">
                     <tr id="row1">
                        <td>
                           <!-- List of product should come from Query -->
                           <select class="custom-select" id="inputGroupSelect01" name="product[]">
                              <option selected>Select Product</option>
                              <?php
                                 $sql1= "SELECT * from products";
                                 $result = mysqli_query($conn , $sql1);
                                 while($row = mysqli_fetch_assoc($result)){
                                 
                                 
                                 echo" <option value=".$row["pid"].">".$row["name"]."</option>";
                                 
                                 
                                 } ?>
                           </select>
                        </td>
                        <td><input type="number" class="form-control" name="quantity[]" min="1" placeholder="Enter Quantity"></td>
                        <td><textarea type="text" class="form-control" name="notes[]" rows="1" placeholder="Enter Note"></textarea></td>
                     </tr>
                  </table>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <input type="submit" id="addorder" class="btn btn-danger" name="submit_row" value="SUBMIT">

      </div>
      </form>
    </div>
  </div>
</div>


<!-- add order modal end here-->
    




    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    <script type="text/javascript" charset="utf8" src="/DataTables/datatables.js"></script>
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.js"></script>
  </body>
</html>


<!-- php for add new order-->
<?php
   if(isset($_POST['submit_row']))
   {
    
    $product=$_POST['product'];
    $quantity=$_POST['quantity'];
    $note=$_POST['notes'];
    
   
   
   
    for($i=0;$i<count($product);$i++)
    {
     if($product[$i]!="" && $quantity[$i]!="")
     {
       $sql = "INSERT INTO orders(orderid,customer_id,pid,quantity,note) VALUES($orderid,$customer_id,'$product[$i]','$quantity[$i]','$note[$i]')";
       
       if ($conn->query($sql) === TRUE) {
          
        echo "<meta http-equiv='refresh' content='0'>";

       } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
       }
     }
    }
   
    
   }
   ?>

   <!-- add new order php ends-->

   
<!-- php for update in order--->
<?php
                            
                            if(isset($_REQUEST['change_quant'])){
                              $oeid= isset($_POST['idkl']) ? $_POST['idkl'] : null;
                              $pid= isset($_POST['pid']) ? $_POST['pid'] : null;
                              $quant =  isset($_POST['quant']) ? $_POST['quant'] : null;
                              $note =  isset($_POST['note']) ? $_POST['note'] : null;

                              $sql2= "UPDATE orders SET
                                                quantity='$quant',
                                                note='$note'
                                                where oeid= '$oeid' ";
                              
                            
                              $result2= mysqli_query($conn, $sql2);
                              if($result2){
                                //echo $sql2;
                                echo "<meta http-equiv='refresh' content='0'>";
                              }            
                              else{
                                //echo $sql2;
                                echo "<meta http-equiv='refresh' content='0'>";
                              }  
                            }
                            
                            
                            ?>

<!-- php changes in order ends here---->



<!-- script to stop from resubmitting-->
<script>
   if ( window.history.replaceState ) {
     window.history.replaceState( null, null, window.location.href );
   }
</script>
<!-- end-->



<!-- script for update orders--->
<script>
$(".passingID").click(function () {
    var ids = $(this).attr('data-id');
    $("#idkl").val( ids );
    $('#myModal').modal('show');
});

</script>
<!-- ends-->

<?php include('deleteorder.php');?>
