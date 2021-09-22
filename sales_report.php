<?php
require_once('head.php');
?>

      
<div class="p-3">
        <div class="row ">
<div class="col-lg-4">
<blockquote class="blockquote bg-info text-white text-center pt-3 pb-4 px-3 pb-1 rounded "  >

<i class="fa fa-bullseye fa-3x " aria-hidden="true"></i>
<h4 class="font-weight-bold"><a href="today_due.php">Today Due</a></h4>
<p class="text-center">
  Using This page you can add all the produc have you buyed for your shop in this month.                                                 
</p>

</blockquote>    
</div>

<div class="col-lg-4  ">
<blockquote class="blockquote text-white rounded bg-secondary text-center pb-5  pt-3 px-4" >

  <i class="fa fa-3x  fa-eye" aria-hidden="true"></i>
  <h4 class="font-weight-bold "><a class="text-white" href="today_sales.php">Today Sales</a></h4>
     Using this option you can keep record of total sales today<link rel="stylesheet" href="">

      
  </p>
     
</blockquote>    
</div>
<div class="col-lg-4  ">
<blockquote class="blockquote text-white rounded bg-warning text-center pb-5  pt-3 px-4" >

  <i class="fa fa-3x  fa-handshake" aria-hidden="true"></i>
  <h4 class="font-weight-bold "><a class="text-white" href="today_recharge.php">Today Recharge Sell</a></h4>
  <p>
      Customer Satisfaction.
      Human Resource Policy.
      Health &amp;

      
  </p>
     
   </blockquote>    
</div>
</div>
</div>

      
<div class="p-3">
        <div class="row ">
<div class="col-lg-4">
<blockquote class="blockquote bg-info text-white text-center pt-3 pb-4 px-3 pb-1 rounded "  >

<i class="fa fa-bullseye fa-3x " aria-hidden="true"></i>
<h4 class="font-weight-bold"><a href="today_extra.php">Today Extra Expencs</a></h4>
<p class="text-center">
  Using This page you can add all the produc have you buyed for your shop in this month.                                                 
</p>

</blockquote>    
</div>

<div class="col-lg-4  ">
<blockquote class="blockquote text-white rounded bg-secondary text-center pb-5  pt-3 px-4" >

  <i class="fa fa-3x  fa-eye" aria-hidden="true"></i>
  <h4 class="font-weight-bold "><a class="text-white" href="due.php">Cash On Hand</a></h4>
     Using this option you can keep record of total sales today<link rel="stylesheet" href="">

      
  </p>
     
</blockquote>    
</div>
<div class="col-lg-4  ">
<blockquote class="blockquote text-white rounded bg-warning text-center pb-5  pt-3 px-4" >

  <i class="fa fa-3x  fa-handshake" aria-hidden="true"></i>
  <h4 class="font-weight-bold "><a class="text-white" href="total_sales.php">Total Sell</a></h4>
  <p>
      Customer Satisfaction.
      Human Resource Policy.
      Health &amp;

      
  </p>
     
   </blockquote>    
</div>
</div>
</div>

<?php


//connect to DB

$date=date("Y/m/d");
$conn=mysqli_connect("localhost","root","","talikhata");
$total="SELECT SUM(Amount) AS sum FROM `sales` Where date='$date'" ;

$reasult=mysqli_query($conn ,$total);

while($row=mysqli_fetch_assoc($reasult)){

$output="Total Sales Of Today:"."".$row['sum'] ;
}

//for due sales
$total1="SELECT SUM(Amount) AS sum1 FROM `due` Where date='$date'" ;

$reasult=mysqli_query($conn ,$total1);

while($row=mysqli_fetch_assoc($reasult)){

$output1="Total Due Today:"."".$row['sum1'] ;
}

echo $output;

echo $output1;


?>
<?php
require_once('footer.php');
?>
