<?php require_once('./common/db.php');
require 'vendor/autoload.php';
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
?>

      <header id="home" class="header-area pt-100">
         <?php include ("navigation.php"); ?>
      </header>
      <!doctype html>
      <html lang="en">
         <head>
            <!-- Required meta tags -->
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
            <!-- Bootstrap CSS -->
            <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
            <link rel="stylesheet" href="./assets/css/portal.css">
            <title>Modified</title>
         </head>
         <body>
            <div class ="container">
               <div class="row">
                  <div class=col-3-md>
                  </div>
                  <div class="col-6-md">
                     <h1> Cart Table</h1>
                  </div>
                  <div class="col-3-md">
                  </div>
               </div>
               <!--
                  <table class="table table-striped table-stripped mydatatable" >
                  
                  <th>Id</td>
                  
                  <th>Name</th>
                  <th>Model Number</td>
                  <th> Sku</th>
                  <th>Price</td>
                  -->
               <?php
                  if(isset($_POST['remove']))
                  {
                        foreach($_POST['item_selected'] as $item)
                        {
                    
                         $sql1 ="DELETE FROM detail WHERE id = $item";
                  
                           $result = $conn->query($sql1); 
                           echo "iteam deleted";
                        }
                  }
                  



                  else if (isset($_POST['addtocart'])) {                   
                    
                      $spreadsheet = new Spreadsheet();
                      $sheet = $spreadsheet->getActiveSheet();
                    if($result->num_rows > 0) 
                  {
                  	$htmlString='<table>
                  					<tr>
                  						<td>Model Name</td>
                  						<td>Name</td>
                                          <td>Image</td>
                                          <td> price</td>
                            </tr>';
                            
                      foreach($_POST['item_selected'] as $item)
                      { 
                        $count=1;
                        
                  
                          $sql1 ="SELECT id,image,model,name,pmaterial,sku,price FROM detail WHERE id = $item";
                          $result = $conn->query($sql1); 
                          while($row = $result->fetch_assoc())
                          
                          
                          
                          {
                             
                            $htmlString .= "<tr>";
                            $htmlString .= "<td>".$row['model']."</td>";
                          $htmlString .= "<td>".$row['name']."</td>";
                          //$htmlString .= "<td><img src="data:image/jpeg;base64,'.base64_encode($row['image'] ).'" height="100" width="100" class="img-thumnail" /></td>";
                            $htmlString .= "<td>".$row['price']."</td>"; 
                  
                            $htmlString .= "</tr>";
                  
                           
                    }
                  
                    $htmlString .= '</table>';
                           
                          
                      }
                    }
                          ?>
               </tfoot>
              
               </tfoot>
               </table>
               <?php
                  if (isset($_POST['edit'])) {                 
                  
                  $tab=$_POST['edit'];
                  $sql1 ="SELECT * FROM detail WHERE id =$tab";
                  $result = $conn->query($sql1); 
                  while($row = $result->fetch_assoc())
                  {
                    ?>
               <hr/>
               <div class="card" style="width: 35rem;">
                  <div class="card-body">
                     <h5 class="card-title">Upadte Form</h5>
                     <h6 class="card-subtitle mb-2 text-muted"></h6>
                     <p class="card-text"></p>
                     <form action="update.php" method="POST">
                        Id          :<input type="text" name="id" value="<?php echo $row['id'];?>">
                        Image       :<input type="file" name="file" value= <img src="data:image/jpeg;base64,'.base64_encode(<?php $row['image'] ?>).'" height="200" width="200" class="img-thumnail" /> 
                        Model       :<input type="text" name="md" value="<?php echo $row['model']; ?>">
                        name        :<input type="text" name="nm" value="<?php echo $row['name']; ?>">
                        height      :<input type="text" name="he" value="<?php echo $row['height'];?>">
                        width       :<input type="text" name="wtt" value="<?php echo $row['width'];?>">
                        depht       :<input type="text" name="dtt" value="<?php echo $row['depth'];?>">
                        radius      :<input type="text" name="rd" value="<?php echo $row['radius'];?>">
                        primary Material:<input type="text" name="pm" value="<?php echo $row['pmaterial']; ?>">
                        secondary material:<input type="text" name="sm" value="<?php echo $row['smaterial'];?>">
                        sku         :<input type="text" name="sk" value="<?php echo $row['sku'];?>">
                        price       :<input type="text" name="pr" value="<?php echo $row['price'];?>">
                        <input type="submit" name="submit" value="submit">
                     </form>
                  </div>
               </div>
               <?php
                  }
                      }
                  
                  
                  
                  if(isset($_POST['but1'])){
                  
                      $tab1=$_POST['but1'];
                  $sql1 ="DELETE FROM detail WHERE id =$tab1";
                  $result = $conn->query($sql1); 
                  echo 'item delete';
                  }
                }
                  ?>
            </div>
            <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
            <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
            <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
         </body>
      </html>