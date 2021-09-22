
<?php
session_start();

require_once('include/conn.php');




if (isset($_POST['submit'])) {
     
     $target_dir = "assets/image/";
$target_file = $target_dir . basename($_FILES["image"]["name"]);
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
//Fatch data user form
if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
$cost= $_POST['cost'];
$description= $_POST['description'];
$discount= $_POST['discount'];
$date=date("Y-m-d");
$id=$_SESSION['id'];
$phone=$_SESSION['phone'];


$picture = $target_file;

//function of discount.
$dis=(($cost/100)*$discount);
$amount=$cost-$dis;


     $insert = mysqli_query($dbh,"INSERT INTO `sales`(`user_id`, `phone`,`Amount`, `description`,`date`,`picture`,`cost`,`discount`) VALUES ('$id','$phone','$amount','$description','$date','$picture','$cost','$discount')");


     if ($insert) {
  $message ='Data insert Successfully';
  header('location:today_sales.php');
}


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

    <title class="p-2">Sale Product</title>
  
  </head>
  <body>
  
      <div class="Container text-center p-5 ">
  
      
<?php if (isset($message)) {

 ?>
        <div class="alert alert-primary" role="alert">
           <?=$message?>
       </div>

     <?php }?>
  
        <form  class="bg-info p-5 rounded" action="sales.php" method="post" class="form" enctype="multipart/form-data">

          <h3 class="login-head"><i class="fa fa-lg fa-fw fa-users"></i>POS/COUNTER</h3>
           <div class="message text-danger"></div> 
          <div class="form-group">


            <label class="Text_dark p-2"><h3>Product Cost:</h3></label>
            <input type="text" name="cost" id="" class="form-control" placeholder=" Write in number Formet" autocomplete="off">
         
            <label class="Text_dark p-2"><h3>Prodct Description:</h3></label>
            <input type="text" name="description" id="" class="form-control" placeholder=" Write Your Team Member Status" autocomplete="off">

            <label class="Text_dark p-2">
              <h3>Discount:</h3>
          </label>
            <input type="text" name="discount" id="" class="form-control" placeholder=" Write as 5" autocomplete="off">

          <div class="form-group">
          <label class="Text_dark p-2"><h3> Remarks/Notes/Attachments</h3></label>
            <input type="file" name="image" id="" class="form-control">
          </div>
          <div class="form-group btn-container">
            <button class="btn btn-primary  p-2" type="submit" name="submit" value="submit"><i class="fa fa-sign-in fa-lg fa-fw"></i>Confirm</button>
          </div>

        </form>
        
        </div>


  </body>
</html>
<?php
/*
session_start();
//connect to DB
require_once('include/conn.php');

//Flash Message
$message="";
if(isset($dbh)){
//connection check
if(isset($_POST['submit'])){



$stmt = $dbh->prepare("INSERT INTO `sales`( `cost`, `description`, `discount`, `picture`, `date`, `Amount`) VALUES (:cost,:description,:discount,:image,:date,:amount)");



//bindParam
$stmt->bindParam(':cost', $cost);
$stmt->bindParam(':description', $description);
$stmt->bindParam(':discount', $discount);
$stmt->bindParam(':image', $picture);
$stmt->bindParam(':date', $date);

$stmt->bindParam(':amount', $amount);

//insert File
$target_dir = "assets/image/";
$target_file = $target_dir . basename($_FILES["image"]["name"]);
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
//Fatch data user form
if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {

$cost= $_POST['cost'];
$description= $_POST['description'];
$discount= $_POST['discount'];
$date=date("Y/m/d");
$amount =   $amount;

$picture = $target_file;

//function of discount.
$dis=(($cost/100)*$discount);
$amount=$cost-$dis;


if($stmt->execute()){
  $message="Insert Row Scuccess";
 header("location:sales.php");
}
else{
 $message="Insert Row Fail";

}

}
}
}
*/
?>


