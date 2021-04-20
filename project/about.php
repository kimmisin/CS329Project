<!DOCTYPE html>
<html lang = "en">
<head>
    <title> About Us </title>
    <meta charset = "UTF-8">
    <meta name = "description" content = "About Us">
    <meta name = "author" content = "Brinnah Welmaker">
    <link rel = "stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href = "starter.css" rel = "stylesheet">
    <link href = "about.css" rel = "stylesheet">
	<script src = "colors.js"></script>
    <script src="searchBar.js"></script>
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
			<a href = "suggestions.php">Suggestions</a>
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
            <h1> About Us </h1>
            <p>Learn more about the creators of the ultimate Austin guide for UT students. All are current students studying at UT.</p>
            <br>
            <hr>
			
            <div class= "leftalign">
                <img class = "profile" src = "braden.png" alt = "braden">
                <div class="text">
                    <h3> Braden Wu </h3>
                    <h5>BIOCHEMISTRY MAJOR</h5>
                    <p>Some of my favorite things to do around Austin are going hiking and eating!</p>
                    <p><a class = "contact" href = "mailto:Braden.s.wu@gmail.com">CONTACT BRADEN</a></p>
                </div>
            </div>
            <hr>

    		<div class = "rightalign">
                <div class="text">
        			<h3 > Brinnah Welmaker</h3>
                    <h5>ART AND ENTERTAINMENT TECHNOLOGY MAJOR</h5>
                    <p>I love going to the greenbelt in the summer and finding new restaurants in Austin! I also enjoy shopping at the Domain and jogging on the Boardwalk at Lady Bird Lake.</p>
                    <p><a class = "contact" href = "mailto:bsw838@utexas.edu">CONTACT BRINNAH</a></p>
                </div>
                <img class= "profile" src = "brinnah.png" alt = "brinnah">
            </div>
            <hr>
    		
    		<div class = "leftalign">
    			<img class = "profile" src = "kimmi.png" alt = "kimmi">
                <div class="text">
        			<h3> Kimmi Sin</h3>
                    <h5>BIOCHEMISTRY MAJOR</h5>
        			<p>I love going to new food places and studying at coffee shops. If I'm not at a coffee shop you'll almost always find me at the Walter Geology Library studying.</p>
                    <p><a class = "contact" href = "mailto:kimmisin84@gmail.com">CONTACT KIMMI</a></p>
                </div>
            </div>
            <hr>
        </div>

        <div id = "footer">
            Brinnah Welmaker | Kimmi Sin | Last Updated: 04/05/2021
        </div>
    </div>
</body>
</html>
page;
?>
