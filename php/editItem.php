<?php

	include 'dbConnection.php';

	// failed to adjust with ajax
	// need more clear concept to complete
	// so try again
	// now brutforce is going to using 

	/*$q = $_REQUEST["q"];

	//echo $q;

	if($q !== ""){


		$get_result = findValue("food_info","food_name",$q);


		if($get_result !== ""){


			$row = mysqli_fetch_assoc($result);

			$food_name = $row['food_name'];
			$catagory = $row['catagory'];
			$price = $row['price'];
			$discount = $row['discount'];
			$photo_url = $row['photo'];

			echo "abcldkfjsldfj";


			echo '
			
				<div class="form-group">
				  <label for="item-name">Item Name:</label>
				  <input type="text" class="form-control" id="item-name" placeholder="just put item name here, rest info will come automatically" onkeyup="showValues(this.value)" value="$food_name">
				</div>


				<div class="form-group">
				  <label for="catagory">Catagory:</label>
				  <input type="text" class="form-control" id="catagory" placeholder="" value="$catagory">
				</div>


				<div class="form-group">
				  <label for="price">Price:</label>
				  <input type="text" class="form-control" id="price" placeholder="" value="$price">
				</div>


				<div class="form-group">
				  <label for="discount">Discount:</label>
				  <input type="text" class="form-control" id="discount" placeholder="" value="$discount">
				</div>

				<div class="form-group">
				  <label for="photo">Photo:</label>
				  <input type="file" id="photo" value="$photo_url">
				</div>

				<button type="submit" class="btn btn-default add-item-submit-button">Update</button>

			';


		}else{

			echo '

				<div class="form-group">
				  <label for="item-name">Item Name:</label>
				  <input type="text" class="form-control" id="item-name" placeholder="just put item name here, rest info will come automatically" onkeyup="showValues(this.value)">
				</div>


				<div class="form-group">
				  <label for="catagory">Catagory:</label>
				  <input type="text" class="form-control" id="catagory" placeholder="">
				</div>


				<div class="form-group">
				  <label for="price">Price:</label>
				  <input type="text" class="form-control" id="price" placeholder="">
				</div>


				<div class="form-group">
				  <label for="discount">Discount:</label>
				  <input type="text" class="form-control" id="discount" placeholder="">
				</div>

				<div class="form-group">
				  <label for="photo">Photo:</label>
				  <input type="file" id="photo">
				</div>

				<button type="submit" class="btn btn-default add-item-submit-button">Update</button>

			';

		}

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


		//echo $food_name.'  '.$food_catagory.'  '.$food_price.'  '.$food_discount.'  '.$food_photo_url;

		updateValue("food_info", "food_name",$food_name, "catagory",$food_catagory, "price",$food_price, "discount",$food_discount, "photo",$food_photo_url,"food_name",$food_name );

		header("Location: ../dashboard.php");
	    exit;






 ?>