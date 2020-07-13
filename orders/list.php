
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <link rel="stylesheet" type="text/css" href="/DataTables/datatables.css">
     <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.css">

    <title>List </title>
  </head>
  <body>



    <div class="container">

    <h1> Order's List</h1>
    <br>
<table id="table_id" class="display">
<thead>
<tr>
<th>OrderID</th>
<th>Customer ID</th>
<th>Customer Name</th>
<th></th>
</tr>
</thead>
<?php include_once("../common/db.php");


 $sql = "SELECT DISTINCT orders.orderid, customers.name, orders.customer_id from orders INNER JOIN customers ON orders.customer_id= customers.customer_id";
            $result = $conn->query($sql);
            
            if ($result->num_rows > 0) {
                
             
                while($row = $result->fetch_assoc()) {
                    
                    $orderid = $row['orderid'];
                ?>
                    <tr>

                        <td><?php echo $row['orderid']; ?></td>
                        <td><?php echo $row['customer_id']; ?> </td>
                        <td><?php echo $row['name']; ?> </td>
                        <td><a href='order.php?customer_id=<?php echo $row['customer_id']; ?>&orderid=<?php echo $row['orderid'];?>'>Orders Detail</a></td>
                        
                        
                    </tr>
                    
                
                <?php
                }

                

            }

            else{


            }

?>
</table>

</div>





    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    <script type="text/javascript" charset="utf8" src="/DataTables/datatables.js"></script>
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.js"></script>

  </body>
</html>

<script>
   $(document).ready( function () {
    $('#table_id').DataTable();
} );
</script>