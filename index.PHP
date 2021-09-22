<?php
require_once('head.php');

?>
      
      <div class="p-3">
          <div class="row ">
<div class="col-lg-4 ">
<blockquote class="px-4 pt-3 pb-5 text-center text-white rounded blockquote bg-secondary" >


<?php

$sql= "SELECT SUM(cash) AS Total FROM cash";
$res=mysqli_query($dbh,$sql);
$count=mysqli_num_rows($res);
$row=mysqli_fetch_assoc($res);
$amount=$row['Total'];

?>


    <i class="fa fa-3x fa-eye" aria-hidden="true"></i>
    <h1 class="font-weight-bold "><a class="text-white" href="cash.php"> <?= $amount;?> </a></h1>
  Cash On Hand<link rel="stylesheet" href="cash.php">

        
    </p>
       
</blockquote>    
</div>

<div class="col-lg-4 ">
<blockquote class="px-4 pt-3 pb-5 text-center text-white rounded blockquote bg-secondary" >
<?php

$sql= "SELECT SUM(Amount) AS Total FROM due WHERE status=0";
$res=mysqli_query($dbh,$sql);
$count=mysqli_num_rows($res);
$row=mysqli_fetch_assoc($res);
$amount=$row['Total'];

?>
    <i class="fa fa-3x fa-eye" aria-hidden="true"></i>
    <h1 class="font-weight-bold "><a class="text-white" href="today_due.php"> <?= $amount;?> </a></h1>
    Due Amount<link rel="stylesheet" href="today_due.php">

        
    </p>
       
</blockquote>    
</div>
<div class="col-lg-4 ">
<blockquote class="px-4 pt-3 pb-5 text-center text-white rounded blockquote bg-secondary" >
<?php

$sql= "SELECT SUM(amount) AS Total FROM buy_product";
$res=mysqli_query($dbh,$sql);
$count=mysqli_num_rows($res);
$row=mysqli_fetch_assoc($res);
$amount=$row['Total'];

?>
    <i class="fa fa-3x fa-eye" aria-hidden="true"></i>
    <h1 class="font-weight-bold "><a class="text-white" href="today_buyproduct.php"> <?= $amount;?> </a></h1>
    Buy Product Amount<link rel="stylesheet" href="today_buyproduct.php">

        
    </p>
       
</blockquote>    
</div>
</div>
</div>


<div class="p-3">
    <div class="row ">


</div>
</div>


      