<?php

require_once('head.php');
require_once('include/conn.php');
// $date=date("Y-m-d");
// 
$date=date("Y-m-d");

    $total_sl = mysqli_query($dbh,"SELECT SUM(Amount) FROM sales WHERE `date`='$date'");
	$ftch_sale = mysqli_fetch_assoc($total_sl);

	$total_rg_sale = mysqli_query($dbh,"SELECT SUM(amount) FROM recharge_sales WHERE `date`='$date'");
	$ftch_rg_sale = mysqli_fetch_assoc($total_rg_sale);

	$total_sale = $ftch_sale['SUM(Amount)'] + $ftch_rg_sale['SUM(amount)'];

	$total_ex = mysqli_query($dbh,"SELECT SUM(Amount) FROM extra_expencess WHERE `date`='$date'");
	$ftch_ex = mysqli_fetch_assoc($total_ex);

	$total_due = mysqli_query($dbh,"SELECT SUM(Amount) FROM due WHERE `date`='$date' AND `status`=0");
	$ftch_due = mysqli_fetch_assoc($total_due);

	$total_expanse = $ftch_ex['SUM(Amount)'] + $ftch_due['SUM(Amount)'];

	$total_cash_withoutDate = $total_sale - $total_expanse; 
if (isset($_POST['submit'])) {
	
	
     
     $check = mysqli_query($dbh,"SELECT * FROM `cash` WHERE `date`='$date'");
     if (mysqli_num_rows($check)>0) {
     	echo "<script>alert('already Data inserted')</script>";
     	
     }else{
     	$insert = mysqli_query($dbh,"INSERT INTO `cash` (`date`,`cash`) VALUES('$date','$total_cash_withoutDate')");

     }

	

}




?>

<?php

    

?>

<br><br><br>
<center>
<div class="col-lg-4 ">
<blockquote class="px-4 pt-3 pb-5 text-center text-white rounded blockquote bg-warning" >

  <i class="fa fa-3x fa-handshake" aria-hidden="true"></i>
  <form method="post">

  
  	<button name="submit" class="btn btn-sm btn-success">submit</button>
  	
  </form>
  <br>
  <h4 class="font-weight-bold "><a class="text-white" href="recharge.php">Total Sell</a></h4>
    
    <?php 

       
       echo $total_cash_withoutDate;

    ?>
     
   </blockquote>    
</div>
</center>



