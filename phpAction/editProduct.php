<section id="contact">
<?php   // Add Code for Editing Product
if (isset($_POST['edit'])) {                 
                  
    $id=$_POST['edit'];
    $sql1 ="SELECT * FROM productdetails WHERE product_id =$id";
    $result = $conn->query($sql1); 
    while($row = $result->fetch_assoc())
    {
      ?>
    
<div class="card" style="width: 45rem;">
                  <div  class="form-group"><center>
                     <h5 class="card-title">UPDATE FORM</h5></center>
                     <h6 class="card-subtitle mb-2 text-muted"></h6>
                     <p class="card-text"></p>
                     <form action="./sections/update.php" method="POST">
                      <label for="id">Id</label><input class="form-control" type="text" name="id" value="<?php echo $row['product_id'];?>"><br>
                      <label for="file">Image</label><input class="form-control" type="file" name="file" value= <img src="data:image/jpeg;base64,'.base64_encode(<?php $row['image'] ?>).'" height="200" width="200" class="img-thumnail" /> <br>
                      <lable for="md">Model</lable><input class="form-control" type="text" name="md" value="<?php echo $row['model']; ?>"><br>
                      <label for="nm"> name </label> <input class="form-control" type="text" name="nm" value="<?php echo $row['name']; ?>"><br>
                      <label for="he">height</label><input class="form-control" type="text" name="he" value="<?php echo $row['height'];?>"><br>
                       <label for="wtt"> width </label><input class="form-control" type="text" name="wtt" value="<?php echo $row['width'];?>"><br>
                       <label for="dtt">depht</label><input class="form-control" type="text" name="dtt" value="<?php echo $row['depth'];?>"><br>
                        <label for="rd">radius</label><input class="form-control" type="text" name="rd" value="<?php echo $row['radius'];?>"><br>
                        <label for="pm">primary Material</label> <input class="form-control" type="text" name="pm" value="<?php echo $row['pmaterial']; ?>"><br>
                       <label for="sm"> secondary material</label> <input class="form-control" type="text" name="sm" value="<?php echo $row['smaterial'];?>"><br>
                       <label for="sk"> sku </label><input class="form-control" type="text" name="sk" value="<?php echo $row['sku'];?>"><br>
                      price  <input class="form-control" type="text" name="pr" value="<?php echo $row['price'];?>"><br>
                                     <input type="submit" name="submit" value="submit">
                     </form>
                  </div>
               </div>

<?php
                    }
                }

?>




