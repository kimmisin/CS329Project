<!DOCTYPE html>
<html lang = "en">
<head>
        <title> Favorites</title>
        <meta charset = "UTF-8">
        <meta name = "description" content = "Favorites">
        <meta name = "author" content = "Brinnah Welmaker">
        <link rel = "stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link href = "starter.css" rel = "stylesheet">
        <link href = "about.css" rel = "stylesheet">
        <script src = "colors.js"></script>
        <script src="searchBar.js"></script>
        <script src = "eventheodds.js"></script>
	<script src = "login.php"></script>
</head>

<body id = "body">
<?php
	if (isset($_COOKIE["color"])){
		$value = $_COOKIE["color"];
		if ($value == "Night Mode"){
			echo "<script> setNight(); </script>";
		}else{
			echo "<script> setDay(); </script>";		
		}
	}

print<<<page
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
			<h1>Welcome to your favorite places!</h1>
			<h3> The functionality of seeing your favorites and adding to favorites to your account will be done next sprint using MySQL.</h3>
		</div>
        <hr>
        <div id = "footer">
            Brinnah Welmaker | Last Updated: 04/18/2021
        </div>
    </div>
</body>
</html>
page;
?>
