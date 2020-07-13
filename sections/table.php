<?php
            include_once ("./common/db.php");
            ?>
                               

<form method="POST" action="./cart.php" enctype="multipart">

                  <div id="toolbar">
                           <button  name="remove" class="btn">Remove</button>
                           <button  name="addtocart" class="btn">View Cart</button> 
                        </div>




  <table class="table table-hover table-bordered mydatatable"
                        id="table"
                        data-toggle="table"
                        data-url=""
                        data-search="true"
                        data-pagination="true"
                        data-search-align="right"                                                               
                        data-pagination-pre-text="Previous"
                        data-pagination-next-text="Next"
                        data-pagination-h-align="right"
                        data-pagination-detail-h-align="left"
                        data-pagination-list="[5,30,40,50,All]"   
                        data-pagination="true"
                        data-show-footer="true"                       
                        data-advance-search="true"
                        data-id-table="advanceTable"                      
                        data-click-to-select="true" 
                        data-checkbox="true"           
                        >
                        <thead>
                           <tr>
                              
                              <th>Select</th>

                              <th data-field="id">Id</th>
                              <th data-field="image">Image</th>
                              <th data-field="name">Name</th>
                              <th data-field="model">Model No</th>
                              <th data-field="height">height</th>
                              <th data-field="width">width</th>
                              <th data-field="depth">Depth</th>
                              <th data-field="">Price</th>
                              <th>Action</th>
                              <!-- <th>depth</th>
                                 <th>sku</th>
                                 <th>price</th>-->
                           </tr>
                        </thead>
                        <tbody>
                           <?php
                              $sql = $conn->query('SELECT * FROM productdetails');
                              while($data = $sql->fetch_array()) {
                                  ?>
                           <tr>
                              <td><input type="checkbox" name="item_selected[]" value="<?php echo $data['product_id'];?>"></td>
                              <td><?php echo $data['product_id'] ?></td>
                              <td><?php echo '<img src="data:image/jpeg;base64,'.base64_encode($data['image'] ).'" height="100" width="100" class="img-thumnail" /> '  ?> </td>
                              <td><a style="align:20px;" href="productDetails.php?id=<?=$data['product_id'];?>"><?php echo $data['name']; ?></a>
                              <td><?php echo $data['model']; ?></td>
                       <!--       <td><?php echo $data['width']; ?></td>-->
                              <td><?php echo $data['height']; ?></td>
                              <td><?php echo $data['depth']; ?></td>
                              <td><?php echo $data['sku']; ?></td>
                              <td><?php echo $data['price'];?></td>  
                                                         
                              <td><button type="submit" name="edit" class="btn1" value="<?php echo $data['product_id'];?>" ><i style="color:green;" class="fa fa-edit"></i></button>
                                 <button type="submit" name="delete" class="btn1" value="<?php echo $data['product_id'];?>" ><i style="color:red;" class="fa fa-trash"></i></button>                            
                           </tr>
                           <?php
                              }
                              ?>
                     
                     </tbody>
                     </table>
                     <script>  
 $(document).ready(function(){  
      $('.mydatatable').DataTable();  
      "search":"True",
      "sort":"True"
 });  
 </script> 