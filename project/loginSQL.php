<?php
	error_reporting(E_ALL);
	ini_set("display_errors", "on");
	
	if (isset($_POST['username']) && isset($_POST['password'])){
		$username = $_POST['username'];
		$password = $_POST['password'];

	    $loggedIn = false;

	    $server = "spring-2021.cs.utexas.edu";
	    $user = "cs329e_bulko_brinnahw";
	    $pass = "ballet8nose5mere";
	    $database = "cs329e_bulko_brinnahw";
	    $mysqli = new mysqli ($server, $user, $pass, $database);
	    if ($mysqli->connect_errno) {
	        die('Connect Error: ' . $mysqli->connect_errno . ":" . $mysqli->connect_error);
	    }

	    // Escape User Input to help prevent SQL Injection
	    $username = $mysqli->real_escape_string($username);
	    $password = $mysqli->real_escape_string($password);

	    //check table to see if username exists in the table
	    $command = "SELECT * FROM users WHERE username = '$username'";
	    $result = $mysqli->query($command);
	    $outcome = 'nothing';
	    if (mysqli_num_rows($result)==0){
	    //if username not in db, add user and password to db and use ajax to display "New User Registered"
	            $command = "INSERT INTO users (username, password) VALUES ('$username', '$password')";
	            $result = $mysqli->query($command);
	            setcookie("username", $username, time()+1000, "/");
	            $outcome = 'NewUserRegistered';

	    }else{
	    //if userame is present check password
	            $command = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";
	            $result = $mysqli->query($command);

	            if (mysqli_num_rows($result)==0){
            		$outcome = 'FailedLogin';
	            }else{
                    setcookie("username", $username, time()+1000, "/");
                    $outcome = 'SuccessfulLogin';
	            }
	    }
	    $mysqli->close();
	    // Return value to AJAX
	    echo $outcome;
	}
?>