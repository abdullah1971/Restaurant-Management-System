<?php

	include 'dbConnection.php';

	$food_name = $_POST['food_name'];

	//echo $food_name;

	removeItem("food_info", "food_name", $food_name);

	header("Location: ../dashboard.php");
    exit;

 ?>