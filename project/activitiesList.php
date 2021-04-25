<!DOCTYPE html>
<html lang = "en">
<head>
	<title> Activities List </title>
	<meta charset = "UTF-8">
	<meta name = "description" content = "UT Austin Guide">
	<meta name = "author" content = "Braden Wu">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href = "starter.css" rel = "stylesheet">
	<link href = "activitiesList.css" rel = "stylesheet">
	<script src="searchBar.js"></script>
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

?>
			<h1 style = "text-align: center;"> Locations by Activity Type </h1>
			<div id="categoriesContainer">
				<div class = category id = "outdoor">
					<a href = "outdoor.php"><img src = "https://www.tripsavvy.com/thmb/FKvUCRFBhC-RpFEV8tAixroM0DQ=/950x0/filters:no_upscale():max_bytes(150000):strip_icc():format(webp)/GettyImages-500491816-5a830da3c6733500377bd4e4.jpg" alt = "Outdoor"></a>
					<h2> Outdoor Activities </h2>
				</div>
				
				<div class = "category" id = "study">
					<a href = "study.php"><img src = "https://upload.wikimedia.org/wikipedia/commons/0/0b/PCL3.JPG" alt = "PCL Library"></a>
					<h2> Study Spots </h2>
				</div>
				
				<div class = "category" id = "indoor">
					<a href = "indoor.php"><img src = "https://assets.simpleviewinc.com/simpleview/image/fetch/c_limit,q_75,w_1200/https://assets.simpleviewinc.com/simpleview/image/upload/crm/austin/museum-of-the-weird-ee8d7831042d4ba_ee8d7949-d7f3-bd48-21ac6cb9d2b50163.jpg" alt = "Museum of the Wierd"></a>
					<h2> Indoor Activites </h2>
				</div>
				
				<div class = "category" id = "dining">
					<a href = "dining.php"><img src = "https://s7d2.scene7.com/is/image/TWCNews/10_17_austin_homeslicepizzajpg" alt = "Homeslice Pizza"></a>
					<h2> Dining </h2>
				</div>

				<div class = "category" id = "entertainment">	
					<a href = "entertainment.php"><img src = "https://d1fvos7zvcf2gi.cloudfront.net/venues/762/photo/childish-gambino-austin-city-limits.jpg" alt = "ACL"></a>
					<h2> Entertainment </h2>
				</div>

				<div class = "category" id = "sports">
					<a href = "sports.php"><img src = "https://upload.wikimedia.org/wikipedia/commons/2/26/Darrell_K_Royal-Texas_Memorial_Stadium_at_Night.jpg" alt = "DKR Stadium"></a>			
					<h2> Sports </h2>
				</div>
			</div>
		</div>

		<div id = "footer">
			Braden Wu | Kimmi Sin | Last Updated: 04/05/2021
		</div>
	</div>

</body>
</html>