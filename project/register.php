<?php
	if (isset($_POST['newpassword']) && isset($_POST['newusername'])) {

		$usern = $_POST['newusername'];
		$pass = $_POST['newpassword'];

		$loggedIn = false;
		$nameError = false;

		$file = fopen("users.txt", "r") or die("cant open file");

		while(!feof($file)){
			$user = fgets($file);
			$loginfo = explode(':', $user);

			if ($username == $usern){
				$nameError = true;
				break;
			}
		}
		fclose($file);

		if ($nameError){
			header("Location: register.html");
		}else{
			setcookie("username", $usern, time() + 1000, "/");
			$file = fopen("users.txt", "a") or die  ("can't open file to write");
			$txt = $usern . ":";
			fwrite($file, $txt);
			$txt2 = $pass . "\n";
			fwrite($file, $txt2);
			fclose($file);

			header("Location: favorites.php");
		}
	}

?>
