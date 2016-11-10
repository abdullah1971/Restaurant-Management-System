<?php

	// start session

	session_start();

	// include files


	include 'navigation.php';
	
	include 'dbConnection.php';


	$email =  trim(stripcslashes(htmlspecialchars($_POST['email'])));

	$password = trim(stripcslashes(htmlspecialchars($_POST['password'])));

	$first_name = trim(stripcslashes(htmlspecialchars($_POST['fname'])));

	$last_name = trim(stripcslashes(htmlspecialchars($_POST['lname'])));

	$contact_no = trim(stripcslashes(htmlspecialchars($_POST['contact_no'])));

	$password = sha1($password);



	// check if sign in is going to be duplucate

	$query = "SELECT * FROM user_info";

	global $con;

	$result = mysqli_query($con, $query);

	while ($row = mysqli_fetch_assoc($result)) {
		

   		if($email == $row['email']){

   			echo '
   				<div class="alert alert-warning alert-dismissible" role="alert">
   				  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
   				  <strong>This email has been used before. Try another
   				</div>
   			';

			header("Location: ../signUp.php");
		    exit;


   		}


	}


	insertFiveValue("user_info", "email", "password","first_name","last_name","contact_no", $email, $password,$first_name, $last_name, $contact_no);

	


	

	// gather information from the form

	$email = test_input($_POST['email']);

	$password = test_input($_POST['password']);
	



	// gather information from the database 


	$result = findValue("user_info", "email", $email );


	$row = mysqli_fetch_assoc($result);

	$temp_email = $row['email'];

	$temp_password = $row['password'];



	// encrept the password so that we can 
	// compare with the value of database 
	// and current $password

	$password = sha1($password);

	//echo $password.' '.$temp_password;




	// check if email and password matches or not

	if($email === $temp_email && $password === $temp_password){


		// set the email session

		$_SESSION['email'] = $email;




		// check if admin or not

		$result = findValue("admin", "email", $email );


		$row = mysqli_fetch_assoc($result);

		$admin_email = $row['email'];



		if($admin_email === $email){

			// sign in as admin

			//navigationBar("home", "admin");

			$_SESSION['identity'] = "admin";

			header("Location: ../index.php");
		    exit;

		}else{

			// sign in as voter

			//navigationBar("home", "voter");


			$_SESSION['identity'] = "voter";

			header("Location: ../index.php");
		    exit;
		}

	}




	// function to protect sql injection

	function test_input($data) {


	  $data = trim($data);
	  $data = stripslashes($data);
	  $data = htmlspecialchars($data);
	  return $data;



	}


 

?>

		

























