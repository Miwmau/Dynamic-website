<?php
session_start();
if(isset($_SESSION['add'])){
?>
<script>
  alert("Successfully Added!");
</script>
<?php
  unset($_SESSION['add']);
  }
?>
<html>
<title>Jollytraveller</title>
<head>
<link type="text/css" rel="stylesheet" href="jollystyle.css"/>
<link type="text/css" rel="stylesheet" href="login.css"/>
</head>

<body>
<div id="header">
<div id="menu"> 
	<form a>
	</form>
</div>

<br><br><br><br><br>
<div id="page" style="min-height:500px;">
<br><br>
<h2 style="font-size:35px">Sign Up Form</h2>

<form action="adduser.php" method="POST">
  <div class="imgcontainer">
    <img src="img_avatar2.png" alt="Avatar" class="avatar">
  </div>

  <div class="container">
    <label for="name"><b>Name</b></label>
    <input type="text" placeholder="Enter First name" name="name">

    <label for="username"><b>Username</b></label>
    <input type="text" placeholder="Enter Username" name="username">

    <label for="password"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="password">

    <label for="email"><b>Email</b></label>
    <input type="email" placeholder="Enter Email" name="email">
        
    <input type="submit" id="submit" value="Submit" name="submit">
    <br>
    <br>
    <a href="login.php">Log in!</a>
  </div>
</form>
<br><br><br>
</div>
</body>
</html>
