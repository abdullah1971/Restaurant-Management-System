<?php

	// start session

	session_start();
	//session_destroy();



	// include files

	include 'php/navigation.php';
	
 ?>

<!DOCTYPE html>
<html>
<head>

	<title>Voting System</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/forTest.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>

	
</head>
<body class="main-body">
	
	<div class="navigationBar">
		<h3>Order's Up</h3>

		<ul>
			<li><a href="index.php">Home</a></li>
			<li><a href="signIn.php">Sign In</a></li>
			<li><a href="signUp.php">Sign Up</a></li>
		</ul>


		


	</div>

	<div class="front-page-body">


		<!-- ====================

				Banner

			=====================-->

		<div class="resturant-bannar">
			<div class="row">
				<div class="col-sm-4 left-portion">
					<img src="images/logo.png">
					<h2>Eat to Live</h2>
				</div>

				<div class="col-sm-8 right-portion">
					<h2>Lorem ipsum dolor </h2>

					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minus pariatur dolorum laboriosam necessitatibus laudantium odit dolor adipisci consectetur cupiditate quos explicabo voluptatum quis dignissimos accusamus facere accusantium, sunt cumque aliquid.</p>

					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Explicabo, laboriosam tempore blanditiis nihil animi, quam dolores voluptatem quia aut impedit facere ipsam similique facilis asperiores unde harum obcaecati natus laborum.</p>
				</div>
			</div>
		</div> 

		<div class="food-list">
			<!-- first one -->

			
			<div class="row single-catagory">
				
				<form class="form-style" method="post" action="php/authonticateSignIn.php" >
					  <div class="form-group">
					    <label for="email">Email:</label>
					    <input type="text" class="form-control" id="email" placeholder="" name="email" required>
					  </div>


					  <div class="form-group">
					    <label for="password">Password:</label>
					    <input type="text" class="form-control" id="password" placeholder="" name="password" required>
					  </div>

					  <button type="submit" class="btn btn-default add-item-submit-button">Sign In</button>
				</form>


			</div>


			
		</div>

		<!-- ====================

				footer

			=====================-->

		<div class="footer">
			<p>Developed by</p>
			<b><p>Maruf Abdullah & Shohag Sarkar</p></b>
			<!--<p>-----2016-------</p>-->
		</div>

	</div>

</body>
</html>