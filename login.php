<?php
session_start();
	if(isset($_SESSION['incorrect'])){
?>
<script>
  alert("USER NOT FOUND!");
</script>
<?php
    unset($_SESSION['incorrect']);
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
<h2 style="font-size:35px">Login Form</h2>

<form action="checkaccount.php" method="POST">
  <div class="imgcontainer">
    <img src="img_avatar2.png" alt="Avatar" class="avatar">
  </div>

  <div class="container">
    <label for="uname"><b>Username</b></label>
    <input type="text" placeholder="Enter Username" name="username">

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="password">
        
    <input type="submit" id="submit" value="Log In" name="login">
    <br>
    <br>
    <a href="signup.php">Sign Up!</a>
  </div>
</form>
<br><br><br>
</div>
</body>
</html>
