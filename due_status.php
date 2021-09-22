<?php
session_start();

require_once('include/conn.php');
$id = $_GET['id'];

date_default_timezone_set('Asia/Dhaka');
$date = date("Y-m-d");

$que = mysqli_query($dbh,"SELECT * FROM `due` WHERE `Personid`='$id'");
$ftch = mysqli_fetch_assoc($que);
$description = $ftch['description'];
$picture = $ftch['picture'];
$Amount = $ftch['Amount'];



$insrt = mysqli_query($dbh,"INSERT INTO `sales`(`description`, `picture`, `date`, `Amount`) VALUES ('$description','$picture','$date','$Amount')");

$update = mysqli_query($dbh,"UPDATE `due` SET `status`=1 WHERE `Personid`='$id'");

header('location:today_due.php');

?>