<!DOCTYPE html>
<html lang = "en">
<head>
	<title> Resources Page </title>
	<meta charset = "UTF-8">
	<meta name = "description" content = "UT Austin Guide">
	<meta name = "author" content = "Kimmi Sin">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href = "starter.css" rel = "stylesheet">
	<link href = "resources.css" rel = "stylesheet">
	<script src="searchBar.js"></script>
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
			<a href = "color.php">Page Customization </a>


			<div id="searchbar">
            	<button id="searchButton" onclick="expandSearchBar();"><i id="icon" class="fa fa-search"></i></button>
                <form id="searchForm" method="POST" action="search.php">
                    <input id="searchbox" type="text" placeholder="search" >
                </form>
            </div>
		</div>

		<div id = "content">
			<h1> UT Student Resources </h1>
			<p> Find commonly used UT sites and resources linked below.</p>
			<p> 
				<a href = "https://onestop.utexas.edu/">Texas One Stop</a>
				UT's resource page for registration, financial aid, paying tuition, ordering transcripts, and more.
			</p>
			<p> 
				<a href = "https://utdirect.utexas.edu/apps/student/emergency_contact/">Emergency Contact Information</a>
				Update your emergency contact information in case of emergencies on campus. EID login required.
			</p>
			<p> 
				<a href = "https://cmhc.utexas.edu/">Counseling and Mental Health Center</a>
				Get confidential and secure help at UT's CMHC.
			</p>
			<p> 
				<a href = "https://registrar.utexas.edu/">Registrar</a>
				Check the registrar page for the current course schedule and university catalogs for class planning. Use in combination with IDA 2.0 (listed below) for optimal class planning.
			</p>
			<p> 
				<a href = "https://utdirect.utexas.edu/apps/degree/audits/">IDA 2.0</a>
				Track your coursework progress, transfer credits, and degree requirements with UT's Interactive Degree Audit tool. EID sign in required.
			</p> 
			<p> 
				<a href = "https://utdirect.utexas.edu/registrar/ris.WBX">RIS</a>
				Take a look at your registration information sheet to check for student information, status, bars, and registration times. EID login required.
			</p>
			<p> 
				<a href = "https://utdirect.utexas.edu/faweb/cash/">CASH</a>
				Check your aid status, requirements needed, and financial aid history. 
			</p>

			<p> 
				<a href = "https://registrar.utexas.edu/calendars/20-21">Academic Calendar</a>
				Keep track of semester deadlines for the current school year's Fall and Spring semesters.
			</p>
			<p> 
				<a href = "https://finaid.utexas.edu/">Office of Financial Aid</a>
				Get all your financial questions answered at the office of financial aid. Phone Number: (512)232-6988
			</p>

			<h2> Scholarships </h2>
			<p> Having difficulty finding scholarships to apply to? Below are a few helpful links. </p>
			<p> 
				<a href = "https://starsscholarship.org/">Stars Scholarship Fund</a>
				The scholarship is available for US citizens who are full-time undergraduate or graduate students. An award of $2000 is typically rewarded. The application deadline is March 31, 2021 at 5pm CST.
			</p>
						<p> 
				<a href = "https://www.careeronestop.org/Toolkit/Training/find-scholarships.aspx">Career One Stop</a>
				Career One Stop's scholarship finder allows you to filter by level of study, award type, location, gender, affiliations, and much more.
			</p>
			<p> 
				<a href = "https://onestop.utexas.edu/managing-costs/scholarships-financial-aid/apply/scholarship-finder/">UT Scholarship Finder</a>
				UT's scholarship finder that matches you to scholarships administered by the Office of Scholarships and Financial Aid.
			</p>


		</div>

		<div id = "footer">
			Kimmi Sin | Last Updated: 03/09/2021
		</div>
	</div>

</body>
</html>
page;
?>
