<?php   
session_start();
//connect to DB

    include('login_db.php');  
    
    if (isset($_POST['submit'])) {
    $phone = $_POST['phone'];  
    $password = $_POST['password'];  
      
        //to prevent from mysqli injection  
        $phone = stripcslashes($phone);  
        $password = stripcslashes($password);  
        $phone = mysqli_real_escape_string($con, $phone);  
        $password = mysqli_real_escape_string($con, $password);  
      
        $sql = "select *from login where phone = '$phone' and password = '$password'";  
        $result = mysqli_query($con, $sql);  
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        $count = mysqli_num_rows($result);  
        
        //pass data using session to 


$_SESSION["id"] = $row['user_id'];
$_SESSION["phone"] = $row['phone'];




        if($count>=1){  
           header("Location:index.php");
        }  
        else{  
            echo "<h1> Login failed. Invalid username or password.</h1>";  
        }     
    }

?>  
