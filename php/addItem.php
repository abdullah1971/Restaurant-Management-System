<?php

	include 'dbConnection.php';

	// check if all the values are set
	// now no need of this because of required keyword

	/*if(!isset($_POST['item-name']) || !isset($_POST['catagory']) || !isset($_POST['price']) || !isset($_POST['discount']) || !isset($_POST['photo'])){


	}*/

	// collect the value from the form

	$food_name = $_POST['item-name'];
	$food_catagory = $_POST['catagory'];
	$food_price = $_POST['price'];
	$food_discount = $_POST['discount'];
	//$food_photo_temp_url = $_POST["UploadPhoto"];

	//insertTwoValue("user_info","email","password","shohag@gmail.com","12345");

	// for image upload to the server from local user pc

	$fileTemp = $_FILES["UploadPhoto"]["tmp_name"];
	$fileName = $_FILES["UploadPhoto"]["name"];
	$fileType = $_FILES["UploadPhoto"]["type"];
	$filePath = '../images/'.$fileName;

	$filePath = mysqli_real_escape_string($con,$filePath);
	move_uploaded_file($fileTemp, $filePath);

	$food_photo_url = $filePath;

	insertFiveValue("food_info", "food_name", "catagory", "price", "discount", "photo", $food_name, $food_catagory, $food_price, $food_discount, $food_photo_url);

	header("Location: ../dashboard.php");
    exit;

 ?>