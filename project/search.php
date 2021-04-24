<!DOCTYPE html>
<html lang = "en">
<head>
	<title> Search Functionality </title>
	<meta charset="UTF-8">
	<meta name="description" content="PHP file for search bar functionality">
	<meta author="name" content="Kimmi Sin">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link href = "starter.css" rel = "stylesheet">
	<script src="jquery-3.6.0.js"></script>
	<script src="searchBar.js"></script>
	<script src="colors.js"></script>
</head>

<body id = "body">
<?php
	error_reporting(E_ALL);
	ini_set("display_errors", "on");

	if (isset($_COOKIE["color"])){
		$value = $_COOKIE["color"];
		if ($value == "Night Mode"){
			echo "<script> setNight(); </script>";
		}else{
			echo "<script> setDay(); </script>";		
		}
	}

	$userSearch = $_POST['searchbox'];
	$userSearch = strtolower(trim($userSearch));

	print <<<page
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
			<a href = "color.php">Page Customization </a>

			<div id="searchbar">
            	<button id="searchButton" onclick="expandSearchBar();"><i id="icon" class="fa fa-search"></i></button>
                <form id="searchForm" method="POST" action="search.php">
                    <input id="searchbox" name="searchbox" type="text" placeholder="search tag" >
                </form>
            </div>
		</div>

		<div id = "content">
		<h1> Search Results for $userSearch </h1>	
		<p id="results"> $userSearch </p>
page;
	echo '<script type="text/JavaScript"> 
	     	$(document).ready(function(){
				tags = {
					"art": ["blanton"], 
					"basketball": ["fec", "greg"], 
					"bouldering": ["bouldering"],
					"camping": ["krause", "mckinney", "zilker"],
					"coffee": ["medici", "monkey", "union"],
					"dance": ["greg"], 
					"dining": ["6th", "franklins", "gourdoughs", "gus", "homeslice", "patio", "union"],
					"entertainment": ["6th", "acl", "long", "sxsw", "zach"],
					"film": ["sxsw"], 
					"football": ["dkr"], 
					"hiking": ["krause", "mayfield", "mckinney","zilker"], 
					"hot springs": ["krause"], 
					"indoors": ["blanton", "bouldering", "bullock", "capitol", "thinkery", "weird"], 
					"museum": ["blanton", "bullock", "capitol", "thinkery", "weird"], 
					"music": ["6th", "acl", "fec", "long"],
					"outdoors": ["krause", "mayfield", "mckinney", "waterloo", "zilker"], 
					"picnic": ["waterloo", "zilker", "krause", "mayfield", "mckinney"], 
					"nature": ["capitol", "krause", "mayfield", "mckinney","zilker"], 
					"racing": ["circuit"], 
					"rock climbing": ["bouldering"], 
					"running": ["greg", "mckinney", "zilker"], 
					"sports": ["bouldering", "circuit", "dkr", "fec", "greg", "waterloo"],
					"study spots": ["fac", "medici", "monkey", "pcl", "union"], 
					"swimming": ["greg", "krause", "mckinney", "waterloo", "zilker"], 
					"theatre": ["bullock", "long", "zach"], 
					"volleyball": ["fec", "greg"], 
					"waterfalls": ["mckinney", "zilker"], 
					"weight lifting": ["greg"]
				};
				tags_size = Object.keys(tags).length;
				tags_keys = Object.keys(tags);

				locations = {
					"6th": "6th Street",
					"acl": "Austin City Limits",
					"blanton": "Blanton Museum of Art",
					"bouldering": "Austin Bouldering Project",
					"bullock": "Bullock Texas State History Museum",
					"capitol": "Texas State Capitol",
					"circuit": "Circuit of the Americas",
					"dkr": "Darrell K Royal Stadium",
					"fac": "Flawn Academic Center",
					"fec": "Frank Erwin Center",
					"franklins": "Franklin\'s BBQ",
					"gourdoughs": "Gourdough\'s Public House",
					"greg": "Gregory Gym",
					"gus": "Gus\'s World Famous Fried Chicken",
					"homeslice": "Homeslice Pizza",
					"krause": "Krause Springs",
					"long": "The Long Center for the Performing Arts",
					"mayfield": "Mayfield Park and Nature Preserve",
					"mckinney": "McKinney Falls State Park",
					"medici": "Caffe Medici",
					"monkey": "Monkey Nest Coffee",
					"patio": "El Patio Mexican Food",
					"pcl": "Perry Castaneda Library",
					"sxsw": "South by Southwest",
					"thinkery": "Thinkery",
					"union": "Texas Union",
					"waterloo": "Lake Travis Waterloo Adventures",
					"weird": "Museum of the Weird",
					"zach": "ZACH Theatre",
					"zilker": "Zilker Park"
				};

			    // searched tag: remove whitespace and lowercase it all
			    //tag = $("#searchbox").val();
			    //tag = ($.trim(tag)).toLowerCase();
			    tag = $("#results").html();
			    tag = ($.trim(tag)).toLowerCase();

			    console.log("tag: " + tag);
			    // iterate through the tags dictionary
		    	for (i=0; i<tags_size; i++) {
		    		console.log(tags_keys[i])
		    		// tag found
		    		if (tag == tags_keys[i]) {
		    			values = tags[tag];
		    			console.log(values);
		    			output = "";
		    			for (j=0; j<values.length; j++) {
		    				console.log(values[j]);
		    				file_name = values[j];
		    				link_name = locations[file_name];
							output = output + "<p class=\"results_link\"><a href=\"" + file_name + ".php\">" + link_name + "</a></p>"
						}
						$("#results").html(output);
						break;
		    		}
		    		// tag was not found
		    		else if (i==tags_size-1) {
		    			$("#results").html("No locations found. Please check spelling and ensure only one existing tag was searched for.");
		    		}
		   		}
			});
		</script>';
	print <<<footer
     	</div>
    </div>
    <div id = "footer">
		Kimmi Sin | Last Updated: 04/24/2021
	</div>
</body>
</html>
footer;
?>