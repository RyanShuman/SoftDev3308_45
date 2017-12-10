<?php

session_start();

if (isset($_POST['login']))
{
	
	include_once 'databaseh.php';
	
	$username = mysqli_real_escape_string($conn, $_POST['username']);
	$password = mysqli_real_escape_string($conn, $_POST['password']);
	
	
	$sql = "SELECT * FROM users WHERE user_name = '$username' OR user_email = '$username'";
	$result = mysqli_query($conn, $sql);
	$results = mysqli_num_rows($result);
	
	if($results < 1)
	{
		header("Location: ../index.php?login=invalidusername");
		exit();
	}
	else
	{
		if ($row = mysqli_fetch_assoc($result))
		{
			$correct = password_verify($password, $row['user_password']);
			if ($correct == false)
			{
				header("Location: ../index.php?login=invalidpassword");
				exit();
			}
			else 
			{
				//log in
				//superglobal
				$_SESSION['user_id'] = $row['user_id'];
				$_SESSION['user_first'] = $row['user_first'];
				$_SESSION['user_last'] = $row['user_last'];
				$_SESSION['user_email'] = $row['user_email'];
				$_SESSION['user_name'] = $row['user_name'];
				header("Location: ../index.php?login=success");
				exit();
			}
		}
	}
}
else
{
	header("Location: ../index.php?login=error");
	exit();
}


