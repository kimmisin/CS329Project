<!DOCTYPE html>
<html lang = "en">
<head>
        <title> About Us </title>
        <meta charset = "UTF-8">
        <meta name = "description" content = "About Us">
        <meta name = "author" content = "Brinnah Welmaker">
        <link rel = "stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link href = "starter.css" rel = "stylesheet">
        <link href = "about.css" rel = "stylesheet">
        <script src = "colors.js"></script>
        <script src="searchBar.js"></script>
        <script src = "eventheodds.js"></script>
	<script src = "register.php"></script>
</head>

<?php
	if (isset($_COOKIE["color"])){
		$value = $_COOKIE["color"];
		if ($value == "Night Mode"){
			echo "<script> setNight(); </script>";
		}else{
			echo "<script> setDay(); </script>";		
		}
	}
?>

<body id = "body">
    <div id = "container">
        <!-- includes: logo, banner -->
        <div id = "top">
            <div id = "logo_set">
                <a href = "home.php" style="text-decoration:none; color:inherit;">
                <img id = "logo" src = "logo.png" alt = "UTag Logo">
                <p id = "utag">UTag</p>
                <p id = "phrase">University of Texas at Austin Guide</p>
            </div>
            <img id = "banner" src = "home.jpg" alt = "UT Campus Image">
        </div>

        <div id = "menu">               
            <!-- even the odds functionality -->
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
                    <input id="searchbox" type="text" placeholder="search" >
                </form>
            </div>
        </div>
        
		<div id = "content">
			<h1>Register</h1>
			<form action = "register.php" method = "post">
				<p>Username: <input type = 'text' name = 'newusername' size = '15'></p>
				<p>Password: <input type = 'password' name = 'newpassword' size = '15'></p>
				
				<p>
					<input type = 'submit' value = 'Register'>
					<input type = 'reset' value = 'Clear'>
				</p>
			<form>

				<a href = "login.php"><h3> Already a member? Log in here. </h3></a>
		 </div>
                <hr>
                <div id = "footer">
                Brinnah Welmaker | Last Updated: 04/18/2021
                </div>
        </div>

</body>
</html>

