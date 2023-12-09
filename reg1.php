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
$x1=$_POST['n'];
$x11=$_POST['gender'];
$x6=$_POST['mail'];
$x7=$_POST['p1'];
$x8=$_POST['f1'];
$x9=$_POST['u'];
$x10=$_POST['p2'];
mysqli_query($conn,"insert into registered_users(name,gender,mail,number,file,username,password)values('$x1','$x11','$x6','$x7','$x8','$x9','$x10')");
?>
<script type="text/javascript">
alert("Registered Successfully...")
window.location.href='dashboard.php';
</script>