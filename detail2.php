<?php
$hostname="localhost";
$username="root";
$password="";
$dbname="demo";
$conn=mysqli_connect($hostname,$username,$password,$dbname);
if (!$conn) {
die("not connected");
}
$a=$_POST['t1'];
$b=$_POST['t2'];
$c=$_POST['t4'];
$d=$_POST['t5'];
$e=$_POST['t6'];
$f=$_POST['t7'];
$g=$_POST['t8'];
$hid=$_POST['h'];
mysqli_query($conn,"update registered_users set name='$a',gender='$b',mail='$c',number='$d',file='$e',username='$f',password='$g' where id='$hid'");
?>
<script type="text/javascript">
alert("updated")
window.location.href='det.php'
</script>