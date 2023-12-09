<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <style>
        body {
            background-color: white;
            font-family: Arial, sans-serif;
        }

        #main {
            width: 400px;
            margin: 100px auto;
            background-color: white;
            border-radius: 10px;
            box-shadow: 0 0 20px rgba(0.1, 0.1, 0.1, 0.1);
        }

        h2 {
            background-color: green;
            color: white;
            padding: 20px;
            text-align: center;
            margin: 0;
            border-radius: 10px 10px 0 0;
        }

        #login {
            padding: 20px;
        }

        label {
            display: block;
            margin-bottom: 8px;
        }

        input {
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
            box-sizing: border-box;
            border: 1px solid;
            border-radius: 4px;
        }

        input[type="submit"] {
            background-color: blue;
            color: #fff;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: green;
        }
    </style>
    <script type="text/javascript">
        function my() {
            var x1 = document.getElementById('name').value;
            var x2 = document.getElementById('password').value;
            if (x1 === "" || x2 === "") {
                alert("Please enter both the username and password");
                return false;
            }
        }
    </script>
</head>
<body>
    <div id="main">
        <h2>LOGIN FORM</h2>
        <div id="login">
            <form method="post" action="log1.php" onsubmit="return my()">
                <label for="name">USERNAME:</label>
                <input id="name" name="username" type="text" placeholder="Enter your username" required>
                
                <label for="password">PASSWORD:</label>
                <input id="password" name="password" type="password" placeholder="Enter your password" required>
                
                <input name="submit" type="submit" value="SIGN IN">
            </form>
        </div>
    </div>
</body>
</html>
