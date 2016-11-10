<?php
	/**
	* @return bool
	*/
	function is_session_started()
	{
	    if ( php_sapi_name() !== 'cli' ) {
	        if ( version_compare(phpversion(), '5.4.0', '>=') ) {
	            return session_status() === PHP_SESSION_ACTIVE ? TRUE : FALSE;
	        } else {
	            return session_id() === '' ? FALSE : TRUE;
	        }
	    }
	    return FALSE;
	}

	// Example
	if ( is_session_started() === FALSE ) session_start();
?>












<?php
	
	//session_start();
	

	function navigationBar($source, $identity){


		// if not loged in
		if(!isset($_SESSION['email'])){


			echo '
				<ul>
					<li><a href="signIn.php">Sign In</a></li>
					<li><a href="signUp.php">Sign Up</a></li>
				</ul>

			';

		}
		else{


//unset($_SESSION['email']);



			
			// if loged in

			//check whether this is admin or voter or entry Operator
			// if voter

			if($identity == "voter"){


				echo '
					<ul>
						<li><a href="signOut.php">Sign Out</a></li>
					</ul>

				';
			}
			

			// if admin
			// then check whether $source == 'home' or 'dashboard'
			// if home then

			if($identity == "admin"){

				// if home then
				if($source == "home"){

					echo '
						<ul>
							<li><a href="dashboard.php">Dashboard</a></li>
							<li><a href="signOut.php">Sign Out</a></li>
						</ul>

					';

				}else if($source == "authonticateSingIn"){

					echo '
						<ul>
							<li><a href="../dashboard.php">Dashboard</a></li>
							<li><a href="../signOut.php">Sign Out</a></li>
						</ul>

					';

				}else if ($source == "dashboard"){

					// if dashboard is clicked then

					echo '
						<ul>
							<li><a href="index.php">Home</a></li>
							<li><a href="signOut.php">Sign Out</a></li>
						</ul>

					';

				}
				

			}




			// if entry Operator
			// then check whether $source == 'home' or 'entry_page'
			// if home then

			if($identity == "entry_operator"){

				// if home then
				if($source == "home"){

					echo '
						<ul>
							<li><a href="entry_page.php">Entry Page</a></li> 
							<li><a href="signOut.php">Sign Out</a></li>
						</ul>

					';

				}else if($source == "authonticateSingIn"){

					echo '
						<ul>
							<li><a href="../entry_page.php">Entry Page</a></li>
							<li><a href="../signOut.php">Sign Out</a></li>
						</ul>

					';

				}else if ($source == "entry_page"){ // have not created this page and need to update when it will be created

					// if entry_page is clicked then

					echo '
						<ul>
							<li><a href="index.php">Home</a></li>
							<li><a href="signOut.php">Sign Out</a></li>
						</ul>

					';

				}
				

			}
			

			


		}


		
	}

 ?>