<?php
$hostname="localhost";
$username="root";
$password="";
$dbname="demo";
$conn=mysqli_connect($hostname,$username,$password,$dbname);
if (!$conn) {
die("not connected");
}
$s=$_GET['q'];
mysqli_query($conn,"delete from registered_users where id='$s'");
?>
<script type="text/javascript">
alert("Deleted")
window.location.href='det.php';
</script>