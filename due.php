<?php
session_start();

require_once('include/conn.php');




if (isset($_POST['submit'])) {
     
     $target_dir = "assets/image/";
$target_file = $target_dir . basename($_FILES["image"]["name"]);
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
//Fatch data user form
if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {

$amount= $_POST['cost'];
$description= $_POST['description'];
$name= $_POST['name'];
$phone= $_POST['phone'];
$date=date("Y-m-d");
$picture = $target_file;

$id=$_SESSION['id'];
$phone=$_SESSION['phone'];


     $insert = mysqli_query($dbh,"INSERT INTO `due`(`user_id`, `phone`,`Amount`, `description`, `name`, `consumer_phone`,`date`,`picture`) VALUES ('$id','$phone','$amount','$description','$name','$phone','$date','$picture')");


     if ($insert) {
  $message ='Data insert Successfully';
  $_SESSION['message']="Data Insert Successfully";
  header('location:today_due.php');
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
   

    <title class="p-2">Due</title>
  
  </head>
  <body>
  <div class="Container text-center p-5 ">

     
      
      <div class="Container text-center p-5 ">
  
       
        <form  class="bg-info p-5 rounded" action="due.php" method="post" class="form" enctype="multipart/form-data">

          <h3 class="login-head"><i class="fa fa-lg fa-fw fa-users"></i>Due</h3>
           <div class="message text-danger"></div> 
          <div class="form-group">


            <label class="Text_dark p-2"><h3>Amount</h3></label>
            <input type="text" name="cost" id="" class="form-control" placeholder=" Write in number Formet" autocomplete="off">
         
            <label class="Text_dark p-2"><h3>Prodct Description:</h3></label>
            <input type="text" name="description" id="" class="form-control" placeholder=" Write the product name :" autocomplete="off">

            <label class="Text_dark p-2">
              <h3>Consumer Name:</h3>
          </label>
            <input type="text" name="name" id="" class="form-control" placeholder=" Write the consumer name whom you giving due:" autocomplete="off">

            <label class="Text_dark p-2">
              <h3>Consumer Phone :</h3>
          </label>
            <input type="text" name="phone" id="" class="form-control" placeholder=" consumer Phone Number" autocomplete="off">


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
