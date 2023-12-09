<?php
session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body>
<?php
$hostname = "localhost";
$username = "root";
$password = "";
$dbname="demo";
$conn =mysqli_connect($hostname, $username, $password,$dbname);
$u=$_POST["username"];
$p=$_POST["password"];
$q=mysqli_query($conn,"select * from admin where p_user='$u' and p_password='$p'");
if(mysqli_num_rows($q)>=1)
{
   
     $_SESSION['uname']=$u;
     header("location:dashboard.php");
   
   
}

else
{
?>
<script>
alert("invalid username & password")
window.location.href='login.php';
</script>
<?php
}
?>
</body>
</html>