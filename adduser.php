<?php
include("connection.php");
session_start();
	if(isset($_POST['submit'])){
		$name = $_POST['name'];
		$username = $_POST['username'];
		$password = $_POST['password'];
		$email = $_POST['email'];

		$result = mysqli_query($con, "INSERT INTO user VALUES ('', '$username', '$password', '$name', '$email')");
		$_SESSION['add'] = 'add';
		header("Location:signup.php");
	}
?>