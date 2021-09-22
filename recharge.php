<?php
session_start();

require_once('include/conn.php');




if (isset($_POST['submit'])) {
     
     $amount = $_POST['amount'];
     $number = $_POST['number'];
     $sim_name = $_POST['sim_name'];
     $date = $_POST['date'];

     $id=$_SESSION['id'];
$phone=$_SESSION['phone'];

     $insert = mysqli_query($dbh,"INSERT INTO `recharge_sales`(`amount`, `number`, `sim_name`, `date`,`user_id`, `phone`) VALUES ('$amount','$number','$sim_name','$date','$id','$phone')");


     if ($insert) {
  $message ='Data insert Successfully';
}


}



?>


<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
   
    <!-- Main CSS-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <!-- Font-icon css-->
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <title class="p-2">Recharge Sale</title>
  
  </head>
  <body>
  
      <div class="Container text-center p-5 ">

      <?php
            if (isset($message)) {
              
            
       ?>
        <div class="alert alert-primary" role="alert">
          <?=$message ?>
        </div>

      <?php } ?>
          
       
        <form  class="bg-info p-5 rounded" action="recharge.php" method="post" class="form" >

          <h3 class="login-head"><i class="fa fa-lg fa-fw fa-users"></i>Recharge Sale</h3>
           <div class="message text-danger"></div> 
          <div class="form-group">


            <label class="Text_dark p-2"><h3>Recharge Amount</h3></label>
            <input type="text" name="amount" id="" class="form-control" placeholder=" Write in number Formet" autocomplete="off">

            <label class="Text_dark p-2"><h3>Recharge Number</h3></label>
            <input type="text" name="number" id="" class="form-control" placeholder=" Write in number Formet" autocomplete="off">

          

            <label class="Text_dark p-2">
              <h3>Sim Name</h3>
          </label>
          <select id="cars" class="form-control" name="sim_name">
            <option value="Robi">Robi</option>
            <option value="Grameenphone">Grameenphone</option>
            <option value="Banglalink">Banglalink</option>
            <option value="TeleTalk">TeleTalk</option>
          </select>

          <br>
           <br>

           <input type="date" name="date" id="" class="form-control">
            
<br><br>
            <button class="btn btn-primary  p-2" type="submit" name="submit" value="submit"><i class="fa fa-sign-in fa-lg fa-fw"></i>Confirm</button>
          </div>

        </form>
        
        </div>


  </body>
</html>

<?php
/*session_start();

require_once('include/conn.php');


$message="";
if(isset($dbh)){

if(isset($_POST['submit'])){


    $stmt = $dbh->prepare("INSERT INTO `recharge_sales`( `amount`, `number`, `sim_name`, `date`) VALUES (:amount,:number,:sim_name,:date)");



$stmt->bindParam(':amount', $amount);
$stmt->bindParam(':number', $number);
$stmt->bindParam(':sim_name', $sim_name);
$stmt->bindParam(':date', $date);



$amount= $_POST['amount'];
$number= $_POST['number'];
$sim_name= $_POST['sim_name'];

$date=date("Y/m/d");


if($stmt->execute()){
  $message="Insert Row Scuccess";
 header("location:recharge.php");
}
else{
 $message="Insert Row Fail";

}

}

}*/

?>
