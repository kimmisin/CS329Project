<!DOCTYPE html>
<html lang = "en">
<head>
	<title> Login/Registration Page </title>
	<meta charset = "UTF-8">
	<meta name = "description" content = "UT Austin Guide">
	<meta name = "author" content = "Brinnah Welmaker and Kimmi Sin">
    <link rel = "stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href = "starter.css" rel = "stylesheet">
    <link href = "login.css" rel = "stylesheet">
	<script src="jquery-3.6.0.js"></script>
	<script src="searchBar.js"></script>
	<script src ="colors.js"></script>
    <script>
        $(document).ready(function() {
            $("#loginform").submit(function(event) {
                event.preventDefault();
                $.ajax({
                    url: "loginSQL.php",
                    type: "POST",
                    data: $("#loginform").serialize(),
                    success: function(data) {
                        if (data == "SuccessfulLogin") {
                            document.getElementById('user_status').innerHTML = 'Sucessful Login: You will be redirected to your location favorites in 5 seconds.';
                            window.setTimeout(function() {location.href = 'favorites.php'}, 5000);
                        }
                        else if (data == "NewUserRegistered") {
                            document.getElementById('user_status').innerHTML = 'Sucessful Registration: You will be redirected to your location favorites in 5 seconds.';
                            window.setTimeout(function() {location.href = 'favorites.php'}, 5000);
                        }
                        else if (data == "FailedLogin") {
                            document.getElementById('user_status').innerHTML = 'Incorrect username or password. Please try again.';
                        }
                    }
                });
            });
        }); 
    </script>
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
            <img id = "banner" src = "suggestions.jpg" alt = "UT Campus Image">
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
    // color mode
    if (isset($_COOKIE["color"])){
        $value = $_COOKIE["color"];
        if ($value == "Night Mode"){
            echo "<script> setNight(); </script>";
        }else{
            echo "<script> setDay(); </script>";        
        }
    }

    // text color mode
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
            <h1> Login or Register </h1>
            <p> You are currently not logged into an account, please log in or register to view or add favorite locations.</p>
			<form method="POST" id="loginform" name="loginform">
                <label>Username: </label>
                <input type="text" name="username" id="username" required>
                <label>Password: </label>
                <input type="password" name="password" id="password" required>
                <div id="user_status"></div>
                <input class="btn" type="reset" value="Reset">
                <input class="btn" type="submit" value="Submit">
            </form>
		</div>
		<div id = "footer">
			Brinnah Welmaker | Kimmi Sin | Last Updated: 05/04/2021
		</div>
	</div>

</body>
</html>

