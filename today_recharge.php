<?php include('head.php');  ?>
<!DOCTYPE html>
<html>
<head>
</head>
<body>

<center><h2> Recharge Table</h2></center>

<?php
if (isset($_POST['search'])) {
 $search=$_POST['search'];

 
 $sql="SELECT * FROM recharge_sales WHERE date LIKE '%$search%' and user_id='$id',phone='$phone' ";
}




?>

 <br><br>
<a href="recharge.php" class="tn">Add Recharge </a>
<section class="text-center food-search">
<center><form action="" method="POST">
                <input type="search" name="search" placeholder="Search for " required>
                <input type="submit" name="submit" value="Search" class="btn btn-primary">
            </form>
                </center>
</section>
<br><br><br><br>
<table>
  <tr>
    
  <th>Number</th>
    <th>Sim Name</th>
    
    <th>Date</th>
    <th>Amount</th>
  </tr>

  <tbody>
  
  <?php
   $total = 0;
   if (isset($sql)) {
     
$result=mysqli_query($dbh,$sql);

    while ($ftch = mysqli_fetch_assoc($result)) {

 $total +=$ftch['amount'];

  ?>
  <tr>
    
    <td><?=$ftch['number']?></td>
    <td><?=$ftch['sim_name']?></td>
   
    <td><?=$ftch['date']?></td>
    <td><?=$ftch['amount']?></td>

  </tr>
<?php 

} 
}
else 
{
  $id=$_SESSION['id'];
  $phone=$_SESSION['phone'];

  $result=mysqli_query($dbh,"SELECT * FROM `recharge_sales` ");

    while ($ftch = mysqli_fetch_assoc($result)) {

    $total +=$ftch['amount'];
 
    
   

?>

<tr>
    
    <td><?=$ftch['number']?></td>
    <td><?=$ftch['sim_name']?></td>
   
    <td><?=$ftch['date']?></td>
    <td><?=$ftch['amount']?></td>

  </tr>

<?php } }?>

<tr>
    <td></td>
    <td></td>
  
   
    <td>Total</td>
    <td><?=$total?></td>

  </tr>

</tbody>
</table>

</body>
</html>


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
.tn{
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

.food-search input[type="search"]{
    width: 50%;
    padding: 1%;
    font-size: 1rem;
    border: 1px solid black;
    border-radius: 5px;
    
}
tr:nth-child(even) {
  background-color: #dddddd;
}
</style>