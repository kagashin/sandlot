<?php
include "header.php";
// var_dump($_POST);

if(isset($_POST['pass'])){
	$user_inp = $_POST['pass'];
} else {
	$user_inp = "";
}

if($user_inp == "sNvyMKWvtR7iqDQr"){
	$h = hash('sha256',"sNvyMKWvtR7iqDQr");
	echo "Email me with the password you used<br><a href=\"/\">Back to home</a>";
	setcookie("chal1",$h,time()+99999999);
} else {
	echo "Nope, try again<br><a href=\"/chal1.php\">Back</a>";
}

include "footer.php";
?>
