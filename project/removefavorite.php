<?php
	if (!isset($_COOKIE['username'])){
		header("Location: login.php");
	}
	else if (isset($_POST['link'])){
		$link = $_POST['link'];
		$username = $_COOKIE['username'];

		$server = "spring-2021.cs.utexas.edu";
		$user = "cs329e_bulko_brinnahw";
		$pass = "ballet8nose5mere";
		$database = "cs329e_bulko_brinnahw";

		$mysqli = new mysqli ($server, $user, $pass, $database);
		if ($mysqli->connect_errno) {
			die('Connect Error: ' . $mysqli->connect_errno . ":" . $mysqli->connect_error);
		}
		
		// Escape User Input to help prevent SQL Injection
		$link = $mysqli->real_escape_string($link);
		$username = $mysqli->real_escape_string($username);

		// ERROR was due to \'/ being added to the end of $link. Not sure why this string gets added
		$link = str_replace("\'/", "", $link);
		//echo $link."\n";

		$command = "DELETE FROM favorites WHERE username='$username' AND favorite='$link' ";
		echo $command;

		$result = $mysqli->query($command);
		// debugging tool
		/*
		if ($result == TRUE) {
			echo "Record deleted successfully";
		}
		else {
			echo "Error deleting record: " . $mysqli->error;
		}
		*/

		$mysqli->close();

		header("Location:favorites.php");
	}

?>
