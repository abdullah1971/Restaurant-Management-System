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

			
			if(isset($_SESSION['email'])){

				$query = "SELECT * FROM admin";
				$result = mysqli_query($con, $query);

				$row = mysqli_fetch_assoc($result);

				if ($_SESSION['email'] == $row['email']) {

					$identity = "admin";

				}else{

					$identity = "entry_operator";

				}
			}else
				$identity = "";		
			

			navigationBar("customerStatus", $identity);


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
			
			<h3>Platinum Customer</h3>

			<div class="row single-catagory" style="background-color: #373A3C;color: white">

				<!-- table testing starts 
				<div>
					<table class="table table-bordered table-inverse">
					  <thead>
					    <tr>
					      <th>#</th>
					      <th>First Name</th>
					      <th>Last Name</th>
					      <th>Username</th>
					    </tr>
					  </thead>
					  <tbody>
					    <tr>
					      <th scope="row">1</th>
					      <td>Mark</td>
					      <td>Otto</td>
					      <td>@mdo</td>
					    </tr>
					    <tr>
					      <th scope="row">2</th>
					      <td>Mark</td>
					      <td>Otto</td>
					      <td>@TwBootstrap</td>
					    </tr>
					    <tr>
					      <th scope="row">3</th>
					      <td>Jacob</td>
					      <td>Thornton</td>
					      <td>@fat</td>
					    </tr>
					    <tr>
					      <th scope="row">4</th>
					      <td colspan="2">Larry the Bird</td>
					      <td>@twitter</td>
					    </tr>
					  </tbody>
					</table>
				</div>
				 table testing ends -->
				
				<?php

					$query = "SELECT * FROM `previous_month_entry_history` WHERE number_of_entry_on_this_month >= 20";
					$result = mysqli_query($con, $query);

					
					$num_cul = mysqli_num_rows($result);

					$count = 1;

					

					//echo $contact_no.' '.$email.' '.$name.'<br>';

					echo '
						<div>
							<table class="table table-bordered table-inverse">
							  <thead>
							    <tr>
							      <th>#</th>
							      <th>Name</th>
							      <th>Email</th>
							      <th>Contact No</th>
							    </tr>
							  </thead>
							  <tbody>
							 
					';

					for($i = 0; $i < $num_cul; $i++){


						// fetch the data

						$row = mysqli_fetch_assoc($result);

						$contact_no = $row['contact_no'];
						$email = $row['email'];
						$name = $row['name'];


						echo '
							  <tr>
							    <th scope="row">'.$count.'</th>
							    <td>'.$name.'</td>
							    <td>'.$email.'</td>
							    <td>'.$contact_no.'</td>
							  </tr>
							  
						';


						$count++;
					}
					
					echo '	  
						  </tbody>
						</table>
					</div>
					';
					

				 ?>



			</div>



			<!-- second one -->
			
			<h3>Golden Customer</h3>


			<div class="row single-catagory" style="background-color: #373A3C;color: white">
				

				<?php

					$query = "SELECT * FROM `previous_month_entry_history` WHERE number_of_entry_on_this_month >= 10 AND number_of_entry_on_this_month < 20";
					$result = mysqli_query($con, $query);

					
					$num_cul = mysqli_num_rows($result);

					$count = 1;

					

					//echo $contact_no.' '.$email.' '.$name.'<br>';

					echo '
						<div>
							<table class="table table-bordered table-inverse">
							  <thead>
							    <tr>
							      <th>#</th>
							      <th>Name</th>
							      <th>Email</th>
							      <th>Contact No</th>
							    </tr>
							  </thead>
							  <tbody>
							 
					';

					for($i = 0; $i < $num_cul; $i++){


						// fetch the data

						$row = mysqli_fetch_assoc($result);

						$contact_no = $row['contact_no'];
						$email = $row['email'];
						$name = $row['name'];


						echo '
							  <tr>
							    <th scope="row">'.$count.'</th>
							    <td>'.$name.'</td>
							    <td>'.$email.'</td>
							    <td>'.$contact_no.'</td>
							  </tr>
							  
						';


						$count++;
					}
					
					echo '	  
						  </tbody>
						</table>
					</div>
					';
					

				 ?>


			</div>


			<!-- third one -->

			<h3>Silver Customer</h3>

			<div class="row single-catagory" style="background-color: #373A3C;color: white">
				


				<?php

					$query = "SELECT * FROM `previous_month_entry_history` WHERE number_of_entry_on_this_month >= 5 AND number_of_entry_on_this_month < 10";
					$result = mysqli_query($con, $query);

					
					$num_cul = mysqli_num_rows($result);

					$count = 1;

					

					//echo $contact_no.' '.$email.' '.$name.'<br>';

					echo '
						<div>
							<table class="table table-bordered table-inverse">
							  <thead>
							    <tr>
							      <th>#</th>
							      <th>Name</th>
							      <th>Email</th>
							      <th>Contact No</th>
							    </tr>
							  </thead>
							  <tbody>
							 
					';

					for($i = 0; $i < $num_cul; $i++){


						// fetch the data

						$row = mysqli_fetch_assoc($result);

						$contact_no = $row['contact_no'];
						$email = $row['email'];
						$name = $row['name'];


						echo '
							  <tr>
							    <th scope="row">'.$count.'</th>
							    <td>'.$name.'</td>
							    <td>'.$email.'</td>
							    <td>'.$contact_no.'</td>
							  </tr>
							  
						';


						$count++;
					}
					
					echo '	  
						  </tbody>
						</table>
					</div>
					';
					

				 ?>




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