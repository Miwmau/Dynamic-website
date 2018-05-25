<?php
include("connection.php");
session_start();
if($_SESSION['id'] == ''){
    header("Location:login.php");
}
$result = mysqli_query($con, "SELECT * FROM user WHERE user_id = $_SESSION[id]");
$res = mysqli_fetch_assoc($result);
?>
<html>
<title>Jollytraveller</title>
<head>
<link type="text/css" rel="stylesheet" href="jollystyle.css"/>
<link type="text/css" rel="stylesheet" href="login.css"/>
<style>
table {
    font-family: arial, sans-serif;
    border-collapse: collapse;
    width: 100%;

}

td, th {
    border: 1px solid #dddddd;
    text-align: center;
    padding: 8px;
}
</style>
</head>

<body>
<div id="header">
<div id="menu"> 
<ul>
<li>
    <a href=index.php>
      <img src="plane.png" height="50" width="50" align="center">
    </a>
</li>
<li><a href="home.html">HOME</a></li>
<li><a href="about.html">ABOUT</a></li>
<li><a href="photoblog.html">PHOTO BLOG</a></li>
<li><a href=settings.php>SETTINGS</a></li>
<li><a href="logout.php">LOG OUT</a></li>
</ul></div>

<br><br><br><br><br>
<div id="page" style="min-height:500px;">
<br><br>
<h2 style="font-size:35px">SETTINGS / SEARCH FORM</h2><br><br>
<hr>

<h2 style="font-size:25px" align="center">CHANGE PASSWORD/USERNAME</h2>

<form action="edit.php" method="POST">

  <div class="container">
    <label for="uname"><b>Username</b></label>
    <input type="text" value=<?php echo $res['username']?> name="username">

    <label for="psw"><b>Password</b></label>
    <input type="text" value=<?php echo $res['password']?> name="password">
        
    <input type="submit" value="UPDATE" name="update" id="submit"><br>
    <input type="submit" value="DEACTIVATE" name="deactivate" id="submit" style="background-color: red;"><br>
    <br>
    <br>
  </div>
</form>

<hr>
<h2 style="font-size:25px" align="center">SEARCH USER</h2>
<form action="#" method="POST">

  <div class="container">
    <label for="uname"><b>Search User: </b></label>
    <input type=text name="name" autofocus>

    <input type="submit" value='Search' name="searchbtn" id="submit">
  </div>
</form>
<?php
include("connection.php");

if(isset($_POST['searchbtn'])){
  echo "<table>
  <tr>
    <th>Username</th>
    <th>Name</th>
  </tr>";
  $name = $_POST['name'];
  $result1 = mysqli_query($con, "SELECT * FROM user WHERE name LIKE '%$name%'");

  while($row = mysqli_fetch_assoc($result1)){
    echo "<tr><td>" . $row['username']."</td>";
    echo "<td>" . $row['name']."</td>";
  }
}
?>
</table>
<br><br><br>
</div>
</body>
</html>
