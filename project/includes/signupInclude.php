<?php

if (isset($_POST['signup']))
{
	
	include_once 'databaseh.php';
	
	$first = mysqli_real_escape_string($conn,$_POST['first']);
	$last = mysqli_real_escape_string($conn,$_POST['last']);
	$email = mysqli_real_escape_string($conn,$_POST['email']);
	$username = mysqli_real_escape_string($conn,$_POST['username']);
	$password = mysqli_real_escape_string($conn,$_POST['password']);
	
	if(empty($first) || empty($last) || empty($email) || empty($username) || empty($password))
	{
		header("Location: ../signup.php?signup=empty");
		exit();
	}
	else
	{
		if (!preg_match("/^[a-zA-Z]*$/", $first) || !preg_match("/^[a-zA-Z]*$/", $last))
		{
			header("Location: ../signup.php?signup=invalidname");
			exit();
		}
		else
		{
			if (!filter_var($email, FILTER_VALIDATE_EMAIL))
			{
				header("Location: ../signup.php?signup=invalidemail");
				exit();
			}
			else
			{
				$sql = "SELECT * FROM users WHERE user_name='$username' OR user_email = '$email';";
				$result = mysqli_query($conn, $sql);
				$results = mysqli_num_rows($result);
				
				if($results > 0)
				{
					header("Location: ../signup.php?signup=usernameoremailtaken");
					exit();
				}
				else
				{
					$hashedpassword = password_hash($password, PASSWORD_DEFAULT);
					$sql = "INSERT INTO users (user_first, user_last, user_email, user_name, user_password) VALUES ('$first', '$last', '$email', '$username', '$hashedpassword');";
					mysqli_query($conn, $sql);
					header("Location: ../index.php?signup=success");
					exit();
				}
			}
		}
	}
}
else
{
	header("Location: ../signup.php?signup=error");
	exit();
}
