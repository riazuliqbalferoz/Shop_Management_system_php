<?php
include ('home_header.html');
?>

<link href="login.css" rel="stylesheet" >
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<div class="wrapper fadeInDown">
  <div id="formContent">
    <!-- Tabs Titles -->

    <!-- Icon -->
    <div class="fadeIn first p-2">
    
    <h3>User Login</h3>
    </div>

    <!-- Login Form -->
    <form action="login_check.php" method="post" class="form" enctype="multipart/form-data">
      
    <input type="text" id="phone"  class="form-control"  name="phone" placeholder="ENTER YOUR PHONE NUMBER">
     
      <input type="text" class="form-control"  name="password" placeholder="ENTER YOUR PASSWORD">

      <input type="submit" name="submit"  class="fadeIn fourth" value="Log In">
    </form>

    <!-- Remind Passowrd -->
    <div id="formFooter">
      <a class="underlineHover" href="#">Forgot Password?</a>
      <a class="underlineHover" href="add_user.php">Create Account</a>
    </div>

  </div>
</div>


