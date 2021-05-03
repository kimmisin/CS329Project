
<html lang = "en">
<head>
	<title> Suggestions Page </title>
	<meta charset = "UTF-8">
	<meta name = "description" content = "UT Austin Guide">
	<meta name = "author" content = "Brinnah Welmaker">
    <link rel = "stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href = "starter.css" rel = "stylesheet">
	<link href = "suggestions.css" rel = "stylesheet">
	<script src="jquery-3.6.0.js"></script>
	<script src="searchBar.js"></script>
	<script src="suggestions.js"></script>
	<script src ="colors.js"></script>
</head>

<body id = "body">
<?php
	
	error_reporting(E_ALL);
	ini_set("display_errors", "on");

	// color mode
	if (isset($_COOKIE["color"])){
		$value = $_COOKIE["color"];
		if ($value == "Night Mode"){
			echo "<script> setNight(); </script>";
		}else{
			echo "<script> setDay(); </script>";		
		}
	}

	 if (isset($_POST['username']) && isset($_POST['password'])){
                $username = $_POST["username"];
                $password = $_POST["password"];

                $loggedIn = false;

                $server = "spring-2021.cs.utexas.edu";
                $user = "cs329e_bulko_brinnahw";
                $pass = "ballet8nose5mere";
                $database = "cs329e_bulko_brinnahw";
                $mysqli = new mysqli ($server, $user, $pass, $database);
                if ($mysqli->connect_errno) {
                        die('Connect Error: ' . $mysqli->connect_errno . ":" . $mysqli->connect_error);
                }

                //check table to see if username exists in the table
                $command = "SELECT * FROM users WHERE username = '$username'";
                $result = $mysqli->query($command);

                if (mysqli_num_rows($result)==0){
                //if username not in db, add user and password to db and use ajax to display "New User Registered"
                        $command = "INSERT INTO users (username, password) VALUES ('$username', '$password')";
                        $result = $mysqli->query($command);
                        setcookie("username", $username, time()+1000, "/");
                        header("Location:favorites.php");

                }else{
                //if userame is present check password
                        $command = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";
                        $result = $mysqli->query($command);

                        if (mysqli_num_rows($result)==0){
                                echo "<script>alert('Incorrect Password')</script>";
                        }else{
                                setcookie("username", $username, time()+1000, "/");
                                header("Location:favorites.php");
                        }
                }
                $mysqli->close();
        }


?>
	<div id = "container">
		<!-- includes: logo, banner -->
        <div id = "top">
			<div id = "logo_set">
                <a href = "home.php" style="text-decoration:none; color:inherit;">
                    <img id = "logo" src = "logo.png" alt = "UTag Logo">
                    <p id = "utag">UTag</p>
                    <p id = "phrase">University of Texas at Austin Guide</p>
                </a>
            </div>
            <img id = "banner" src = "suggestions.jpg" alt = "UT Campus Image">
        </div>

		<div id = "menu">		
			<a href = "home.php">Home</a>
			<div class = "dropdown">
				<form class = "dropbutton" action = "activitiesList.php" method = "get">
                    <button>Activity Type</button>
                </form>
				<div class = "activitycontent">
					<ul>
						<li><a href = "outdoor.php">Outdoor Activities</a></li>
						<li><a href = "indoor.php">Indoor Activities</a></li>
						<li><a href = "entertainment.php">Entertainment</a></li>
						<li><a href = "study.php">Study Spots</a></li>
						<li><a href = "dining.php">Dining</a></li>
						<li><a href = "sports.php">Sports</a></li>
					</ul>
				</div>
			</div>
			<a href = "about.php">About Us</a>
			<a href = "resources.php">Resources</a>
			<a href = "suggestionsPage.php">Suggestions</a>
			<a href = "favorites.php">Favorites</a>
			<a href = "color.php">Page Customization</a>
			
			<div id="searchbar">
            	<button id="searchButton" onclick="expandSearchBar();"><i id="icon" class="fa fa-search"></i></button>
                <form id="searchForm" method="POST" action="search.php">
                    <input id="searchbox" name="searchbox" type="text" placeholder="search tag" >
                </form>
            </div>
			</div>
		<div id = "content">
			<form  method = "post" id = 'loginform' name = 'loginform' action="login.php">
                        <h1> Login or Register </h1>
                        <p>
                                Username <input type = "text" name = "username"/><br>
				<br>
				Password <input type = "password" name = "password"/>
                        </p>
                        <p>
                                <input type = "submit" value = "Submit" name = "button" id = "button"/>
                                <input type = "reset" value = "Reset" name = "button" id = "button"/>
                        </p>
                        </form>
		</div>
		<div id = "footer">
			Brinnah Welmaker | Last Updated: 05/03/2021
		</div>
	</div>

</body>

