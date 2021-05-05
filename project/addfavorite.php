<?php
	$outcome = 'nothing';

	if (!isset($_COOKIE['username'])){
		$outcome = 'notLoggedIn';
		//header("Location: login.php");
	}
	else if (isset($_POST['link'])){
		$link = $_POST['link'];
		$username = $_COOKIE['username'];
		$title = $_POST['title'];
		$image = $_POST['image'];

		$server = "spring-2021.cs.utexas.edu";
		$user = "cs329e_bulko_brinnahw";
		$pass = "ballet8nose5mere";
		$database = "cs329e_bulko_brinnahw";
		$mysqli = new mysqli ($server, $user, $pass, $database);
	        if ($mysqli->connect_errno) {
	        	die('Connect Error: ' . $mysqli->connect_errno . ":" . $mysqli->connect_error);
	        }

	    $link = $mysqli->real_escape_string($link);
	    $username = $mysqli->real_escape_string($username);
	    $title = $mysqli->real_escape_string($title);
	    $image = $mysqli->real_escape_string($image);

	    // check if location is already in favorites
	    $command = "SELECT * FROM favorites WHERE username='$username' AND title='$title'";
	    $result = $mysqli->query($command);
	    // add to favorites
	    if (mysqli_num_rows($result)==0){
	    	$command = "INSERT INTO favorites (username, favorite, title, image) VALUES ('$username', '$link', '$title', '$image')";
			$result = $mysqli->query($command);
			
			if ($result == TRUE) {
				$outcome = 'added';
			}
			else {
				$outcome = $mysqli->error;
				//$outcome = 'errorWhileAdd';
			}
	    }
	    // don't add to favorites
	    else {
	    	$outcome = 'dontAdd';
	    }
		
		$mysqli->close();
	}
	// return to AJAX
	echo $outcome;
?>


