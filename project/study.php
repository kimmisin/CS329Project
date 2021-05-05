<!DOCTYPE html>
<html lang = "en">
<head>
	<title> Study Spots </title>
	<meta charset = "UTF-8">
	<meta name = "description" content = "UT Austin Guide">
	<meta name = "author" content = "Braden Wu, Kimmi Sin">
    <link rel = "stylesheet" href = "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link href = "starter.css" rel = "stylesheet">
	<link href = "locationList.css" rel ="stylesheet">
	<script src = "searchBar.js"></script>
	<script src = "colors.js"></script>
	<!-- add js or css files as needed-->
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
			<h1> Study Spots </h1>
			<div class = "activity">
				<img src = "https://upload.wikimedia.org/wikipedia/commons/0/0b/PCL3.JPG" alt = "PCL">
				<div class = "text">
					<h3> Perry Castaneda Library (PCL) </h3>
					<p> Main Library on the UT Campus </p>
					<p> <strong> Tags: </strong> Study Spots </p>
					<a class = "readmore" href = "pcl.php"> Read More! </a>
				</div>
			</div>
			
			<div class = "activity">
				<img src = "https://austinot.com/wp-content/uploads/2015/02/Monkey-Nest-Coffee-Austin.jpg" alt = "Monkey Nest Coffee">
				<div class = "text">
					<h3> Monkey Nest Coffee </h3>
					<p> Quirky coffee shop located 15 min from campus </p>
					<p> <strong> Tags: </strong> Study Spots, Coffee </p>
					<a class = "readmore" href = "monkey.php"> Read More! </a>
				</div>
			</div>

			<div class = "activity">
				<img src = "https://lh5.googleusercontent.com/p/AF1QipO_A5AA38w2SuYLnBylxULlDQYy6lHXFAaEGCyp" alt = "Cafe Medici">
				<div class = "text">
					<h3> Caffee Medici </h3>
					<p> Popular coffee shop located next to UT on Guadaulpe </p>
					<p> <strong> Tags: </strong> Study Spots, Coffee </p>
					<a class = "readmore" href = "medici.php"> Read More! </a>
				</div>
			</div>
			
			<div class = "activity">
				<img src = "https://upload.wikimedia.org/wikipedia/commons/thumb/c/c5/Ut-tower-flawn-academic-night.jpg/1280px-Ut-tower-flawn-academic-night.jpg" alt = "FAC">
				<div class = "text">
					<h3> Flawn Academic Center (FAC) </h3>
					<p> The FAC provides students with a collaborative learning space right on campus </p>
					<p> <strong> Tags: </strong> Study Spots </p>
					<a class = "readmore" href = "fac.php"> Read More! </a>
				</div>
			</div>

			<div class = "activity">
				<img src = "https://upload.wikimedia.org/wikipedia/commons/5/5b/Texas_Union.JPG" alt = "Union">
				<div class = "text">
					<h3> Texas Union </h3>
					<p> Like the FAC, the Union provides restaurants and study spaces for students. </p>
					<p> <strong> Tags: </strong> Study Spots, Dining, Coffee </p>
					<a class = "readmore" href = "union.php"> Read More! </a>
				</div>
			</div>
		</div>

		<div id = "footer">
			Braden Wu | Kimmi Sin | Last Updated: 05/04/2021
		</div>
	</div>

</body>
</html>
page;
?>
