<?php include_once('common/db.php')?>

<table id="table_id" class="display">
<thead>
<tr>
<th>Customer ID</th>
<th>Order ID</th>
<th>Status</th>
<th>Delivery Date</th>
<th></th>
<!--<th>Remove</th> -->
</tr>
</thead>
<tbody>

<?php 
               $sql= "select * from orders where customer_id=$id";
               $result = mysqli_query($conn , $sql);
              
               
               while($row = mysqli_fetch_assoc($result)){
                      
                      
                      ?>


<tr>

    <td><?php echo $row['customer_id'];?></td>
    <td><?php echo $row['order_id'];?></td>
    <td><?php echo $row['status'];?></td>
    <td><?php echo $row['delivery_date'];?></td>
    <td>  
    <a  
    data-toggle="modal" data-target="#updateorder" >Update</a> </button></td> 
</tr>
<?php } ?>



</tbody>
</table>


<div class="modal fade" id="updateorder" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form action="" method="POST" enctype="multipart/form-data">
    
    <div class="form-group">
   
            <label>Customer ID</label> <input type="text" name="customer_id" id=" customer_id" class="form-control" value=<?php echo $id; ?> readonly>
         </div>
         <div class="form-group">
            <label>Order ID</label> <input type="text" name="order_id" id=" order_id" class="form-control"  readonly>
         </div>

         <div class="form-group">
            <label>Status</label> <input type="text" name="status" id="status "class="form-control" placeholder="Enter Order Status" >
         </div>           
                    
         <div class="form-group">
            <label>Delivery Date</label> <input type="date" name="delivery_date" id="delivery_date"class="form-control" >
         </div>      
               
        
        


      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary"  data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary" name="submit-updateorder">Save changes</button>
      </div>
      </form>
    </div>
  </div>
</div>

<?php 



    


if(isset($_REQUEST['submit-updateorder'])){
  
  $customer_id =  isset($_POST['customer_id']) ? $_POST['customer_id'] : null;
  $status = isset($_POST['status']) ? $_POST['status'] : null;
  $delivery_date = isset($_POST['delivery_date']) ? $_POST['delivery_date'] : null;
  
  
  $sql1 = "INSERT INTO orders (customer_id, status, delivery_date)
                        VALUES('$customer_id', '$status', '$delivery_date')";
        

  
  $result1 = mysqli_query($conn , $sql1);
  



  if($result1){

    //echo "last id". $conn-> insert_id;
 echo "<meta http-equiv='refresh' content='0'>";
    
   // showAlert("success","Product Registration Successful");
  }
  else{
    
    
   echo "<meta http-equiv='refresh' content='0'>";
   // showAlert("danger","Product Registration Failed");

  }
  


}


?>




