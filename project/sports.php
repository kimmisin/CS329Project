<!DOCTYPE html>
<html lang = "en">
<head>
	<title> Sports Locations </title>
	<meta charset = "UTF-8">
	<meta name = "description" content = "UT Austin Guide">
	<meta name = "author" content = "Braden Wu, Kimmi Sin">
    <link rel = "stylesheet" href = "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link href = "starter.css" rel = "stylesheet">
	<link href = "locationList.css" rel ="stylesheet">
	<script src = "searchBar.js"></script>
	<!-- add js or css files as needed-->
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
			<h1> Sports </h1>
			<div class = "activity">
				<img src = "https://upload.wikimedia.org/wikipedia/commons/2/26/Darrell_K_Royal-Texas_Memorial_Stadium_at_Night.jpg" alt = "DKR" width = "300" height = "200">
				<div class = "text">
					<h3> Darrell K Royal Stadium </h3>
					<p> Home of the Texas Longhorns </p>
					<p> <strong> Tags: </strong> Sports </p>
					<a href = "dkr.php"> Read More! </a>
				</div>
			</div>
			
			<div class = "activity">
				<img src = "https://texassports.com/common/controls/image_handler.aspx?thumb_id=0&image_path=/images/2018/1/24/Gregory_Gym_Exterior.jpg" alt = "Greg">
				<div class = "text">
					<h3> Gregory Gym </h3>
					<p> Play basketball, workout, or even dance here at Gregory Gym </p>
					<p> <strong> Tags: </strong> Sports </p>
					<a href = "greg.php"> Read More! </a>
				</div>
			</div>

			<div class = "activity">
				<img src = "https://assets.simpleviewinc.com/simpleview/image/fetch/c_limit,q_75,w_1200/https://assets.simpleviewinc.com/simpleview/image/upload/crm/austin/14-c7a77e14a87f449_c7a780b2-e9a1-d5c5-f2de5939d795cd50.jpg" alt = "Circuit of the Americas">
				<div class = "text">
					<h3> Circuit of the Americas </h3>
					<p> Love Racing? The Circuit of the Americas racetrack is located right outside Austin </p>
					<p> <strong> Tags: </strong> Sports </p>
					<a href = "circuit.php"> Read More! </a>
				</div>
			</div>
			
			<div class = "activity">
				<img src = "https://www.henselphelps.com/wp-content/uploads/2017/08/The-University-of-Texas-Frank-C-Erwin-Center-Stage-I-IL-I-1000x684.jpg" alt = "Frank Erwin Center">
				<div class = "text">
					<h3> Frank Erwin Center </h3>
					<p> Love UT Basketball? Get seats here at the Frank Erwin Center </p>
					<p> <strong> Tags: </strong> Sports </p>
					<a href = "fec.php"> Read More! </a>
				</div>
			</div>

			<div class = "activity">
				<img src = "https://images.squarespace-cdn.com/content/v1/5d8a96d04346587a1f6629ba/1592260403194-5ZC09Q1J4CWZLE4Y6UHP/ke17ZwdGBToddI8pDm48kKtijf5x5S0rIV7X_qDH3dB7gQa3H78H3Y0txjaiv_0fDoOvxcdMmMKkDsyUqMSsMWxHk725yiiHCCLfrh8O1z5QPOohDIaIeljMHgDF5CVlOqpeNLcJ80NK65_fV7S1UaZbTVdO5VSPAOxIcVIbmIFLIFeVDbQiz7iBIgNCzklBDD2o6CESiqIlH5ssNFrtmA/abp+bouldering+www_.jpg?format=1000w" alt = "Bouldering">
				<div class = "text">
					<h3> Austin Bouldering Project </h3>
					<p> Test your upper body strength by bouldering at the Austin Bouldering Project </p>
					<p> <strong> Tags: </strong> Sports </p>
					<a href = "bouldering.php"> Read More! </a>
				</div>
			</div>
		</div>

		<div id = "footer">
			Braden Wu | Kimmi Sin | Last Updated: 04/05/2021
		</div>
	</div>

</body>
</html>
page;
?>
