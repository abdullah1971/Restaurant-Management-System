<?php
	
	// start session

	session_start();




	// include files

	include 'php/dbConnection.php';
	include 'php/navigation.php';



	// gather information from the form

	


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
		
		function showValues(str){

			if(str.length == 0){
				//document.getElementById("txtHint").innerHTML = this.responseText;
				return; 
			}else{
				var xmlhttp = new XMLHttpRequest();

				xmlhttp.onreadystatechange = function() {
		            if (this.readyState == 4 && this.status == 200) {
		                document.getElementById("eidt-form").innerHTML = this.responseText;
		            }
		        };

				
		        xmlhttp.open("GET", "php/editItem.php?q=" + str, true);
                xmlhttp.send();

				
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
				<!--

					use navigationBar("dashboard") function
					_____________________________-->



		<?php

			
			/*if(isset($_SESSION['email']))
				echo "session has been set";
			else
				echo "session has not been set";*/

			navigationBar("dashboard", "admin");


		 ?>

	</div>

	<div class="front-page-body">

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
			
			<h3>Add Item</h3>

			<div class="row single-catagory">
				<form class="form-style" method="post" action="php/addItem.php"  enctype="multipart/form-data">
					  <div class="form-group">
					    <label for="item-name">Item Name:</label>
					    <input type="text" class="form-control" id="item-name" placeholder="" name="item-name" required>
					  </div>


					  <div class="form-group">
					    <label for="catagory">Catagory:</label>
					    <input type="text" class="form-control" id="catagory" placeholder="" name="catagory" required>
					  </div>


					  <div class="form-group">
					    <label for="price">Price:</label>
					    <input type="text" class="form-control" id="price" placeholder="" name="price" required>
					  </div>


					  <div class="form-group">
					    <label for="discount">Discount:</label>
					    <input type="text" class="form-control" id="discount" placeholder="" name="discount" required>
					  </div>

					  <div class="form-group">
					    <label for="UploadPhoto">Photo:</label>
					    <input type="file" id="photo" name="UploadPhoto" required>
					  </div>

					  <button type="submit" class="btn btn-default add-item-submit-button">Submit</button>
				</form>
			</div>



			<!-- second one -->
			
			<h3>Edit Item</h3>


			<div class="row single-catagory">
				<form class="form-style" id="eidt-form" action="php/editItem.php" method="post"  enctype="multipart/form-data">
					  <div class="form-group">
					    <label for="item-name2">Item Name:</label>
					    <input type="text" class="form-control" id="item-name2" placeholder="just put item name here, rest info will come automatically"  name="item-name" required>
					  </div>


					  <div class="form-group">
					    <label for="catagory2">Catagory:</label>
					    <input type="text" class="form-control" id="catagory2" placeholder="" name="catagory" required>
					  </div>


					  <div class="form-group">
					    <label for="price2">Price:</label>
					    <input type="text" class="form-control" id="price2" placeholder="" name="price" required>
					  </div>


					  <div class="form-group">
					    <label for="discount2">Discount:</label>
					    <input type="text" class="form-control" id="discount2" placeholder="" name="discount" required>
					  </div>

					  <div class="form-group">
					    <label for="UploadPhoto2">Photo:</label>
					    <input type="file" id="UploadPhoto2" name="UploadPhoto" required>
					  </div>

					  <button type="submit" class="btn btn-default add-item-submit-button">Update</button>
				</form>
			</div>


			<!-- third one -->

			<h3>Remove Item</h3>

			<div class="row single-catagory">
				<form class="form-style" method="post" action="php/removeItem.php">
					  <div class="form-group">
					    <label for="item-name">Item Name:</label>
					    <input type="text" class="form-control" id="item-name" placeholder="just put item name hare, photo will come automatically" name="food_name">
					  </div>

					  <!-- 
					  		use this when ajax will be added


					  <div class="form-group">
					    <img src="images/fast-food-1.jpg">
					  </div>
						-->

					  <button type="submit" class="btn btn-default add-item-submit-button">Delete</button>
				</form>
			</div>

		</div>

		<div class="footer">
			<p>Developed by</p>
			<b><p>Maruf Abdullah & Shohag Sarkar</p></b>
			<!--<p>-----2016-------</p>-->
		</div>

		

	</div>

</body>
</html>