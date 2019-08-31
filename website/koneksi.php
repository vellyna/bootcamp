<?php
$server = "localhost"; 
$user_name = "root";
$password = "";
$database = "arkademy";
$dbconnect = mysqli_connect($server,$user_name,$password,$database) or die("Cant connect to database");
 
?>