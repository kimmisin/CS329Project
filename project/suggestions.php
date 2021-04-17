<?php
	//error_reporting(E_ALL);
	//ini_set("display_errors", "on");

	$page = file_get_contents("suggestions.html");
	print($page);

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