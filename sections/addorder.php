<a   class="btn btn-link"  data-toggle="collapse" data-target="#addorder" 
aria-expanded="false" aria-controls="addorder" style="color:white">
ADD ORDERS
  </a>
<br>

<div class="collapse" id="addorder" >

<div class="card card-body" >

<form action="" method="POST" enctype="multipart/form-data">
    
        <div class="form-group">
                <label>Customer ID</label> <input type="text" name="customer_id" id=" customer_id" class="form-control" value=<?php echo $id; ?> readonly>
             </div>

             <div class="form-group">
                <label>Status</label> <input type="text" name="status" id="status "class="form-control" placeholder="Enter Order Status" >
             </div>           
                        
             <div class="form-group">
                <label>Delivery Date</label> <input type="date" name="delivery_date" id="delivery_date"class="form-control" >
             </div>      
                   
            
            <br>
             <button type="submit" class="btn btn-danger" name="submit-addorder">Submit</button>
</form>

</div>

</div>