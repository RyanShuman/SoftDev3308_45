<?php
	include_once 'header.php';
?>

	<!-- Header -->
    <header class="masthead bg-primary text-white text-center">
      <div class="container">
        <form action="includes/signupInclude.php" method="POST">
		  <div class="form-group">
		    <input class="form-control" type="text" name ="first" placeholder="First name">
		  </div>
		  <div class="form-group">
		    <input class="form-control" type="text" name ="last" placeholder="Last name">
		  </div>
		  <div class="form-group">
		    <input class="form-control" type="text" name ="email" placeholder="Email">
		  </div>
		  <div class="form-group">
		    <input class="form-control" type="text" name ="username" placeholder="Username">
		  </div>
		  <div class="form-group">
		    <input class="form-control" type="password" name ="password" placeholder="Password">
		  </div>
		  <button type="submit" name="signup" class="btn btn-secondary">Sign Up</button>
        </form>
      </div>
    </header>
</html>
