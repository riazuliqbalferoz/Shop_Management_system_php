<?php
session_start();
require_once('include/conn.php');


if (isset($_POST['submit'])) {
  
$target_dir = "assets/image/";
$target_file = $target_dir . basename($_FILES["image"]["name"]);
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
  $shopname = $_POST['shopname'];
  $phone = $_POST['phone'];
  $amount = $_POST['amount'];
  $address = $_POST['address'];
  $status = $_POST['status'];
  $description = $_POST['description'];
  $picture=$target_file;

  $id=$_SESSION['id'];
$phone=$_SESSION['phone'];


  $insert = mysqli_query($dbh,"INSERT INTO `buy_product` (`shopname`,`number`,`amount`,`status`,`address`,`description`,`image`,`user_id`, `phone`) VALUES('$shopname','$phone','$amount','$status','$address','$description','$picture','$id','$phone')");

  if ($insert) {
    $message = 'data inserted';
  }else{
    $message = "not inserted";
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

    <title class="p-2">Buy Product</title>
  
  </head>
  <body>

<?php if (isset($message)) {

 ?>
        <div class="alert alert-primary" role="alert">
           <?=$message?>
       </div>

     <?php }?>
  
      <div class="Container text-center p-5 ">
  
       
        <form  class="bg-info p-5 rounded" action="buyproduct.php" method="post" class="form" enctype="multipart/form-data">

          <h3 class="login-head"><i class="fa fa-lg fa-fw fa-users"></i>Buy Product</h3>
           <div class="message text-danger"></div> 
          <div class="form-group">


            <label class="Text_dark p-2"><h3>Shop Name</h3></label>
            <input type="text" name="shopname" id="" class="form-control" placeholder=" Write in number Formet" autocomplete="off">
         
            <label class="Text_dark p-2"><h3>Phone Number</h3></label>
            <input type="text" name="phone" id="" class="form-control" placeholder=" Write the product name :" autocomplete="off">

            <label class="Text_dark p-2"><h3>Amount</h3></label>
            <input type="text" name="amount" id="" class="form-control" placeholder=" Write in number Formet" autocomplete="off">
            
            <label class="Text_dark p-2"><h3>Address</h3></label>
            <input type="text" name="address" id="" class="form-control" placeholder=" Write in number Formet" autocomplete="off">
            
            <label class="Text_dark p-2"><h3>Status</h3></label>
            <input type="text" name="status" id="" class="form-control" placeholder=" Write in number Formet" autocomplete="off">
         
            <label class="Text_dark p-2">
              <h3>Description</h3>
          </label>
            <input type="text" name="description" id="" class="form-control" placeholder=" Write the consumer name whom you giving due:" autocomplete="off">

          <div class="form-group">
          <label class="Text_dark p-2"><h3> Add Picture</h3></label>
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
// session_start();
//connect to DB
/*require_once('include/conn.php');


$message="";
if(isset($dbh)){

if(isset($_POST['submit'])){


    $stmt = $dbh->prepare("INSERT INTO `buy_product`( `shopname`, `phone`, `amount`, `status`, `address`,`description`, `image`) VALUES (:shopname,:phone,:amount,:status,:address,:description,:image)");

if ($stmt) {
  $message = "inserted";
}else{
  $message = "not inserted";
}

$stmt->bindParam(':shopname', $shopname);
$stmt->bindParam(':phone', $phone);
$stmt->bindParam(':amount', $amount);
$stmt->bindParam(':status', $status);
$stmt->bindParam(':address', $address);
$stmt->bindParam(':description', $description);
$stmt->bindParam(':image', $image);






$target_dir = "assets/image/";
$target_file = $target_dir . basename($_FILES["image"]["name"]);
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {

$shopname= $_POST['shopname'];
$amount= $_POST['amount'];
$status= $_POST['status'];
$address= $_POST['address'];
$description= $_POST['description'];
$phone= $_POST['phone'];
$image = $target_file;

if($stmt->execute()){
  $message="Insert Row Scuccess";
 header("location:buyproduct.php");
}
else{
 $message="Insert Row Fail";

}

}
}
}*/

?>


