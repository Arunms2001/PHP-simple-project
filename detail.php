<!DOCTYPE html>
<html>
<head>
    <style type="text/css">
        h1 {
            text-decoration: underline;
            text-decoration-color: red;
        }
    </style>
</head>
<body bgcolor="lightgreen">
    <?php
    $hostname = "localhost";
    $username = "root";
    $password = "";
    $dbname = "demo";
    $conn = mysqli_connect($hostname, $username, $password, $dbname);
    if (!$conn) {
        die("not connected");
    }
    $q = mysqli_query($conn, "select * from registered_users");
    ?>
    <h1 align="center">DETAILS</h1>
    <br>
    <table align="center" cellpadding="12px" bgcolor="lightgreen">
        <tr bgcolor="green">
            <th>ID</th>
            <th>NAME</th>
            <th>GENDER</th>
            <th>E-Mail</th>
            <th>PHONE NO.</th>
            <th>PHOTO</th>
            <th>USERNAME</th>
            <th>PASSWORD</th>
            <th>Action</th>
        </tr>
        <?php
        while ($r = mysqli_fetch_array($q)) {
        ?>
            <tr>
                <td><?php echo $r['id']; ?></td>
                <td><?php echo $r['name']; ?></td>
                <td><?php echo $r['gender']; ?></td>
                <td><?php echo $r['mail']; ?></td>
                <td><?php echo $r['number']; ?></td>
                <td><?php echo $r['file']; ?></td>
                <td><?php echo $r['username']; ?></td>
                <td><?php echo $r['password']; ?></td>
                <td>
                <form method="post" action="detail2.php">
            <input type="submit" name="" value="EDIT">
            <input type="hidden" name="h" value="<?php echo $r['id']; ?>">
            <a href="detail3.php?q=<?php echo $r['id']; ?>">Delete</a>
        </form>
                </td>
            </tr>
        <?php
        }
        ?>
    </table>
    <a href="dashboard.php"><button>BACK</button></a>

</body>
</html>
