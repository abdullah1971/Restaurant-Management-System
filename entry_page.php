<?php
	
	// start session

	session_start();




	// include files

	include 'php/dbConnection.php';
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
	<script src="jquery-3.1.1.min.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>

	<script type="text/javascript">


	// failed :( need to correct to show notification when value is updated

	<?php

		if(isset($_SESSION['addingCustomerNotification'])){

			echo '
				<script type="text/javascript">
					alert("Added Successfully");
				</script>
			';

			unset($_SESSION['addingCustomerNotification']);
		}

	?>






		
		/*function showValues(str){

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

		}*/

	</script>


	
</head>
<body class="main-body">
	
	<div class="navigationBar">
		<h3>Order's Up</h3>


		<?php

			navigationBar("entry_page", "entry_operator");


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
			
			<h3>Add Customer</h3>

			<div class="row single-catagory">
				<form class="form-style" method="post" action="php/addCustomerEntryInfo.php"  enctype="multipart/form-data">
					  <div class="form-group">
					    <label for="name">Name :</label>
					    <input type="text" class="form-control" id="name" placeholder="" name="name" required>
					  </div>


					  <div class="form-group">
					    <label for="email">Email :</label>
					    <input type="text" class="form-control" id="email" placeholder="" name="email" required>
					  </div>


					  <div class="form-group">
					    <label for="contact_no">Contact No :</label>
					    <input type="text" class="form-control" id="contact_no" placeholder="" name="contact_no" required>
					  </div>

					  <button type="submit" class="btn btn-default add-item-submit-button">Add Customer</button>
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