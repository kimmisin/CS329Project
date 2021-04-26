<!DOCTYPE html>
<html lang = "en">
<head>
	<title> Long Center for Performing Arts </title>
	<meta charset = "UTF-8">
	<meta name = "description" content = "UT Austin Guide">
	<meta name = "author" content = "Braden Wu and Kimmi Sin">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link href = "starter.css" rel = "stylesheet">
	<link href = "location.css" rel = "stylesheet">
	<script src="searchBar.js"></script>
	<script src = "location.js" defer> </script>
	<script src = "colors.js"></script>
	<script src = "eventheodds.js"></script>
</head>

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
			<a href = "suggestions.php">Suggestions</a>
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
<?php
	if (isset($_COOKIE["color"])){
		$value = $_COOKIE["color"];
		if ($value == "Night Mode"){
			echo "<script> setNight(); </script>";
		}else{
			echo "<script> setDay(); </script>";		
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


print<<<page
			<h1> The Long Center for the Performing Arts </h1>
			<div class = "bigPic">
				<img src = "long1.jpg" id = "big" alt="Image of the Long Center" height = "400" width = "700">
			</div>
			<div class = "smallPic">
				<img src = "long2.jpg" id = "small1" alt="Image of the Long Center" height = "100" width = "150" onclick = "changeImage(event)">
			</div>
			<div class = "smallPic">
				<img src = "long3.jpg" id = "small2" alt="Image of the Long Center" height = "100" width = "150" onclick = "changeImage(event)">
			</div>
			<div class = "smallPic">
				<img src = "long4.jpg" id = "small3" alt="Image of the Long Center" height = "100" width = "150" onclick = "changeImage(event)">
			</div>
			<div class = "text">
				<p> <strong> Location: </strong> <a href = "https://www.google.com/maps/place/The+Long+Center+for+the+Performing+Arts/@30.2584574,-97.7523029,15.25z/data=!4m5!3m4!1s0x8644b504febb0b39:0xd41d7a37bd8f6b60!8m2!3d30.260252!4d-97.7510921"> 701 W Riverside Dr, Austin, TX 78704 </a> </p> 
				<p> </p>
				<p> <strong> What is it?: </strong> The Long Center for the Performing Arts is a venue for musicians, performers, and artists alike to demonstrate their talents. Right in the middle of downtown, this venue is a must-visit attraction for everyone. </p>
				<p> </p>
				<p> <strong> Things to do: </strong> Music, Theatre </p>
				<p> </p>
				<p> <strong> Our Rating: </strong> Highly Recommended! </p>
				<p> </p>
				<p> <strong> Tags: </strong> Entertainment, Music, Theatre </p>
				<form action = 'addfavorite.php' method = 'POST'>
                    <input type = 'hidden' name = 'link' value = 'long.php'/>
                    <input type = 'submit' name = 'submit' value = "Add to Favorites"/>
                </form>
			</div>
		</div>
		
		<div id = "footer">
			Braden Wu | Kimmi Sin | Last Updated: 04/24/2021
		</div>
	</div>

</body>
</html>
page;
?>
