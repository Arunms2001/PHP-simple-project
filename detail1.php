<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit User Details</title>
    <style type="text/css">
        body {
            font-family: 'Arial', sans-serif;
            background-color: lightgreen;
            margin: 0;
            padding: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
        }

        form {
            width: 400px;
            background-color: #fff;
            padding: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
        }

        h1 {
            text-align: center;
            text-decoration: underline;
            color: black;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 15px;
        }

        th, td {
            padding: 10px;
            border-bottom: 1px solid #ddd;
            text-align: left;
        }

        input[type="text"] {
            width: calc(100% - 20px);
            padding: 8px;
            margin-top: 5px;
            margin-bottom: 10px;
            box-sizing: border-box;
        }

        input[type="submit"] {
            background-color: green;
            color: black;
            padding: 10px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            width: 100%;
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
    $hid = $_POST['h'];
    $s = mysqli_query($conn, "select * from registered_users where id='$hid'");
    ?>
    <form method="post" action="detail2.php">
        <h1>EDIT USER DETAILS</h1>
        <table>
            <?php $r = mysqli_fetch_array($s); ?>
            <tr>
                <th>NAME:</th>
                <td><input type="text" name="t1" value="<?php echo $r['name']; ?>" placeholder="Enter your name"></td>
            </tr>
            <tr>
                <th>GENDER:</th>
                <td><input type="text" name="t2" value="<?php echo $r['gender']; ?>" placeholder="Enter your gender"></td>
            </tr>
            <tr>
                <th>E-MAIL:</th>
                <td><input type="text" name="t4" value="<?php echo $r['mail']; ?>" placeholder="Enter your email"></td>
            </tr>
            <tr>
                <th>PHONE NO.:</th>
                <td><input type="text" name="t5" value="<?php echo $r['number']; ?>" placeholder="Enter your contact number"></td>
            </tr>
            <tr>
                <th>PHOTO:</th>
                <td><input type="file" name="t6" value="<?php echo $r['file']; ?>" placeholder="Enter your photo URL"></td>
            </tr>
            <tr>
                <th>USERNAME:</th>
                <td><input type="text" name="t7" value="<?php echo $r['username']; ?>" placeholder="Enter your username"></td>
            </tr>
            <tr>
                <th>PASSWORD:</th>
                <td><input type="text" name="t8" value="<?php echo $r['password']; ?>" placeholder="Enter your password"></td>
            </tr>
            <tr>
                <td colspan="2">
                    <input type="submit" value="SUBMIT">
                    <input type="hidden" name="h" value="<?php echo $r['id']; ?>">
                </td>
            </tr>
        </table>
    </form>
</body>
</html>
