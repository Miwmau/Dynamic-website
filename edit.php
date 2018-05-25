<?php
include("connection.php");
session_start();
if(isset($_POST['update'])){
  $username = $_POST['username'];
  $password = $_POST['password'];

  $result = mysqli_query($con, "UPDATE user SET username = '$username', password = '$password' WHERE user_id = $_SESSION[id]");
  header("Location:settings.php");
}elseif(isset($_POST['deactivate'])){
  $result = mysqli_query($con, "DELETE FROM user WHERE user_id = $_SESSION[id]");
  header("Location:logout.php");
}
?>