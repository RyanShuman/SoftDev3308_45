<?php
	include_once'userdatabaseh.php';
	?>
<!DOCTYPE html>
	<section>
		<div>
			<form action="include/signupInclude.php" method="POST">
				<input type="text" name ="user_first" placeholder="Firstname"> 
				<input type="text" name ="user_last" placeholder="Lastname">
				<input type="text" name ="user_email" placeholder="email">
				<input type="text" name ="user_id" placeholder="Username">
				<input type="password" name ="password" placeholder="Password">
				<button type="submit" name="submit">sign up</button>
			</form>
		</div>
	</section>	
</DOCTYPE>
