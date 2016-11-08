<?php

	session_start();

	include 'dbConnection.php';




	// get the image source on click

	$image = $_REQUEST["image"];
	//echo $image;



	// get the email

	$email = $_SESSION['email'];



	// check whether this user given vote or not



	// get food name from the image url

	$query = "SELECT * FROM food_info WHERE photo = '$image'";

	$result = mysqli_query($con, $query);

	$row = mysqli_fetch_assoc($result);

	$food_name = $row['food_name'];

	$vote = $row['vote'];
	//echo $email.' '.$image.' '.$food_name;



	// now check voting info

	$query = "SELECT food_name FROM preserve_voting_info WHERE email = '$email'";

	$result = mysqli_query($con, $query);

	

	// check whether there any food entry against 
	// this email 

	$flag = 0;

	while ($row = mysqli_fetch_assoc($result)) {
		
		$temp_food_name = $row['food_name'];

		if( $food_name == $temp_food_name){

			$flag = 1;

			break;
		}

	}




	// flag = 1 means this food has been voted
	// flag = 0 means this food has not been voted

	if($flag == 1){


		// vote has been given
//unset($_SESSION['changeFoodVote']);


		echo '
			

			  <b>Votes: </b>'.$vote.'
		';

	}else{

		// vote has not been given yet



		// increase the vote value of this type of food

		
		

		$vote += 1;


		// update vote value

		$query = "UPDATE food_info SET vote=$vote WHERE food_name='$food_name'";

		mysqli_query($con, $query);




		// preserve this record by maping with email

		$query = "INSERT INTO preserve_voting_info (food_name,email) VALUES ('$food_name','$email')";

		mysqli_query($con, $query);




		// set session to detect whose vote need to be changed

		$_SESSION['changeFoodVote'] = $food_name;
		//echo $_SESSION['changeFoodVote'];
		//unset($_SESSION['changeFoodVote']);

		echo '
			

			 <b>Votes: </b>'.$vote.'
		';

	}


	/*

	<script type="text/javascript">
			 	
			 	alert("You have already given vote");

			 </script>


	<script type="text/javascript">
			 	
			 	alert("your vote has been counted");

			</script>

	*/
	
 ?>