<!DOCTYPE html>
<html lang = "en">
<head>
	<title> Project Homepage </title>
	<meta charset = "UTF-8">
	<meta name = "description" content = "UT Austin Guide">
	<meta name = "author" content = "Braden Wu, Brinnah Welmaker">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link href = "starter.css" rel = "stylesheet">
	<link href = "colors.css" rel = "stylesheet">
	<link href = "home.css" rel = "stylesheet">
	<script src="eventheodds.js"></script>
	<script src="searchBar.js"></script>
	<script src = "colors.js"></script>
	<script src = "home.js"></script>
</head>

<?php
	error_reporting(E_ALL);
	ini_set("display_errors", "on");

	if (isset($_POST["colorSettings"])){
		if (isset($_POST["colorMode"])){
			$mode = $_POST["colorMode"];
		}else{
			$mode = "Day Mode";
		}
		if (isset($_POST["textColor"])){
			$color = $_POST["textColor"];
		}else{
			$color = "black";
		}
		setcookie("color", $mode, time() + 3600, "/");
		setcookie("text", $color, time() + 3600, "/");
		setcookie("updated", "yes", time() + 1, "/");
		Header('Location: '.$_SERVER['PHP_SELF']);
	}else if (isset($_COOKIE["updated"])){
		updatedPage();
	}else{
		defaultPage();
	}
	
	if (isset($_COOKIE["color"])){
		$value = $_COOKIE["color"];
		if ($value == "Night Mode"){
			echo "<script> nightMode(); </script>";
		}else{
			echo "<script> dayMode(); </script>";		
		}
	}

	if (isset($_COOKIE["text"])){
		$value = $_COOKIE["text"];
		if ($value == "black"){
			echo "<script> textBlack(); </script>";
		}else if ($value == "white"){
			echo "<script> textWhite(); </script>";		
		}else if ($value == "red"){
			echo "<script> textRed(); </script>";		
		}else if ($value == "blue"){
			echo "<script> textBlue(); </script>";		
		}else{
			echo "<script> textOrange(); </script>";		
		}
	}
	
function defaultPage(){

print<<<page
<body id = "body">
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
        	<img id = "banner" src = "home.jpg" alt = "UT Campus Image">
        </div>

		<div id = "menu">
			<a href='home.php'>Home</a>
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
			<a href = "color.php">Page Customization </a>

			<div id="searchbar">
            	<button id="searchButton" onclick="expandSearchBar();"><i id="icon" class="fa fa-search"></i></button>
                <form id="searchForm" method="POST" action="search.php">
                    <input id="searchbox" name="searchbox" type="text" placeholder="search tag" >
                </form>
            </div>
		</div>

		<div id = "content">	
			<h1> Page Customization </h1>
			<p>Use the form below to modify the website's background color and text color for optimal user experience.</p>
			<form id = "customization" method = "POST" action = "color.php">
				<label> <strong> Page Color Setting: </strong> </label>
				<label><input type = "radio" name = "colorMode" value = "Night Mode"> Night Mode</label>
				<label><input type = "radio" name = "colorMode" value = "Day Mode"> Day Mode</label>

				<label> <strong> Text Color Setting: </strong> </label>
				<label><input type = "radio" name = "textColor" value = "black"> Black</label>
				<label><input type = "radio" name = "textColor" value = "white"> White</label>
				<label><input type = "radio" name = "textColor" value = "red"> Red</label>
				<label><input type = "radio" name = "textColor" value = "blue"> Blue</label>
				<label><input type = "radio" name = "textColor" value = "orange"> Orange</label>

				<input class="btn" type = "reset" value = "Reset">
				<input class="btn" type = "submit" name = "colorSettings" value = "Change Settings">
			</form>
		</div>

		<div id = "footer">
			Braden Wu | Kimmi Sin | Last Updated: 05/04/2021
		</div>

	</div>
</body>
</html>
page;
}

function updatedPage(){

print<<<page2
<body id = "body">
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
			<a href = "color.php">Page Customization </a>

			<div id="searchbar">
            	<button id="searchButton" onclick="expandSearchBar();"><i id="icon" class="fa fa-search"></i></button>
                <form id="searchForm" method="POST" action="search.php">
                    <input id="searchbox" name="searchbox" type="text" placeholder="search tag" >
                </form>
            </div>
		</div>

		<div id = "content">	
			<h1> Page Customization </h1>
			<p> Settings Updated! </p>
		</div>

		<div id = "footer">
			Braden Wu | Kimmi Sin | Last Updated: 05/04/2021
		</div>
	</div>
</body>
</html>
page2;
}
?>
