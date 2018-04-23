<?php
include "header.php";

if(isset($_COOKIE['chal2'])){
	$x = $_COOKIE['chal2'];	
} else {
	$x = "nope";
}

if($x == "ae903f36d2f1be9383961ee566b7d40819baf506e89113706d2ca51cfb3ac1e2"){
	echo "Email me the following: Nz6uEvQNtvEDzW4s<br><a href=\"/\">Home</a>";
} else { 
	echo "Looks like you are trying to skip ahead...<br><a href=\"/\">Home</a>";
}
include "footer.php";
?>
