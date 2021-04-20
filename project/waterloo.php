<!DOCTYPE html>
<html lang = "en">
<head>
	<title> Waterloo Adventures </title>
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
			<h1> Lake Travis Waterloo Adventures </h1>
			<div class = "bigPic">
				<img src = "waterloo1.jpg" id = "big" alt="Image of Waterloo Adventures" height = "400" width = "700">
			</div>
			<div class = "smallPic">
				<img src = "waterloo2.jpg" id = "small1" alt="Image of Waterloo Adventures" height = "100" width = "150" onclick = "changeImage(event)">
			</div>
			<div class = "smallPic">
				<img src = "waterloo3.jpg" id = "small2" alt="Image of Waterloo Adventures" height = "100" width = "150" onclick = "changeImage(event)">
			</div>
			<div class = "smallPic">
				<img src = "waterloo4.jpg" id = "small3" alt="Image of Waterloo Adventures" height = "100" width = "150" onclick = "changeImage(event)">
			</div>
			<div class = "text">
				<p> <strong> Location: </strong> <a href = "https://www.google.com/maps/place/Lake+Travis+Waterloo+Adventures/@30.4290346,-97.8922507,17z/data=!3m1!4b1!4m5!3m4!1s0x865b319b7e36bc97:0xfa1ab725a899e51b!8m2!3d30.42903!4d-97.890062"> 14529 Pocohontas Trail Suite A, Leander, TX 78641 </a> </p> 
				<p> </p>
				<p> <strong> What is it?: </strong> Waterloo Adventures is a floating water park found right here on Lake Travis. Guaranteed fun for all ages!</p>
				<p> </p>
				<p> <strong> Things to do: </strong> Swimming, Pinic, Water Sports </p>
				<p> </p>
				<p> <strong> Our Rating: </strong> Highly Recommended! </p>
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
