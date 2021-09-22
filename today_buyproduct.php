<?php include('head.php'); ?>



<!DOCTYPE html>
<html>
<head>
<style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}
.due{
  border: 0;
  background: none;
  
  
 
  border: 2px solid #2ecc71;
  padding: 14px 40px;
 
  border-radius: 24px;
  
  cursor: pointer;
  color: #2ecc71;
  text-decoration: none;
  font-size: 20px;
}
tr:nth-child(even) {
  background-color: #dddddd;
}
</style>
</head>
<body>

<center><h2> Buy Product</h2>

 <?php
            if (isset($_SESSION['message'])) {
              echo $_SESSION['message'];
              unset($_SESSION['message']);
            
       ?>
       

      <?php } ?>
          
</center>

<?php


$sql="SELECT * FROM buy_product";
$result=mysqli_query($dbh,$sql);

?>
 <br><br>
<a href="buyproduct.php" class="due">Add Buy Product</a>
<br><br><br><br>

  <table>
  <tr>
    
    
    <th>Shope Name</th>
    <th>Description</th>
    <th>Phone</th>

    <th>Address</th>
    <th>Amount</th>
    
  
  </tr>

  <tbody>
  
  <?php
   $total = 0;
    while ($ftch = mysqli_fetch_assoc($result)) {

    $total +=$ftch['amount'];

  ?>
  <tr>
    <td><?=$ftch['shopname']?></td>
    <td><?=$ftch['description']?></td>
    <td><?=$ftch['phone']?></td>
   
    <td><?=$ftch['address']?></td>
    <td><?=$ftch['amount']?></td>
    

  </tr>
<?php }?>

<tr>
    <td></td>
    <td></td>
    <td></td>
   
    <td>Total</td>
    <td><?=$total?></td>
    

  </tr>

</tbody>
</table>


<a href="index.php">Back</a>

</body>
</html>
