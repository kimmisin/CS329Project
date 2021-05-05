<!DOCTYPE html>
<html lang = "en">
<head>
	<title> Suggestions Page </title>
	<meta charset = "UTF-8">
	<meta name = "description" content = "UT Austin Guide">
	<meta name = "author" content = "Kimmi Sin">
    <link rel = "stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href = "starter.css" rel = "stylesheet">
	<link href = "suggestions.css" rel = "stylesheet">
	<script src="jquery-3.6.0.js"></script>
	<script src="searchBar.js"></script>
	<script src="suggestions.js"></script>
	<script src ="colors.js"></script>
</head>

<body id = "body">
<?php
	error_reporting(E_ALL);
	ini_set("display_errors", "on");

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

	// email: store the valid email into emailList.txt if it doesn't already exist
	if (isset($_POST['email'])) {
		$email = $_POST['email'];
		$unique = true;
		$file = fopen("emailList.txt", "r");
		$line = trim(fgets($file));
		while(! feof($file)) {
			// username matches one in the file: abort
			if ($line == $email) {
				$unique = false;
				break;
			}
			$line = trim(fgets($file));
		}
		fclose($file);
		if ($unique) {
			$file = fopen("emailList.txt", "a");
			$store = $email."\n";
			fwrite($file, $store);
			fclose($file);
			echo '<script type="text/JavaScript">alert("Your email has been added to our email list. Thank you for subscribing!");</script>';
		}
		else {
			echo '<script type="text/JavaScript">alert("This email is already subscribed.");</script>';
		}
	}
	// survey: store the input into surveyInput.txt
	elseif (isset($_POST['surveySubmit'])) {
		$affil = $_POST['affiliation'];
		$exper = $_POST['experience'];
		$likes = $_POST['interest'];
		$com = $_POST['comments'];

		$likesString = "";
		$size = count($likes);
		foreach ($likes as $i => $value) {
			if ($i == $size-1) {$likesString = $likesString.$value;}
			else {$likesString = $likesString.$value.', ';}
		}

		$file = fopen("surveyInput.txt", "a");
		$store = "Affiliation:".$affil." Experience:".$exper." Interest:[".$likesString."] Comments:".$com."\n";
		fwrite($file, $store);
		fclose($file);
		echo '<script type="text/JavaScript">alert("Survey submited, thank you for your input!");</script>';
	}
?>
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

		<div id = "rightnav">
			<form method = "POST" onsubmit="return validateEmail(this)" action="suggestions.php">
				Subcribe for website updates:
				<div id = "email_textarea">
					<input name ="email" type="text" placeholder="JaneDoe@gmail.com" required>
				</div>
				<input id="email" type = "submit" value = "Submit">
			</form>
		</div>

		<div id = "content">
			<h1> Help Improve Our Website </h1>
			<p> 
				Fill out the survey form below to aid in the future development of this site. Your input will guide the site's focus on displaying specific activity types and create a more user friendly environment.
			</p>
			<form method = "POST" onsubmit="return validateSurvey(this)" action="suggestions.php">
				<!-- Dropdown for user affiliation with UT -->
				<div class = "form_item">
				<label> 
					Are you affiliated with UT Austin?
				</label>
				<select id = "affiliation" name="affiliation">
					<option selected = "selected" value="-">-</option>
					<option value="faculty"> Faculty </option>
					<option value="student"> Student </option>
					<option value="prospective"> Prospective Student </option>
					<option value="unafiliated"> Not Affiliated </option>
					<option value="other"> Other </option>
				</select>
				</div>

				<!-- Dropdown for user's experience with Austin -->
				<div class = "form_item">
					<label>
						What is your experience with Austin?
					</label>
					<select id = "experience" name="experience">
						<option selected = "selected" value="-">-</option>
						<option value="resident"> Austin Resident </option>
						<option value="few"> Visited a few times </option>
						<option value="never"> Never Visited </option>
					</select>
				</div>

				<!-- Radio buttons for user's interested activity types -->
				<div class = "form_item">
					<label>
						Indicate which of the following activity types you are interested in our site displaying more locations of.
					</label>
					<div id = "checkbox">
						<label><input name = "interest[]" type = "checkbox" value = "Outdoor">Outdoor Activities </label>
						<label><input name = "interest[]" type = "checkbox" value = "Indoor">Indoor Activities </label>
						<label><input name = "interest[]" type = "checkbox" value = "Entertainment"> Entertainment </label>
						<label><input name = "interest[]" type = "checkbox" value = "Study">Study Spots </label>
						<label><input name = "interest[]" type = "checkbox" value = "Dining">Dining </label>
						<lable><input name = "interest[]" type = "checkbox" value = "Sports">Sports </label>
					</div>
				</div>

				<!-- Textarea for user suggestions and comments -->
				<div class = "form_item">
					<label>If you have location recommendations, a suggestion for a new activity type, or any comments about the website and its functionalities, please enter them below.</label>
					<div id = "textarea">	
						<textarea name = "comments" placeholder="Type your input here."></textarea>
					</div>
				</div>
				<input id="resetBtn" type = "reset" value = "Reset">
				<input id="surveyForm" type = "submit" name="surveySubmit" value = "Submit">
				
			</form>
		</div>

		<div id = "footer">
			Kimmi Sin | Last Updated: 05/04/2021
		</div>
	</div>

</body>
</html>

