<table class="table table-stripped">
<thead>
<tr>
<th>Name</th>
<th>Address</th>
<th>Order Details</th>
</tr>
</thead>
<tr>
<?php
                
                $sql="select * from customers";
                $result = mysqli_query($conn , $sql);
               

                while($row=$result->fetch_assoc()){
                      
                      ?>

<tbody>

<td><?php echo $row['name'];?></td>
<td><?php echo $row['address']; ?></td>
<td><a href="orderdetails.php?customer_id=<?=$row['customer_id'];?>">details </a></td>


<?php } ?>
</tr>
</tbody>



</table>