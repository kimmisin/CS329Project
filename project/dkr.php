<!DOCTYPE html>
<html lang = "en">
<head>
	<title> DKR Stadium </title>
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
			<h1> Darrell K Royal Stadium </h1>
			<div class = "bigPic">
				<img src = "dkr1.jpg" id = "big" alt="Image of the Darrell K Royal Stadium" height = "400" width = "700">
			</div>
			<div class = "smallPic">
				<img src = "dkr2.jpg" id = "small1" alt="Image of the Darrell K Royal Stadium" height = "100" width = "150" onclick = "changeImage(event)">
			</div>
			<div class = "smallPic">
				<img src = "dkr3.jpg" id = "small2" alt="Image of the Darrell K Royal Stadium" height = "100" width = "150" onclick = "changeImage(event)">
			</div>
			<div class = "smallPic">
				<img src = "dkr4.jpg" id = "small3" alt="Image of the Darrell K Royal Stadium" height = "100" width = "150" onclick = "changeImage(event)">
			</div>
			<div class = "text">
				<p> <strong> Location: </strong> <a href = "https://www.google.com/maps/place/Darrell+K+Royal+-+Texas+Memorial+Stadium/@30.2837011,-97.7344377,17z/data=!3m1!4b1!4m5!3m4!1s0x8644b59a5cb89a09:0x224823229e1b2d5b!8m2!3d30.2836972!4d-97.7325972"> 2139 San Jacinto Blvd, Austin, TX 78712 </a> </p> 
				<p> </p>
				<p> <strong> What is it?: </strong> Home of the Texas Longhorns, the Darrell K Royal Stadium is the place to go during football season. Scream your heart out with your fellow fans as the Longhorns take on their foes!</p>
				<p> </p>
				<p> <strong> Things to do: </strong> Football </p>
				<p> </p>
				<p> <strong> Our Rating: </strong> For You! </p>
				<p> </p>
				<p> <strong> Tags: </strong> Sports, Football </p>
				<form action = 'addfavorite.php' method = 'POST'>
                    <input type = 'hidden' name = 'link' value = 'dkr.php'/>
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
