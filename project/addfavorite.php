<?php

if (isset($_POST['link'])){
	$link = $_POST['link'];

	header("Location:" . $link);

}

?> 
