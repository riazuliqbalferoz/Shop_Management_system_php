<?php
include('include/conn.php');
?>
<?php session_start();  ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>

    <!-- bootstrap -->
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <!-- font awesome -->
   
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css" integrity="sha512-1PKOgIY59xJ8Co8+NE6FZ+LOAZKjy+KY8iq0G4B3CyeY6wYHN3yt9PW0XpSriVlkMXe40PTKnXrLnZ9+fkDaog==" crossorigin="anonymous" />
    <link rel="stylesheet" href="assets/fonts/all.min.css">
    <link rel="stylesheet" href="assets/fonts/all.css">
    <!-- roboto font -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">

    <!-- css -->
    <link rel="stylesheet" href="assets/css/home.css">
    <style>
        html {
        scroll-behavior: smooth;
        }
        .container1{
        background:rgb(182, 180, 180) ;

        }
        .opposity{
            background:rgb(189, 231, 228) ;
        }
        .opposity h3{
            padding-top: 40px;
            padding-left: 50px;
            font-size: 40px; 
        }
        .abut_description h6{
        font-size: 15px;
        }
        .opposity button{
            padding: auto;
            font-size: 20px; 
        }
        /* .row h1{
        color: #29A9A4;
        font-size: 50px;
        padding-bottom: 5px;
        } */
        .row h2{
        color: #C7D6D5;
        font-size: 90px;
        font-weight: bold;
        padding-bottom: 5px;
        }
        .row h5{
        color:black;
        font-size: 20px;
        padding-bottom: 5px;
        }

        footer{
            width: 100%;
        }
    </style>
</head>
<body class="main">
    <!-- navbar -->
    <section class="all-navber">
        <div class="container">
            <div class="px-4 py-1 top-nav row align-items-center ">
                <ul class="mx-auto nav left mx-md-0">
                    <li class="nav-item">
                        <a class="nav-link disabled" href="#"><i class="fas fa-phone-alt"></i> +8802-8410766</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true"><i class="fas fa-envelope"></i> info@yourmail.com</a>
                    </li>
                </ul>

                <ul class="pr-2 ml-auto mr-auto nav right mr-md-0">
                    <li class="nav-item">
                        <a class="px-2 nav-link" href="#"><i class="fab fa-facebook-f rounded-circle"></i></a>
                    </li>
                    <li class="nav-item">
                        <a class="px-2 nav-link" href="#"><i class="fab fa-instagram rounded-circle"></i></a>
                    </li>
                    <li class="nav-item">
                        <a class="px-2 nav-link" href="#"><i class="fab fa-twitter rounded-circle"></i></a>
                    </li>
                    <li class="nav-item">
                        <a class="px-2 nav-link" href="#"><i class="fab fa-linkedin-in rounded-circle"></i></a>
                    </li>
                </ul>
            </div>
        </div>
        

        <div class="bottom-nav bg-light">
            <nav class="container py-3 mb-2 navbar navbar-expand-lg navbar-light bg-light" style="z-index:100">
                <a class="navbar-brand" href="index.html">Manage Your shop More easily</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
    
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="ml-auto navbar-nav ">
                        <li class="nav-item ">
                            <a class="pb-1 nav-link" href="index.php">Home</a>
                        </li>
                        <li class="nav-item active">
                            <a class="pb-1 nav-link" href="today_sales.php">Counter <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="pb-1 nav-link" href="today_recharge.php">Recharge</a>
                        </li>
                        <li class="nav-item">
                            <a class="pb-1 nav-link" href="today_extra.php">Extra</a>
                        </li>
                        <li class="nav-item">
                            <a class="pb-1 nav-link" href="today_due.php">Due</a>
                        </li>
                       
                        <li class="nav-item">
                            <a class="pb-1 nav-link" href="total_sales.php">Today Sales</a>
                        </li>

                          <li class="nav-item">
                            <a class="pb-1 nav-link" href="today_buyproduct.php">Buy Product</a>
                        </li>

                        </li>

<li class="nav-item">
  <a class="pb-1 nav-link" href="logout.php">Logout</a>
</li>

                        <li class="mx-3 nav-item">
                           
                        </li>
                      
                    </ul>
                </div>
            </nav>
        </div>
       

        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-lg">
                <div class="bg-transparent border-0 modal-content">
                    <div class="mx-4 mb-2 border-0 modal-header">
                        <button type="button" class="close text-light" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="mx-4 my-5 modal-body">
                         <form class="my-2 my-lg-0">
                            <input class="p-4 text-white bg-transparent form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </section>
    <!-- nav finish ///////////////-->

    <?php

$id=$_SESSION['id'];
$phone=$_SESSION['phone'];


$sql= "SELECT * FROM add_user where phone='$phone' and user_id='$id' ";
$res=mysqli_query($dbh,$sql);
$count=mysqli_num_rows($res);
$row=mysqli_fetch_assoc($res);




?>



    <div class="container">
        
        <div class="container1 bg-warning">
                <div class="row">
                <div class="pt-5 pb-4 text-center col-lg-12">
                    <h1>Welcome To <?php echo $row['shop_name'] ?></h1>
                 
                </div>              
            </div>
        </div>
 
    