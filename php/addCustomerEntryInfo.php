<?php

	include 'dbConnection.php';

		
	$name = $_REQUEST['name'];

	$email = $_REQUEST['email'];

	$contact_no = $_REQUEST['contact_no'];

	//insertThreeValue();


	// check if there exists any entry on this contact no
	//====================================================


	// collect the value from the database 

	$query = "SELECT * FROM current_month_entry_history WHERE email = '$email' ";

	$result = mysqli_query($con, $query);

	$row = mysqli_fetch_assoc($result);

	$number_of_entry_on_this_month = $row['number_of_entry_on_this_month'];

	$number_of_entry_on_this_month++;
	//echo $number_of_entry_on_this_month;



	// if exits then update otherwise insert
	//========================================


	if(mysqli_num_rows($result) == 0){

		insertFourValue("current_month_entry_history","contact_no", "email", "name", "number_of_entry_on_this_month", $contact_no, $email, $name, 1);
	}else {

		$query = "UPDATE current_month_entry_history SET number_of_entry_on_this_month = '$number_of_entry_on_this_month' WHERE contact_no = '$contact_no'";

    	mysqli_query($con, $query);
	}

	

	$_SESSION['addingCustomerNotification'] = "done";
	

	header("Location: ../entry_page.php");
    exit;

 ?>