<?php
include "connect.php";

$name = $_POST['name'];
$email = $_POST['email'];
$nohp = $_POST['nohp'];
$password = $_POST['password'];
$register = mysqli_query($connect , "INSERT INTO `user`(`nama`, `email`, `no_hp`, `password`) VALUES ('$name','$email','$nohp','$password') " );
 if ($register){
     setsession("username",$name);
     setcookie("register","true");
     header("location:home.php");
 }
 else{
     echo "gagal";
 }
?>