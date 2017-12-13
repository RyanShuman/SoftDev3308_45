<?php

if (isset($_POST['post']))
{
	
	include_once 'databaseh.php';
	
	$word = mysqli_real_escape_string($conn,$_POST['word']);
	
	if(empty($word))
	{
		header("Location: ../index.php?post=empty");
		exit();
	}
	else
	{
		$newword = ' ' . $word;
		$sql = "UPDATE story SET words = CONCAT(words, '$newword') WHERE id = 1;";
		mysqli_query($conn, $sql);
		header("Location: ../index.php?post=success");
		exit();
	}
}
else
{
	header("Location: ../index.php?post=error");
	exit();
}
