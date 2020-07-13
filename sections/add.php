<div><?php include('getmodel.php'); ?></div>
<?php include ("./common/db.php");        ?>
<?php $prd=null;$modelnum=null;  ?>
<?php
if(isset($_POST['formSubmit'])) 
{
  $prd = $_POST['formCountries'];
 

	  if($prd=='KW'){
      $sql1 ="SELECT * FROM kitchen";
      $result = $conn->query($sql1); 
      while($row = $result->fetch_assoc())
      {
      $modelnum=$row['modelnum'];
   
      }
   }
	  else if($prd=='HD'){
      $sql1 ="SELECT * FROM home";
      $result = $conn->query($sql1); 
      while($row = $result->fetch_assoc())
      {
      $modelnum=$row['modelnum'];
   
      }        
	  }
	    else if($prd=='LT'){
         $sql1 ="SELECT * FROM lighting";
         $result = $conn->query($sql1); 
         while($row = $result->fetch_assoc())
         {
         $modelnum=$row['modelnum'];
      
         } 
		  
	  }
	    else if($prd=='CO'){
         $sql1 ="SELECT * FROM chritmas";
         $result = $conn->query($sql1); 
         while($row = $result->fetch_assoc())
         {
         $modelnum=$row['modelnum'];
      
         } 
	  }
	    else if($prd=='ET'){
         $sql1 ="SELECT * FROM exclusive";
         $result = $conn->query($sql1); 
         while($row = $result->fetch_assoc())
         {
         $modelnum=$row['modelnum'];
      
         } 
	  }
	    else if($prd=='BS'){
         $sql1 ="SELECT * FROM bathroom   ";
         $result = $conn->query($sql1); 
         while($row = $result->fetch_assoc())
         {
         $modelnum=$row['modelnum'];
      
         } 
	  }
	  else{
		  echo "product type is not selected";
     }    
   }
?>
  
<form id="set" action="./phpAction/insert.php" method="post" enctype="multipart/form-data">
   <div class="row">
   <div class="col-md-4 sectioncard">

      <h5> Basic </h5><br>
    
      <label></label>
<input class="form-control" type="text" name="model"  data-toggle="tooltip" placeholder="Model No." title="Model Number"  value="<?php echo $modelnum; ?>" > 
      <label></label>
      <input  class="form-control" name="sku"  data-toggle="tooltip" type="text" placeholder="SKU" title="SKU" value="<?php echo $prd;echo $modelnum; ?>"> 
      <label></label>
      <input class="form-control" id="tooltip" data-toggle="tooltip" name="name" type="text" placeholder="Product Name" title="Product Name"  value="">
     <label></label>
     <label>Upload Photo:</label>
         <input class="btn btn-danger" name="file" type="file"  id="file" >
       

      </div>

      <div class="col-md-4 sectioncard">
      <h5> Dimensions </h5>
         <label></label>
         <input class="form-control" name="width" placeholder="Width" type="number" value="">
         <label></label>
         <input class="form-control" name="radius" Placeholder="Radius" type="number" value="">
         <label></label>
         <input class="form-control" name="height" placeholder="Height" type="number" value=""> 
         <label></label>
         <input class="form-control" name="depth" placeholder="Depth" type="number" value=""> 
      </div>

      <div class="col-md-4 sectioncard">

      <h5> Material </h5>
         <label></label>
         <input class="form-control" name="smaterial" placeholder="Secondary Material" type="text" value="">
         <label></label>
         <input class="form-control" name="price" placeholder="Pricing" type="number" value="">
         <label></label>
         <input class="form-control" name="pmaterial" placeholder="Primary Material" type="text" value=""> 
         
         
      </div>

      <div class="col-md-4 sectioncard">

      <h5> Packaging </h5>
         <label></label>
         <input class="form-control" name="smaterial1" placeholder="Secondary Material" type="text" value="">
         <label></label>
         <input class="form-control" name="price1" placeholder="Pricing" type="number" value="">
         <label></label>
         <input class="form-control" name="pmaterial1" placeholder="Primary Material" type="text" value=""> 
         
         
      </div>
   </div>
   <br/>
   <button type="submit" name="submitbutton" class="btn btn-danger">Submit</button>
   <button type="reset" name="" class="btn btn-danger">Reset</button>
   <br/><br/>

</form>

