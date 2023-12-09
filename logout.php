<?php
$hostname="localhost";
$username="root";
$password="";
$dbname="demo";
$conn=mysqli_connect($hostname,$username,$password,$dbname);
if (!$conn)
 {
 die("db is not connected");
 }
session_start();
session_unset();
header("location: login.php");
?>