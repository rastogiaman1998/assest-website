<a   class="btn btn-link"  data-toggle="collapse" data-target="#collapseExample" 
aria-expanded="false" aria-controls="collapseExample" style="color:white">
ADD CUSTOMERS
  </a>
<br>

<div class="collapse" id="collapseExample" >

<div class="card card-body" >

<form action="phpAction/addCustomerInfo.php" method="POST" enctype="multipart/form-data">
    
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