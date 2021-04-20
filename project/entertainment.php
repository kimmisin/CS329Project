<!DOCTYPE html>
<html lang = "en">
<head>
	<title> Entertainment </title>
	<meta charset = "UTF-8">
	<meta name = "description" content = "UT Austin Guide">
	<meta name = "author" content = "Braden Wu">
    <link rel = "stylesheet" href = "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link href = "starter.css" rel = "stylesheet">
	<link href = "locationList.css" rel ="stylesheet">
	<script src="searchBar.js"></script>
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
                </a>
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
			<h1> Entertainment Locations </h1>
			<div class = "activity">
				<img src = "https://dancingastronaut.com/wp-content/uploads/2018/05/Austin-City-Limits-Tickets.png" alt = "ACL" width = "300" height = "200">
				<div class = "text">
					<h3> Austin City Limits</h3>
					<p> Annual Music Festival hosted within Zilker Park </p>
					<p> <strong> Tags: </strong> Entertainment </p>
					<a href = "acl.php"> Read More! </a>
				</div>
			</div>
			
			<div class = "activity">
				<img src = "https://i.insider.com/5a99824e487ff99b038b46f6?width=1100&format=jpeg&auto=webp" alt = "SXSW" width = "300" height = "200">
				<div class = "text">
					<h3> South By Southwest </h3>
					<p> Annual Media/Technology Conference hosted within Downtown Austin. </p>
					<p> <strong> Tags: </strong> Entertainment </p>
					<a href = "sxsw.php"> Read More! </a>
				</div>
			</div>

			<div class = "activity">
				<img src = "https://upload.wikimedia.org/wikipedia/commons/2/2d/Zach_topfer_theatre_austin_2014.jpg" alt = "ZACH" width = "300" height = "200">
				<div class = "text">
					<h3> ZACH Theatre </h3>
					<p> The ZACH Theatre is the oldest Theatre Group in Texas </p>
					<p> <strong> Tags: </strong> Entertainment </p>
					<a href = "zach.php"> Read More! </a>
				</div>
			</div>
			
			<div class = "activity">
				<img src = "https://upload.wikimedia.org/wikipedia/commons/thumb/0/0e/Long_Center_Side_Entrance.jpg/1200px-Long_Center_Side_Entrance.jpg" alt = "long" width = "300" height = "200">
				<div class = "text">
					<h3> The Long Center for Performing Arts </h3>
					<p> A well renown and popular performing arts venue located right on the Colorado River. </p>
					<p> <strong> Tags: </strong> Entertainment </p>
					<a href = "long.php"> Read More! </a>
				</div>
			</div>

			<div class = "activity">
				<img src = "https://assets.simpleviewinc.com/simpleview/image/upload/c_limit,h_1200,q_75,w_1200/v1/clients/austin/Sixth_Street_Nightlife_Courtesy_Austin_CVB_5816f624-ed92-4b56-9555-043c755c3cb3.jpg" alt = "6th Street" width = "300" height = "200">
				<div class = "text">
					<h3> 6th Street </h3>
					<p> 6th Street is the lively home of Austin's Nightlife </p>
					<p> <strong> Tags: </strong> Entertainment </p>
					<a href = "6th.php"> Read More! </a>
				</div>
			</div>
			
		</div>

		<div id = "footer">
			Kimmi Sin | Last Updated: 03/10/2021
		</div>
	</div>

</body>
</html>
page;
?>
