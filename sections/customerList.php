<?php include_once('common/db.php')?>

<table id="table_id" class="display">
<thead>
<tr>
<th>Customer Name</th>
<th>Email ID</th>
<th>Phone Number</th>
<th>Details</th>
<!--<th>Remove</th> -->
</tr>
</thead>
<tbody>

<?php 
               $sql= "select * from customers";
               $result = mysqli_query($conn , $sql);
                   
               
               while($row = mysqli_fetch_assoc($result)){
                      
                      
                      ?>


<tr>

    <td><?php echo $row['name'];?></td>
    <td><?php echo $row['email_id'];?></td>
    <td><?php echo $row['phone_no'];?></td>
    <td><a  href="customerDetails.php?customer_id=<?=$row['customer_id'];?>"  >Details</a></td>
    <!--<td><a href="phpAction/deleteCustomer.php?customer_id=<?=$row['customer_id'];?>" ><i  class="fa fa-remove" style="font-size:30px;color:red"></i></a></td> -->
</tr>
<?php } ?>



</tbody>
</table>

                  