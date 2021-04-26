<?php

$server = "spring-2021.cs.utexas.edu";
$user = "cs329e_bulko_brinnahw";
$pass = "ballet8nose5mere";
$dbName = "FinalProjectUsers";

$mysqli = new mysqli ($server, $user, $pass, $dbName);

if ($mysqli -> connect_errno){
	die('Connect error: ' . $mysqli->connect_errno . ": " . $mysqli=>connect_error);
}


?>
