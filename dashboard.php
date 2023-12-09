<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
<style>
  body {
  margin: 0;
  font-family: 'Arial', sans-serif;
}

#container {
  display: flex;
  flex-direction: column;
  min-height: 100vh;

}

#header {
  background-color: #3498db;
  color: white;
  text-align: center;
  padding: 20px;
}

#main-content {
  display: flex;
  flex-grow: 1;
}

#sidebar {
  width: 200px;
  background-color: #2c3e50;
  color: white;
  padding: 20px;
}

#sidebar img {
  display: block;
  margin: 0 auto 20px;
}

nav a {
  display: block;
  height:30px;
  color: white;
  text-decoration: none;
  padding: 10px 0;
  transition: background-color 0.3s;
}

nav a:hover {
  background-color: #34495e;
}

#content {
  flex-grow: 1;
  padding: 20px;
  background-image: url('a.jpeg');
  background-size: cover;
  background-position: center;
}

#footer {
  background-color: #3498db;
  color: white;
  text-align: center;
  padding: 20px;
}

</style>
  <title>ADMIN DASHBOARD</title>
</head>
<body>
  <div id="container">
    <div id="header">
      <h1>ADMIN DASHBOARD</h1>
    </div>
    <div id="main-content">
      <div id="sidebar">
        <img src="aa.jpeg" alt="Logo" width="200px" height="150px">
        <nav>
          <a href="reg.php">REGISTRATION  FORM</a>
          <a href="det.php">REGISTERED DETAILS</a>
          <a href="logout.php">LOGOUT</a>
        </nav>
      </div>
      <div id="content">
        <div id="background-image"></div>
      </div>
    </div>
    <div id="footer">

  </div>
  </div>
</body>
</html>
