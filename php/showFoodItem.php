<?php

	// include files

	include 'dbConnection.php';



//unset($_SESSION['food_id']);

	// show function

	function showFoodItem($catagory){

		
		//global $first_number;

		echo '<h3>'.$catagory.'</h3>';

		echo '<div class="row single-catagory">';



		// get the value according to catagory

		

		//$result = findValue("food_info", "catagory", $catagory);

		$query = "SELECT * FROM food_info WHERE catagory = '$catagory' ORDER BY vote DESC";

		global $con;

		$result = mysqli_query($con, $query);

		$num_result = mysqli_num_rows($result);

		


		// print for every food

		

		// set the counter

		$counter = 0;

		while ($row = mysqli_fetch_assoc($result)) {


			
			// print the result
			//----------------------



			// get image url

			$img_url = $row['photo'];

			$img_url = substr($img_url,3);


			// get food info

			$food_name = $row['food_name'];
			$price = $row['price'];
			$discount = $row['discount'];
			$vote = $row['vote'];
			$id = $catagory.'-'.$counter;
			$id = str_replace(" ", "", $id);
			//echo $id;

			// increment the counter

			$counter++;

			

			echo '
				<div class="col-sm-4 single-content">';

				?>

					<img src='<?php echo $img_url; ?>' onclick='voteIt("<?php 

						// get image url on click

						if(isset($_SESSION['email'])){
							echo '../'.$img_url;

							//$_SESSION['food_id'] = $id;


							//$_SESSION['voted'] = '../'.$img_url;  // here has made some changes
						}
						else{
							echo "";
						}


						// set session of $id on clicking

						




					 ?>","<?php echo $id; ?>")'; onmouseover="this.src='<?php

						// if loged in then show click to vote on hover
						// else show login to vote

						if(isset($_SESSION['email']))
							$temp = "images/click-to-vote.jpg";
						else
							$temp = "images/login-to-vote.jpg";

					 	echo $temp; 


					 ?>'"; onmouseout="this.src='<?php echo $img_url;  ?>'";  />
					

					<?php 

					echo '
					<ul>
						<li><b>Item Name: </b>'.$food_name.'</li>
						<li><b>Price: </b>'.$price.'</li>
						<li><b>Discount: </b>'.$discount.'</li>';

						echo '
						<li ';


						// set id when mathch with voted session

						/*if(isset($_SESSION['changeFoodVote'])){

							unset($_SESSION['changeFoodVote']);*/

							echo "id=$id";
						/*}else{
							echo "";
						}*/

						echo '><b>Votes: </b>'.$vote.'</li>
					</ul>

					
				</div>
			';

		

		}



		/*echo '
			<button class="btn btn-default btn-self-slider-left"><span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span></button>

			<?php

						 	// get the food image source 

						 	echo $img_url;


						  ?>
		';*/



		echo '

			</div>

			'/*<button class="btn btn-default btn-self-slider-right"><span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span></button>*/

		;

	}



	function showPouplarItem($catagory){

		$query = "SELECT * FROM food_info WHERE catagory = '$catagory' ORDER BY vote DESC";

		global $con;

		$result = mysqli_query($con, $query);

		$num_result = mysqli_num_rows($result);

		$i = 0;

		while ($row = mysqli_fetch_assoc($result)) {

			if($i>2)
				break;


			// print the result
			//----------------------



			// get image url

			$img_url = $row['photo'];

			$img_url = substr($img_url,3);


			// get food info

			$food_name = $row['food_name'];
			$price = $row['price'];
			$discount = $row['discount'];
			$vote = $row['vote'];
			//$temp = "images/click-to-vote.jpg";

			

			echo '
				<div class="col-sm-4 single-content">';

				?>

					<img src='<?php echo $img_url; ?>' onclick='voteIt("<?php 

						// get image url on click

						if(isset($_SESSION['email']))
							echo '../'.$img_url;
						else
							echo "";




					 ?>")'; onmouseover="this.src='<?php

						// if loged in then show click to vote on hover
						// else show login to vote

						if(isset($_SESSION['email']))
							$temp = "images/click-to-vote.jpg";
						else
							$temp = "images/login-to-vote.jpg";

					 	echo $temp; 


					 ?>'"; onmouseout="this.src='<?php echo $img_url;  ?>'";  />
					

					<?php 

					echo '
					<ul>
						<li><b>Item Name: </b>'.$food_name.'</li>
						<li><b>Price: </b>'.$price.'</li>
						<li><b>Discount: </b>'.$discount.'</li>
						<li id="voteResult"><b>Votes: </b>'.$vote.'</li>
					</ul>

					
				</div>
			';




			$i++;

		}

	}

 ?>