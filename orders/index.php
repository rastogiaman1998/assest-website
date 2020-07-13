<?php include_once("../common/db.php"); ?>
<!doctype html>
<html lang="en">
   <head>
      <!-- Required meta tags -->
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <!-- Bootstrap CSS -->
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
      <title>Create </title>
   </head>
   <body>
      <div class="container-fluid">
         <h1> Create Order</h1>
         <form action="index.php" method="POST">
            <h6 class="badge badge-secondary">Basic</h6>
            <div class="form-row">
               <div class="form-group col-md-3">
                  <label class="col-form-label" >Select Customer</label>
                  <select class="custom-select" id="inputGroupSelect01" name="customer_id">
                     <option selected>choose...</option>
                     <?php 
                        $sql1= "SELECT * from customers";
                        $result = mysqli_query($conn , $sql1);
                        while($row = mysqli_fetch_assoc($result)){
                        
                        
                        echo" <option value=".$row["customer_id"].">".$row["name"]."</option>";
                        
                        
                         } ?>
                  </select>
               </div>
               <div class="col-md-3">
                  <button type="button" class="btn btn-outline-danger" style="margin-top:35px" data-toggle="modal" data-target="#addcustomer"> ADD CUSTOMER</button>
               </div>
            </div>
            <div class="form-row">
               <div class="form-group col-md-12">
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
            </div>
            <div class="form-row">
               <div class="form-group col-md-3">
                  <input type="button" class="btn btn-danger" onclick="add_row();" value="ADD ROW">
                  <input type="submit" id="addorder" class="btn btn-danger" name="submit_row" value="SUBMIT">
                  <a href="list.php" ><button type="button" class="btn btn-danger">Order List</button></a>
               </div>
            </div>
         </form>
      </div>
      <!-- modal for add customer-->
      <div class="modal fade" id="addcustomer" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
         <div class="modal-dialog" role="document">
            <div class="modal-content">
               <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Add New Customer</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                  </button>
               </div>
               <div class="modal-body">
                  <form action="addCustomer.php" method="POST" enctype="multipart/form-data">
                     <div class="form-group">
                        <label>Customer Name</label> <input type="text" name="name" id=" name"class="form-control" placeholder="Enter Customer name" >
                     </div>
                     <div class="form-group">
                        <label>Email ID</label> <input type="text" name="email_id" id="email_id"class="form-control" placeholder="Enter Email ID" >
                     </div>
                     <div class="form-group">
                        <label>Business Name</label> <input type="text" name="business_name" id="business_name"class="form-control" placeholder="Enter customer Business name">
                     </div>
                     <div class="form-group">
                        <label>Address</label> <input type="text" name="address" id="address"class="form-control" placeholder="Enter customer Name">
                     </div>
                     <div class="form-group">
                        <label>Phone no</label> <input type="text" name="phone_no" id="phone_no"class="form-control" placeholder="Enter customer Phone No.">
                     </div>
                     <br>
                     <button type="submit" class="btn btn-danger" name="submit-customerRecord">Submit</button>
                  </form>
               </div>
            </div>
         </div>
         <!-- modal ends here-->
      </div>
      <!-- Optional JavaScript -->
      <!-- jQuery first, then Popper.js, then Bootstrap JS -->
      <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
   </body>
</html>


<script type="text/javascript">
   function add_row()
   {
   $rowno=$("#employee_table tr").length;
   $rowno=$rowno+1;
   $("#employee_table tr:last").after(
     "<tr id='row"+$rowno+"'><td> <select class='custom-select' id='inputGroupSelect01' name='product[]'><option selected>Select Product</option><?php 
      $sql3= 'SELECT * from products';
      $result = mysqli_query($conn , $sql3);
      while($row = mysqli_fetch_assoc($result)){                                     
      ?><option value='<?php echo $row['pid'];?>'><?php echo $row['name'];?></option><?php } ?></select></td><td><input type='text' class='form-control' name='quantity[]' placeholder='Enter Quantity'></td><td><textarea rows='1' class='form-control' name='notes[]' placeholder='Enter Note'></textarea></td><td><input type='button' class='btn btn-danger' value='DELETE' onclick=delete_row('row"+$rowno+"')></td></tr>");
   }
   
   
   function delete_row(rowno)
   {
   $('#'+rowno).remove();
   }
</script>


<?php
   if(isset($_POST['submit_row']))
   {
    
    $product=$_POST['product'];
    $quantity=$_POST['quantity'];
    $note=$_POST['notes'];
    
   
    $query = "select MAX(orderid) as maxorderid from orders";
    $result = $conn->query($query);
   
                   
    
     $row = $result->fetch_assoc();
     $orderid = $row['maxorderid']+1;
   
      
     
   echo $orderid;
   
   
    $customer_id=$_POST['customer_id'];
   
    for($i=0;$i<count($product);$i++)
    {
     if($product[$i]!="" && $quantity[$i]!="")
     {
       $sql = "INSERT INTO orders(orderid,customer_id,pid,quantity,note) VALUES($orderid,$customer_id,'$product[$i]','$quantity[$i]','$note[$i]')";
       
       if ($conn->query($sql) === TRUE) {
          echo "New order created successfully";
       } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
       }
     }
    }
   
    
   }
   ?>

   
<script>
   if ( window.history.replaceState ) {
     window.history.replaceState( null, null, window.location.href );
   }
</script>