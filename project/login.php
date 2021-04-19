<?php
if (isset($_POST['username']) && isset($_POST['password'])){
        $usern = $_POST["username"];
        $pass = $_POST["password"];

        $loggedIn = false;
        $file = fopen("users.txt", "r") or die("cant open file");

        while(!feof($file)){
                $user = fgets($file);
                list($fileuser, $filepass) = explode(':', $user);

                if (trim($fileuser) == $usern && trim($filepass) == $pass){
                        $loggedIn = true;
                        break;
                }
        }

        if ($loggedIn){
                setcookie("username", $usern, 2147483647, "/");
                
                header("Location: favorites.html");
                
        }else{
                header("Location: favorites.html");
        }

        fclose($file);
}
?>
