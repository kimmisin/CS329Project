<!DOCTYPE html>
<html lang = "en">
<head>
	<title> Flawn Academic Center </title>
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
	<script src = "jquery-3.6.0.js"></script>
	<script src = "addfavorite.js"></script>
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
			<h1> Flawn Academic Center </h1>
			<div class = "bigPic">
				<img src = "fac1.jpg" id = "big" alt="Image of the FAC" height = "400" width = "700">
			</div>
			<div class = "smallPic">
				<img src = "fac2.jpg" id = "small1" alt="Image of the FAC" height = "100" width = "150" onclick = "changeImage(event)">
			</div>
			<div class = "smallPic">
				<img src = "fac3.jpg" id = "small2" alt="Image of the FAC" height = "100" width = "150" onclick = "changeImage(event)">
			</div>
			<div class = "smallPic">
				<img src = "fac4.jpg" id = "small3" alt="Image of the FAC" height = "100" width = "150" onclick = "changeImage(event)">
			</div>
			<div class = "text">
				<p> <strong> Location: </strong> <a href = "https://www.google.com/maps/place/Peter+T.+Flawn+Academic+Center+(FAC)/@30.2862606,-97.7425055,17z/data=!3m1!4b1!4m5!3m4!1s0x8644b59d243cb369:0x9036118404cdcc50!8m2!3d30.286256!4d-97.7403168"> 2304 Whitis Ave, Austin, TX 78712 </a> </p> 
				<p> </p>
				<p> <strong> What is it?: </strong> The Flawn Academic Center, or FAC, provides a collaborative space for students to work. Located right by the UT Tower, it is close by to student housing, and remains open late into the night.</p>
				<p> </p>
				<p> <strong> Things to do: </strong> Studying </p>
				<p> </p>
				<p> <strong> Our Rating: </strong> We recommend! </p>
				<p> </p>
				<p> <strong> Tags: </strong> Study Spots </p>
				<form id='favoriteForm' method = 'POST'>
		    		<input type = 'hidden' name = 'link' value = 'fac.php'/>
					<input type = 'hidden' name = 'title' value = 'Flawn Academic Center'/>
                    <input type = 'hidden' name = 'image' value = 'fac1.jpg'/>
                    <input type = 'submit' name = 'submit' value = "Add to Favorites"/>
                </form>
                <div id='favorite_status'></div>
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
