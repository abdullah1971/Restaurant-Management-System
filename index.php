<?php

	// start session

	session_start();
	//session_destroy();



	// include files

	include 'php/navigation.php';
	include 'php/showFoodItem.php';
	
	
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

	<script type="text/javascript">
		

		function voteIt(image_source,id){

			//alert(id);

			if(image_source != ""){


				var xmlhttp = new XMLHttpRequest();

				xmlhttp.onreadystatechange = function() {
				    if (this.readyState == 4 && this.status == 200) {

				        document.getElementById(id).innerHTML = this.responseText;
				    }
				};


				xmlhttp.open("GET", "php/changeVote.php?image=" + image_source, true);
				xmlhttp.send();

			}else{
				alert("please log in to vote");
			}

		    

			

		}


	</script>
	
</head>
<body class="main-body">
	
	<div class="navigationBar">
		<h3>Order's Up</h3>

		<!-- ====================

				Navigation Bar

			=====================-->

		<?php



			if(!isset($_SESSION['email'])){

				$identity = "";

			}
			else{

				$identity = $_SESSION['identity'];

			}

			navigationBar("home", $identity);

		 ?>

		



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

			<!-- ===========================

					Food list by catagory

				============================-->



			<?php

				// select distinct food  catagory

				$query = "SELECT DISTINCT catagory FROM food_info";

				$result = mysqli_query($con, $query);

				$resultToShowPopularItem = mysqli_query($con, $query);




				// show popular food items


				echo '<h3>Popular Items</h3>';

				echo '<div class="row single-catagory">';



				while ($row = mysqli_fetch_assoc($resultToShowPopularItem)) {
					

					// get the catagory name

					$catagory = $row['catagory'];

					showPouplarItem($catagory);
				}

				echo '

					</div>

					'

				;





				// show food items of each catagory

				while ($row = mysqli_fetch_assoc($result)) {
					

					// get the catagory name

					$catagory = $row['catagory'];

					showFoodItem($catagory);
				}


			 ?>


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