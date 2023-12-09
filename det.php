<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Details</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: lightgreen;
        }

        h1 {
            text-decoration: underline;
            text-decoration-color:red;
            text-align: center;
            color: black;
        }

        table {
            width: 80%;
            margin: 20px auto;
            border-collapse: collapse;
            border:2px;
            background-color:white;
        }

        th, td {
            padding: 12px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        th {
            background-color: green;
            color: white;
        }

        form {
            display: inline-block;
        }

        button {
            padding: 8px;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        button:hover {
            background-color: #45a049;
        }

        a {
            text-decoration: none;
            color: #333;
            margin-left: 10px;
        }

        a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>

<?php
$hostname = "localhost";
$username = "root";
$password = "";
$dbname = "demo";
$conn = mysqli_connect($hostname, $username, $password, $dbname);
if (!$conn) {
    die("not connected");
}

$q = mysqli_query($conn, "select * from registered_users ");
?>

<h1>USER DETAILS</h1>

<table>
    <tr>
        <th>ID</th>
        <th>NAME</th>
        <th>GENDER</th>
        <th>E-Mail</th>
        <th>Contact</th>
        <th>Photo</th>
        <th>USERNAME</th>
        <th>PASSWORD</th>
        <th>Action</th>
    </tr>
    <?php
    $i = 1;
    while ($r = mysqli_fetch_array($q)) {
    ?>
    <tr>
        <td><?php echo $i++;?></td>
        <td><?php echo $r['name'];?></td>
        <td><?php echo $r['gender'];?></td>
        <td><?php echo $r['mail'];?></td>
        <td><?php echo $r['number'];?></td>
        <td><?php echo $r['file'];?></td>
        <td><?php echo $r['username'];?></td>
        <td><?php echo $r['password'];?></td>
        <td>
            <form method="post" action="detail1.php">
                <input type="submit" value="EDIT">
                <input type="hidden" name="h" value="<?php echo $r['id'];?>">
            </form>
            <a href="detail3.php?q=<?php echo $r['id'];?>">Delete</a>
        </td>
    </tr>
    <?php
    }
    ?>
</table>

<center><a href="dashboard.php"><button>BACK</button></a></center>

</body>
</html>
