
<?php include ("./common/db.php");        ?>

<?php
$selectmodel=null;
?>
<form method="POST" action="">
    <select class="btn" name="dropmenu">
    <option>-select model number-</option>
        <?php
$mysqli = new mysqli("localhost", "root", "", "product");
$sqlSelect = "SELECT modelnum FROM sku";
$result = $mysqli ->query ($sqlSelect); 
while ($row = mysqli_fetch_array($result)) {  
    ?>
            <option value="<?php $row['modelnum']; ?>"><?php echo $row['modelnum']; echo "|"; echo $row['	model_name'];?> </option> 
            <?php   }
             echo "
    </select>
    "; ?>
    <button type="submit" class='btn' name="dropsubmit" value="">Submit</button>
</form>


<form id="set" action="./phpAction/addnewsku.php" method="post" enctype="multipart/form-data">
<?php 
if(isset($_POST['dropsubmit'])){

$selectmodel=$_POST['dropmenu'];
    
      $sql1 ="SELECT * FROM productdetails WHERE model =$selectmodel";
      $result = $conn->query($sql1); 
    while($row = $result->fetch_assoc())
    {
        ?>

    <div class="row">
        <div class="col-md-4 sectioncard">
            <h5>Basic</h5>
            <br />

            <label></label>
            <input class="form-control" type="text" name="model" data-toggle="tooltip" placeholder="Model No." title="Model Number" value="<?php echo $row['model']; ?>" disabled />
            <label></label>
            <input class="form-control" name="sku" data-toggle="tooltip" type="text" placeholder="SKU" title="SKU" value="<?php echo $row['sku']; ?>" />
            <label></label>
            <input class="form-control" id="tooltip" data-toggle="tooltip" name="name" type="text" placeholder="Product Name" title="Product Name" value="<?php echo $row['name'];?>" />
            <label></label>
            <label>Upload Photo:</label>
            <input class="btn btn-danger" name="file" type="file" id="file" value=""/>
        </div>

        <div class="col-md-4 sectioncard">
            <h5>Dimensions</h5>
            <label></label>
            <input class="form-control" name="width" placeholder="Width" type="number" value="<?php echo $row['width'];  ?>" />
            <label></label>
            <input class="form-control" name="radius" placeholder="Radius" type="number" value="<?php echo $row['radius'];?>" />
            <label></label>
            <input class="form-control" name="height" placeholder="Height" type="number" value="<?php echo $row['height']; ?>" />
            <label></label>
            <input class="form-control" name="depth" placeholder="Depth" type="number" value="<?php echo $row['depth'];  ?>" />
        </div>

        <div class="col-md-4 sectioncard">
            <h5>Material</h5>
            <label></label>
            <input class="form-control" name="smaterial" placeholder="Secondary Material" type="text" value="<?php echo $row['smaterial'];  ?>.
            " />
            <label></label>
            <input class="form-control" name="price" placeholder="Pricing" type="number" value="" />
            <label></label>
            <input class="form-control" name="pmaterial" placeholder="Primary Material" type="text" value="" />
        </div>

        <div class="col-md-4 sectioncard">
            <h5>Packaging</h5>
            <label></label>
            <input class="form-control" name="smaterial1" placeholder="Secondary Material" type="text" value="" />
            <label></label>
            <input class="form-control" name="price1" placeholder="Pricing" type="number" value="" />
            <label></label>
            <input class="form-control" name="pmaterial1" placeholder="Primary Material" type="text" value="" />
        </div>
    </div>
    <?php } ?>
    <br />
    <button type="submit" name="submitbutton" class="btn btn-danger">Submit</button>
    <button type="reset" name="" class="btn btn-danger">Reset</button><?php  } ?>
    <br />
    <br />
</form>
