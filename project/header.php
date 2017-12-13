<?php
	session_start();
?>

<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>CSCI 3308</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Fonts -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">

    <link href="css/freelancer.min.css" rel="stylesheet">

  </head>

  <body id="page-top">

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg bg-secondary fixed-top text-uppercase" id="mainNav">
      <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="index.php">CSCI 3308 Project</a>
        <button class="navbar-toggler navbar-toggler-right text-uppercase bg-primary text-white rounded" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          Menu
          <i class="fa fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
			<?php
			  if (isset($_SESSION['user_id']))
			  {
				  echo '<form class="form-inline" action="includes/logout.php" method="POST">
						<button type="submit" name="logout" class="btn btn-primary">Log Out</button>
						</form>';
			  }
			  else
			  {
				  echo '<form class="form-inline" action="includes/signinInclude.php" method="POST">
						<input type="text" name="username" class="form-control mb-2 mr-sm-2 mb-sm-0" placeholder="Username/E-mail">
						<input type="password" name="password" class="form-control mb-2 mr-sm-2 mb-sm-0" placeholder="Password">
						<button type="submit" name="login" class="btn btn-primary">Log In</button>
						</form>
						<li class="nav-item mx-0 mx-lg-1">
						<a class="nav-link py-3 px-0 px-lg-3 rounded" href="signup.php">Sign Up</a>
						</li>';
			  }
			?>
          </ul>
        </div>
      </div>
    </nav>
