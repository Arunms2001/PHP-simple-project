<!DOCTYPE html>
<html>

<head>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background: linear-gradient(to bottom, #b3ffd2, #66ff66);
        }

        #div {
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            background-color: #ffffff;
            padding: 30px;
            width: 600px;
            margin: 90px auto;
            border-radius: 10px;
        }

        #head {
            text-decoration: underline;
            text-decoration-color: green;
            color: darkred;
        }

        label {
            font-weight: bold;
            color: #333;
        }

        input[type="text"],
        input[type="password"],
        input[type="email"],
        select {
            width: 100%;
            padding: 10px;
            margin: 8px 0;
            display: inline-block;
            border: 1px solid #ccc;
            box-sizing: border-box;
            border-radius: 5px;
        }

        input[type="submit"] {
            background-color: #4CAF50;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #45a049;
        }

        a {
            color: #333;
            text-decoration: none;
        }
    </style>

    <script type="text/javascript">
        function my() {
            var x1 = document.getElementById('n1').value;
            var x2 = document.getElementById('gen').value;
            var x3 = document.getElementById('d1').value;
            var x4 = document.getElementById('p11').value;
            var x5 = document.getElementById('f11').value;
            var x6 = document.getElementById('u1').value;
            var x7 = document.getElementById('p22').value;

            if (x1 == "") {
                alert("Please enter the name");
                return false;
            }
            if (x2 == "") {
                alert("Please select gender");
                return false;
            }
            if (x3 == "") {
                alert("Please select DOB");
                return false;
            }
            if (x4 == "") {
                alert("Please enter Phone number");
                return false;
            }
            if (x5 == "") {
                alert("Please select File");
                return false;
            }
            if (x6 == "") {
                alert("Please enter Username");
                return false;
            }
            if (x7 == "") {
                alert("Please enter Password");
                return false;
            } else {
                alert("Success");
                return true;
            }
        }
    </script>
</head>

<body>
    <center>
        <div id="div">
            <h1 id="head" align="center">REGISTRATION FORM</h1>
            <div align="center">
                <center>
                    <form method="post" action="reg1.php" onsubmit="return my()">
                        <table cellpadding="4px" align="center">
                            <tr>
                                <th><label>FULL Name:</label></th>
                                <td><input type="text" name="n" id="n1" placeholder="Enter the name here..."></td>
                            </tr>
                            <tr>
                                <th>&nbsp;
                                    <label>Gender:</label></th>
                                <td>
                                    <select name="gender" id="gen">
                                        <option></option>
                                        <option value="Male">Male</option>
                                        <option value="Female">Female</option>
                                        <option value="Others">Other</option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <th><label>E-Mail:</label></th>
                                <td>
                                    <input type="email" name="mail" id="d1">
                                </td>
                            </tr>
                            <tr>
                                <th>Phone Number:</th>
                                <td>
                                    <input type="text" name="p1" id="p11" placeholder="Enter the number here" minlength="10" maxlength="10" />
                                </td>
                            </tr>
                            <tr>
                                <th>Photo:</th>
                                <td><input type="file" name="f1" id="f11"></td>
                            </tr>
                            <tr>
                                <th><label>Username:</label></th>
                                <td><input type="text" name="u" id="u1" placeholder="Enter the username here..."></td>
                            </tr>
                            <tr>
                                <th><label>Password:</label></th>
                                <td><input type="password" name="p2" id="p22" placeholder="Enter the password here..."></td>
                            </tr>
                            <tr>
                                <th colspan="2"><input type="submit" value="REGISTER"></th>
                                <th><a href="dashboard.php">Back</a></th>
                            </tr>
                        </table>
                    </form>
                </center>
            </div>
        </div>
    </center>
</body>

</html>
