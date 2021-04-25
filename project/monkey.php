<!DOCTYPE html>
<html lang = "en">
<head>
	<title> Monkey Nest Coffee </title>
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
			<h1> Monkey Nest Coffee </h1>
			<div class = "bigPic">
				<img src = "monkey1.jpg" id = "big" alt="Image of Monkey Nest Coffee" height = "400" width = "700">
			</div>
			<div class = "smallPic">
				<img src = "monkey2.jpg" id = "small1" alt="Image of Monkey Nest Coffee" height = "100" width = "150" onclick = "changeImage(event)">
			</div>
			<div class = "smallPic">
				<img src = "monkey3.jpg" id = "small2" alt="Image of Monkey Nest Coffee" height = "100" width = "150" onclick = "changeImage(event)">
			</div>
			<div class = "smallPic">
				<img src = "monkey4.jpg" id = "small3" alt="Image of Monkey Nest Coffee" height = "100" width = "150" onclick = "changeImage(event)">
			</div>
			<div class = "text">
				<p> <strong> Location: </strong> <a href = "https://www.google.com/maps/place/Monkey+Nest+Coffee/@30.3277256,-97.7417714,17z/data=!3m1!4b1!4m5!3m4!1s0x8644ca58cd363bd3:0xe318a3a0dcd7fdb8!8m2!3d30.327721!4d-97.7395827"> 5353 Burnet Rd, Austin, TX 78756 </a> </p> 
				<p> </p>
				<p> <strong> What is it?: </strong> Love coffee and comfy atmospheres? If so, Monkey Nest Coffee is the study spot for you!. This small cafe is close to campus and is always full of students.</p>
				<p> </p>
				<p> <strong> Things to do: </strong> Studying </p>
				<p> </p>
				<p> <strong> Our Rating: </strong> Do It! </p>
				<p> </p>
				<p> <strong> Tags: </strong> Study Spots, Coffee </p>
				<form action = 'addfavorite.php' method = 'POST'>
                    <input type = 'hidden' name = 'link' value = '6th.php'/>
                    <input type = 'submit' name = 'submit' value = "Add to Favorites"/>
                </form>
			</div>
		</div>
		<div id = "footer">
			Braden Wu | Last Updated: 04/24/2021
		</div>
	</div>

</body>
</html>
page;
?>
