<?php

include ('home_header.html');


require_once('include/conn.php');

if (isset($_POST['submit'])) {
    
$name= $_POST['name'];
$shop_name= $_POST['shop_name'];
$password= $_POST['password'];
$phone= $_POST['phone'];
$address=$_POST['address'];
$status="Shop";

     $insert = mysqli_query($dbh,"INSERT INTO `add_user`(`name`,`password`, `address`,`phone`,`shop_name`,`status`) VALUES ('$name','$password','$address','$phone','$shop_name' ,'$status')");



     if ($insert==true) {
  $message ='Data insert Successfully';

}



  $login = mysqli_query($dbh,"INSERT INTO `login`(`phone`,`password`,`status`) VALUES ('$phone','$password','$status')");


if ($login) {
  $message ='Data insert Successfully';
  header("Location:Login.php");
 
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

    <title class="p-2">Add Customar</title>
  
  </head>
  <body>
  
      <div class="Container text-center p-5 ">
  
      
    
           
        <form  class="bg-info p-5 rounded" action="add_user.php" method="post" class="form" enctype="multipart/form-data">

          <h3 class="login-head"><i class="fa fa-lg fa-fw fa-users"></i>Create Account</h3>
           <div class="message text-danger"></div> 
          <div class="form-group">


            <label class="Text_dark p-2"><h3>Your Name</h3></label>
            <input type="text" name="name" id="" class="form-control" placeholder=" Write in number Formet" autocomplete="off">
         

            <label class="Text_dark p-2"><h3>Contact Number</h3></label>
            <input type="text" name="phone" id="" class="form-control" placeholder=" Write the product name :" autocomplete="off">

            <label class="Text_dark p-2">
              <h3>Customar Address</h3>
          </label>
            <input type="text" name="address" id="" class="form-control" placeholder=" Write the consumer name whom you giving due:" autocomplete="off">


            
            <label class="Text_dark p-2">
              <h3>Password</h3>
          </label>
            <input type="password" name="password" id="" class="form-control" placeholder=" Enter Your Password" autocomplete="off">
          

            <label class="Text_dark p-2">
              <h3>Shop Name</h3>
          </label>
            <input type="text" name="shop_name" id="" class="form-control" placeholder=" Write the consumer name whom you giving due:" autocomplete="off">

          <div class="form-group btn-container">
            <button class="btn btn-primary  p-2" type="submit" name="submit" value="submit"><i class="fa fa-sign-in fa-lg fa-fw"></i>Confirm</button>
          </div>

        </form>
        
        </div>


  </body>
</html>
