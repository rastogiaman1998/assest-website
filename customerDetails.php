<?php include_once('common/db.php')?>
<!DOCTYPE html>
<html lang="en">
   <head>
      <!--====== Required meta tags ======-->
      <meta charset="utf-8">
      <meta http-equiv="x-ua-compatible" content="ie=edge">
      <meta name="description" content="">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <link rel="stylesheet" href="assets/css/bootstrap.min.css">
      <!--====== Fontawesome css ======-->
      <link rel="stylesheet" href="assets/css/font-awesome.min.css">
      <!--====== Line Icons css ======-->
      <link rel="stylesheet" href="assets/css/LineIcons.css">
      <!--====== Animate css ======-->
      <link rel="stylesheet" href="assets/css/animate.css">
      <!--====== Aos css ======-->
      <link rel="stylesheet" href="assets/css/aos.css">
      <!--====== Slick css ======-->
      <link rel="stylesheet" href="assets/css/slick.css">
      <!--====== Default css ======-->
      <link rel="stylesheet" href="assets/css/default.css">
      <!--====== Style css ======-->
      <link rel="stylesheet" href="assets/css/style.css">
      <!--====== portal css ======-->
      <link rel="stylesheet" href="assets/css/portal.css">
      <!--====== Table css ======-->
      <link rel="stylesheet" href="assets/css/table.css">
   </head>
   <body>
      <div class="container">
         <header id="home" class="header-area pt-100"> 
            <?php include ("./sections/navigation.php"); ?>
         </header>
         <?php
            $id= $_GET['customer_id'];
                      if(isset($_GET['customer_id'])){
                         $id= $_GET['customer_id'];
                         $sql= "select * from customers where customer_id=$id";
                         $result = mysqli_query($conn , $sql);
                         $row = mysqli_fetch_assoc($result);

                         $name= $row['name'];
                         $email = $row['email_id'];
                         $contact = $row['phone_no'];
                         $Home_Address= $row['address'];

                      }
                      

                      if(isset($_GET['customer_id'])){
                        $sql1="select * from customerdetails where customer_id=$id";
                        $result1 = mysqli_query($conn , $sql1);
                        $row = mysqli_fetch_assoc($result1);

                        $shop_location= $row['shop_location'];
                        $notes= $row['notes_for_customer'];
                        $family_members= $row['family_members'];
                        $orders= $row['orders'];

                      }



                  
             ?>
         <div class="row">
            <div class="col-md-12">
               <br>
               <h2 class="alert alert-light"> Customer Details </h2>
               <table  class="table">
                  <tr>
                     <td>Customer Name</td>
                     <td><?php echo $name;?></td>
                     
                  </tr>
                  <tr>
                     <td>Email ID</td>
                     <td><?php echo $email;?></td>
                  </tr>
                  <tr>
                     <td>Contact Number</td>
                     <td><?php echo  $contact; ?> </td>
                  </tr>
                  <tr>
                     <td>Home Address</td>
                     <td><?php echo  $Home_Address;?> </td>
                  </tr>
                  <tr>
                  <tr>
                     <td>Shop Location</td>
                      
                     <td>
                     <?php echo $shop_location;?> 
                     </td>
                  </tr>
                  <tr>
                     <td>Note</td>
                     <td>
                        <?php
                         
                           
                           $note=  $notes;
                           
                           $array=explode(",", $note);
                           
                           
                           showCsvArray($array,$id);
                           
                           
                           function showCsvArray($csvArray,$id){
                              
                           
                           
                           
                            $index=0;
                                    foreach($csvArray as $character){
                                
                                   
                                        
                                      echo " <form action='' method='POST' > 
                                      <input type='hidden' name='customer_id' value='".$id."'>
                                      <input type='hidden' name='note_index' value='".$index."'>
                                      
                                      <button type='submit' name='deletenote' class='btn btn-danger btn-sm' > x </button>
                                      <label>  $character  </label>
                                      </form><br/>";
                                        $index= $index+1;
                                    }
                            
                           }
                           
                           
                           
                           
                           
                           include_once('phpAction/deletenote.php');
                           
                           ?>

                        <div class="collapse" id="addnote">
                        <form action="" method="POST" enctype="multipart/form-data">

                        <textarea type="text" name="notes_for_customer" id="notes_for_customer" class="form-control"></textarea>
                        <br>
                        <button type="submit" class="btn btn-danger btn-sm" name="add" >ADD</button>
                        </form>
                        </div>
                     </td>
                     <td> 
                              <button type= "button" class="btn btn-link btn-sm" data-toggle="collapse" data-target="#addnote" 
                              aria-expanded="false" aria-controls="addnote">
                              <i class="fa fa-plus"></i>
                              </button>
                              
                              
                     </td>
                  </tr>

                  <tr>
                  <td>Family Members</td>
                     
                     
                     <td>
                        
                         
                           
                           

                        <div class="collapse" id="familymembers">
                        <form action="" method="POST" enctype="multipart/form-data">

                        <textarea type="text" name="" id="" class="form-control"></textarea>
                        <br>
                        <button type="submit" class="btn btn-danger btn-sm" name="" >ADD</button>
                        </form>
                        </div>
                     </td>
                     <td> 
                              <button type= "button" class="btn btn-link btn-sm" data-toggle="collapse" data-target="#familymembers" 
                              aria-expanded="false" aria-controls="familymembers">
                              <i class="fa fa-plus"></i>
                              </button>
                              
                              
                     </td>
                  </tr>


                  <td>Orders</td>

               </table>
               
               
               <a href="customers.php"><button type="button" class="btn btn-secondary">Back to List</button></a>
               
               
               <!-- add notes modal--->
              <!-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
               ADD NOTE   -->
             <!--  </button>
               
               <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog" role="document">
                     <div class="modal-content">
                        <div class="modal-header">
                           <h5 class="modal-title" id="exampleModalLabel">Add Notes</h5>
                           <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                           <span aria-hidden="true">&times;</span>
                           </button>
                        </div>
                        <div class="modal-body">
                           <form action="" method="POST" enctype="multipart/form-data">
                              <div class="form-group">
                                 <label>Customer ID: <?php echo $id; ?></label> <input type="hidden" name="id" id="id" class="form-control" >
                              </div>
                              <div class="form-group">
                                 <label>Note</label> <textarea name="notes_for_customer" id="notes_for_customer" class="form-control"></textarea>
                              </div>
                        </div>
                        <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary" name="add">ADD</button>
                        </form>
                        </div>
                     </div>
                  </div>
               </div> 
               
               -->
               <?php include_once('phpAction/addnote.php')?> 
               <!--- add notes modal end----->
               <!-- add more details start-->
               <?php include_once('phpAction/updateCustomerDetails.php')?>
               <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#cdetails">
               UPDATE DETAILS
               </button>
               <!-- Modal -->
               <div class="modal fade" id="cdetails" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog" role="document">
                     <div class="modal-content">
                        <div class="modal-header">
                           <h5 class="modal-title" id="exampleModalLabel">Update Details</h5>
                           <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                           <span aria-hidden="true">&times;</span>
                           </button>
                        </div>
                        <div class="modal-body">
                           <form action="" method="POST" enctype="multipart/form-data">
                              <div class="form-group">
                                 <label>Customer Name</label> <input type="text" name="name" id="name" class="form-control" value="<?php echo $name;?>" >
                              </div>
                              <div class="form-group">
                                 <label>Email ID</label> <input type="text" name="email_id" id="email_id" class="form-control" value="<?php echo $email;?>">
                              </div>
                              <div class="form-group">
                                 <label>Contact Number</label> <input type="text" name="phone_no" id="phone_no" class="form-control" value="<?php echo $contact;?>">
                              </div>
                              <div class="form-group">
                                 <label>Home Address</label> <input type="text" name="address" id="address" class="form-control" value="<?php echo $Home_Address;?>">
                              </div>
                              <div class="form-group">
                                 <label>Shop Location</label> <input type="text" name="shop_location" id="shop_location" class="form-control" value="<?php echo $shop_location;?>">
                              </div>
                        </div>
                        <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit-details" class="btn btn-primary update" name="add-details">UPDATE</button>
                        </form>
                        </div>
                     </div>
                  </div>
               </div>
               <!-- add more details end-->
            </div>
         </div>
         <?php include ("./sections/footer.php"); ?>
      </div>
      <!--====== jquery js ======-->
      <script src="assets/js/vendor/modernizr-3.6.0.min.js"></script>
      <script src="assets/js/vendor/jquery.js"></script>
      <!--====== Bootstrap js ======-->
      <script src="assets/js/bootstrap.min.js"></script>
      <!--====== Popper Js =====-->
      <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
      <!--===== Jquery Table Js =====-->
      <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.js"></script>
      <!--==== Bootstrap Table Min Js ====-->
      <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-table/1.16.0/bootstrap-table.min.js"></script>
      <!--==== Bootstrap Table  Toolbar Min Js ====-->
      <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-table/1.16.0/extensions/toolbar/bootstrap-table-toolbar.min.js" integrity="sha256-qU3K3XqLVpOYRu6OvXcPJiqP2/ZtirdOREUGGvDZNRo=" crossorigin="anonymous"></script>
      <!--====  BootStrap Table Filter Control Min Js ====-->
      <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-table/1.16.0/extensions/filter-control/bootstrap-table-filter-control.min.js" integrity="sha256-LiySqypMLWn6xGWsvNvisHGgK/1X2xFw7hTJzs0B3f8=" crossorigin="anonymous"></script>
      <!--====  DataTable Buttons Min Js  ====-->
      <script type="text/javascript" src="https://cdn.datatables.net/buttons/1.3.1/js/dataTables.buttons.min.js"></script> 
      <!--====  Buttons Html5 Min Js   ====-->
      <script type="text/javascript" src="https://cdn.datatables.net/buttons/1.3.1/js/buttons.html5.min.js"></script>
      <!--====== WOW js ======-->
      <script src="assets/js/wow.min.js"></script>
      <!--====== Slick js ======-->
      <script src="assets/js/slick.min.js"></script>
      <!--====== Scrolling Nav js ======-->
      <script src="assets/js/scrolling-nav.js"></script>
      <script src="assets/js/jquery.easing.min.js"></script>
      <!--====== Aos js ======-->
      <script src="assets/js/aos.js"></script>
      <!--====== Main js ======-->
      <script src="assets/js/main.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.js"></script>
   </body>
</html>
<!--
   <script>
   function goBack() {
   window.history.back();
   }
   </script> -->
<!--
   <script>
   
   $(document).ready(function (){
       $('.update').on('click',function(){
            $('#cdetails').modal('show');
   
             $tr = $(this).closest('tr');
             var data =$tr.children("td").map(function(){
               return $(this).text();
               }).get();
               console.log(data);
   
   $('#name').val(data[0]);
   $('#email_id').val(data[1]);
   $('#phone_no').val(data[2]);
   $('#address').val(data[3]);
   $('#shop_location').val(data[4]);
   
   });
   });
   </script>
   -->