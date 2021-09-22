<?php
session_start();

require_once('include/conn.php');




if (isset($_POST['submit'])) {
     
     $target_dir = "assets/image/";
$target_file = $target_dir . basename($_FILES["image"]["name"]);
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
//Fatch data user form
if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {

  //put from data in variable 
$amount= $_POST['amount'];
$description= $_POST['description'];

//put session data in variable
$id=$_SESSION['id'];
$phone=$_SESSION['phone'];

$date=date("Y-m-d");
$picture = $target_file;



     $insert = mysqli_query($dbh,"INSERT INTO `extra_expencess`(`user_id`, `phone`,`amount`, `description`,`date`,`image`) VALUES ('$id','$phone','$amount','$description','$date','$picture')");


     if ($insert) {
  $message ='Data insert Successfully';
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

    <title class="p-2">Extra Expencess</title>
  
  </head>
  <body>
 
      <?php
            if (isset($message)) {
              
            
       ?>
        <div class="alert alert-primary" role="alert">
          <?=$message ?>
        </div>

      <?php } ?>
           
      <div class="Container text-center p-5 ">
  
       
        <form  class="bg-info p-5 rounded" action="extra.php" method="post" class="form" enctype="multipart/form-data">

          <h3 class="login-head"><i class="fa fa-lg fa-fw fa-users"></i>Extra Expencess</h3>
           <div class="message text-danger"></div> 
          <div class="form-group">


            <label class="Text_dark p-2"><h3>Amount</h3></label>
            <input type="text" name="amount" id="" class="form-control" placeholder=" Write in number Formet" autocomplete="off">
         

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
/*
session_start();
//connect to DB
require_once('include/conn.php');

//Flash Message
$message="";
if(isset($dbh)){
//connection check
if(isset($_POST['submit'])){


    $stmt = $dbh->prepare("INSERT INTO `extra_expencess`( `amount`, `description`, `date`, `image`) VALUES (:amount,:description,:date,:image)");


//bindParam
$stmt->bindParam(':amount', $amount);
$stmt->bindParam(':description', $description);
$stmt->bindParam(':image', $image);
$stmt->bindParam(':date', $date);




//insert File
$target_dir = "assets/image/";
$target_file = $target_dir . basename($_FILES["image"]["name"]);
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
//Fatch data user form
if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {

$amount= $_POST['amount'];
$description= $_POST['description'];
$date=date("Y/m/d");
$image = $target_file;

if($stmt->execute()){
  $message="Insert Row Scuccess";
 header("location:extra.php");
}
else{
 $message="Insert Row Fail";

}

}
}
}
*/
?>



