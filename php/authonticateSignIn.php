<?php
	
	// start session

	session_start();




	// include files

	include 'dbConnection.php';
	include 'navigation.php';



	// gather information from the form

	$email = test_input($_POST['email']);

	$password = test_input($_POST['password']);

	// encrept the password so that we can 
	// compare with the value of database 
	// and current $password

	$password = sha1($password);
	



	// gather information from the database 


	$result = findValue("user_info", "email", $email );


	$row = $result->fetch_assoc();

	$temp_email = $row['email'];

	$temp_password = $row['password'];




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

			//navigationBar("authonticateSingIn", "admin");

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

		

























