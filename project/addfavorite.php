<?php

if (!isset($_COOKIE['username'])){
	header("Location: login.php");
}

if (isset($_POST['link'])){
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

	$command = "INSERT INTO favorites (username, favorite, title, image) VALUES ('$username', '$link', '$title', '$image')";

	$result = $mysqli->query($command);
	
	$mysqli->close();

	header("Location:" . $link);

}


