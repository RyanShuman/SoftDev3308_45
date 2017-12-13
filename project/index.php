<?php
	include_once 'header.php';
?>

    <!-- Header -->
    <header class="masthead bg-primary text-white text-center">
      <div class="container">
        <h1 class="text-uppercase mb-4">One Word Story Improv</h1>
        <h2 class="font-weight-light mb-0">Each user can submit one word per hour</h2>
      </div>
    </header>

    <!-- About Section -->
    <section class="bg-secondary text-white mb-0" id="login">
      <div class="container">
        <h2 class="text-center text-uppercase text-white mb-4">The Story</h2>
        <div class="row">
            <?php
              include_once 'includes/databaseh.php';
              $sql = "SELECT * FROM story WHERE id = 1;";
			  $result = mysqli_query($conn, $sql);
			  $story = mysqli_fetch_assoc($result);
              echo '<div class="container">
					<p class="text-center">'.reset($story).'</p>
					</div>';
            
			  if (isset($_SESSION['user_id']))
			  {
				  echo '<form class="form-inline" action="includes/post.php" method="POST">
						<input type="text" name="word" class="form-control mb-2 mr-sm-2 mb-sm-0" placeholder="Add a word to the story!">
						<button type="submit" name="post" class="btn btn-primary">Submit</button>
						</form>';
			  }
			  else
			  {
				  echo '<div class="container"> <p class="text-center">Login or sign up to add a word to the story!</p></div>';
			  }
			?>
        </div>
      </div>
    </section>

    <!-- Footer -->
    <footer class="footer text-center bg-primary">
      <div class="container">
          <h2 class="text-center text-uppercase text-white mb-4">CSCI 3308 Project</h2>
      </div>
    </footer>

    <div class="copyright py-4 text-center text-white">
      <div class="container">
        <small>The end!</small>
      </div>
    </div>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script> 
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  </body>
</html>
