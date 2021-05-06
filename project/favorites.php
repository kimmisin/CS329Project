<!DOCTYPE html>
<html lang = "en">
<head>
    <title> Favorites</title>
    <meta charset = "UTF-8">
    <meta name = "description" content = "Favorites">
    <meta name = "author" content = "Brinnah Welmaker and Kimmi Sin">
    <link rel = "stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href = "starter.css" rel = "stylesheet">
    <link href = "locationList.css"  rel = "stylesheet">
    <script src = "colors.js"></script>
    <script src="searchBar.js"></script>
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
                    <input id="searchbox" type="text" placeholder="search" >
                </form>
            </div>
        </div>

		<div id = "content">
            <h1>Welcome to your favorite places!</h1>
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

    // redirect to login page if not logged in
    if (!isset($_COOKIE["username"])){
        header("Location:login.php");
    }
    // logged in already
    else {
    	$server = "spring-2021.cs.utexas.edu";
    	$user = "cs329e_bulko_brinnahw";
    	$pass = "ballet8nose5mere";
    	$database = "cs329e_bulko_brinnahw";
    	$mysqli = new mysqli ($server, $user, $pass, $database);
        if ($mysqli->connect_errno) {
        	die('Connect Error: ' . $mysqli->connect_errno . ":" . $mysqli->connect_error);
	   }

    	$username = $_COOKIE['username'];
    	$command = "SELECT * FROM favorites WHERE username = '$username'";
        $result = $mysqli->query($command);

        if (mysqli_num_rows($result)==0){
                echo "<p>No favorites added.</p>";
        }
        else{
    		while ($row = $result->fetch_assoc()){
    			echo "<div class = 'activity'>";
    			echo "<img src = " . $row['image'] . " alt = favorite image>";

    			echo "<div class = 'text'>";
    			echo "<h3>" . $row['title'] . "</h3>" ; 
    			echo "<a class='readmore' href = " . $row['favorite'] . "> Read More! </a><br>";
    			echo "<br>";
    			echo "<form action = 'removefavorite.php' method = 'POST'>";
    			echo "<input type = 'hidden' name = 'link' value = " . $row['favorite'] . "'/>";
    			echo "<input type = 'submit' name = 'submit' value = 'Remove from Favorites'/>";
    			echo "</form></div></div>";
            }

        }
    }
?>
		</div>
        
        <div id = "footer">
            Brinnah Welmaker | Kimmi Sin | Last Updated: 05/03/2021
        </div>
    </div>
</body>
</html>
