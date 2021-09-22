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
.ex{
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

<center><h2> Extra Expencess Table</h2></center>

<?php

require_once('include/conn.php');
$sql="SELECT * FROM extra_expencess";
$result=mysqli_query($dbh,$sql);

?>
 <br><br>
<a href="extra.php" class="ex">Add Extra Expencess</a>
<br><br><br><br>
<table>
  <tr>
    
 
    <th>Description</th>
  
    <th>Date</th>
    <th>Amount</th>
  
  </tr>

  <tbody>
  
  <?php
   $total = 0;
    while ($ftch = mysqli_fetch_assoc($result)) {

    $total +=$ftch['amount'];

  ?>
  <tr>
    
    <td><?=$ftch['description']?></td>
    <td><?=$ftch['date']?></td>
    <td><?=$ftch['amount']?></td>

  </tr>
<?php }?>

<tr>
 
    
    <td></td>
   
    <td>Total</td>
    <td><?=$total?></td>

  </tr>

</tbody>
</table>

</body>
</html>
