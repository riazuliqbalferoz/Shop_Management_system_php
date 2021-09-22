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

<center><h2> Due Table</h2>

 <?php
            if (isset($_SESSION['message'])) {
              echo $_SESSION['message'];
              unset($_SESSION['message']);
            
       ?>
       

      <?php } ?>
          
</center>

<?php

require_once('include/conn.php');

$id=$_SESSION['id'];
$phone=$_SESSION['phone'];

$sql="SELECT * FROM due WHERE user_id='$id' and phone='$phone'";
$result=mysqli_query($dbh,$sql);

?>
 <br><br>
<a href="due.php" class="due">Add Due</a>
<br><br><br><br>

  <table>
  <tr>
    
    
    <th>Name</th>
    <th>Description</th>
    <th>Phone</th>

    <th>Date</th>
    <th>Amount</th>
    <th>Action</th>
  
  </tr>

  <tbody>
  
  <?php
   $total = 0;
    while ($ftch = mysqli_fetch_assoc($result)) {

    $total +=$ftch['Amount'];

  ?>
  <tr>
    <td><?=$ftch['name']?></td>
    <td><?=$ftch['description']?></td>
    <td><?=$ftch['phone']?></td>
   
    <td><?=$ftch['date']?></td>
    <td><?=$ftch['Amount']?></td>
    <td>
     <!--  <button type="button" >Unpaid</button> -->
     <a href="due_status.php?id=<?=$ftch['Personid']?>">Unpaid</a>
    </td>

  </tr>
<?php }?>

<tr>
    <td></td>
    <td></td>
    <td></td>
   
    <td>Total</td>
    <td><?=$total?></td>
    <td></td>

  </tr>

</tbody>
</table>


<a href="index.php">Back</a>

</body>
</html>
