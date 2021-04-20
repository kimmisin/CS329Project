<!DOCTYPE html>
<html lang = "en">
<head>
	<title> McKinney Falls State Park </title>
	<meta charset = "UTF-8">
	<meta name = "description" content = "UT Austin Guide">
	<meta name = "author" content = "Braden Wu">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link href = "starter.css" rel = "stylesheet">
	<link href = "location.css" rel = "stylesheet">
	<script src="searchBar.js"></script>
	<script src = "location.js" defer> </script>
	<script src = "colors.js"></script>
	<script src = "eventheodds.js"></script>
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
			<h1> McKinney Falls State Park </h1>
			<div class = "bigPic">
				<img src = "mckinney1.jpg" id = "big" alt="Image of McKinney Falls" height = "400" width = "700">
			</div>
			<div class = "smallPic">
				<img src = "mckinney2.jpg" id = "small1" alt="Image of McKinney Falls" height = "100" width = "150" onclick = "changeImage(event)">
			</div>
			<div class = "smallPic">
				<img src = "mckinney3.jpg" id = "small2" alt="Image of McKinney Falls" height = "100" width = "150" onclick = "changeImage(event)">
			</div>
			<div class = "smallPic">
				<img src = "mckinney4.jpg" id = "small3" alt="Image of McKinney Falls" height = "100" width = "150" onclick = "changeImage(event)">
			</div>
			<div class = "text">
				<p> <strong> Location: </strong> <a href = "https://www.google.com/maps/place/McKinney+Falls+State+Park/@30.1836533,-97.7243831,17z/data=!3m1!4b1!4m13!1m7!3m6!1s0x8644b3be3538b38b:0xfb83098f6001c693!2sMcKinney+Falls+State+Park!8m2!3d30.1836487!4d-97.7221944!10e1!3m4!1s0x8644b3be3538b38b:0xfb83098f6001c693!8m2!3d30.1836487!4d-97.7221944"> 5808 McKinney Falls Pkwy, Austin, TX 78744 </a> </p> 
				<p> </p>
				<p> <strong> What is it?: </strong> This state park is dominated by a series of natural waterfalls, and you'll be amazed when you see them in person! It is also a popular camping and hiking location.</p>
				<p> </p>
				<p> <strong> Things to do: </strong> Hiking, Swimming, Camping, Waterfall </p>
				<p> </p>
				<p> <strong> Our Rating: </strong> To die for! </p>
				<p> </p>
				<p> <strong> Tags: </strong> Outdoors</p>
				<form action = 'addfavorite.php' method = 'POST'>
                    <input type = 'hidden' name = 'link' value = '6th.php'/>
                    <input type = 'submit' name = 'submit' value = "Add to Favorites"/>
                </form>
			</div>
		</div>

		<div id = "footer">
			Braden Wu | Last Updated: 03/31/2021
		</div>
	</div>

</body>
</html>
page;
?>
