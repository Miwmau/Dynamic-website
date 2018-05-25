<?php
	include("connection.php");
	session_start();

	if(isset($_POST['login'])){
		$username = $_POST['username'];
		$password = $_POST['password'];
		$result = mysqli_query($con, "SELECT * FROM user WHERE username = '$username' AND password = '$password'");
		$res = mysqli_fetch_assoc($result);
		if(mysqli_num_rows($result) == 0){
			$_SESSION['incorrect'] = 'incorrect';
			header("Location:login.php");
		}
		else{
			$_SESSION['id'] = $res['user_id'];
			header("location: index.php");
		}
	}else{
		header("Location:login.php");
	}
?>