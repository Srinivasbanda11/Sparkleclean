<?php
	if(ISSET($_POST['submit'])){
		$password = md5($_POST['password']);
		$conn = new mysqli("localhost","root","","activity") or die(mysqli_error());
		$conn->query("UPDATE `admin` SET `username`='username', `email`='email', `password` = '$password'") or die(mysqli_error());
		header("location: settings.php");
	}