<?php

if (isset($POSt['submit'])){
	include_once'userdatabaseh.php';
	
	$first = mysqli_real_escape_string($conn,$_POST['first']) ;
	$last = mysqli_real_escape_string($conn,$_POST['last']) ;
	$email = mysqli_real_escape_string($conn,$_POST['email']) ;
	$userid = mysqli_real_escape_string($conn,$_POST['userid']) ;
	$password = mysqli_real_escape_string($conn,$_POST['password']) ;
	
	if(empty($first) || empty($last) || empty($email) || empty($userid) ||empty($password)){
		header("Location: ../signup.php?signup=empty");
		exit();
	}
	else{
		$sql = "SELECT * FROM users WHERE user_id='userid'";
		$result = mysqli_query($conn, $sql);
		$results = mysqli_num_rows($result);
		
		if($results > 0) {
			header("Location: ../signup.php?signup=empty");
			exit();
		}else{
			$sql = "INSERT INTO users (user_first, user_last, user_email, user_userid, user_password) VALUES('$first', '$last', '$email', '$userid', '$password');";
			mysqli_query($conn, $sql);
		}
	}
}
else{
	header("Location: ../signup.php");
	exit();

			
			
			
			
			
			
