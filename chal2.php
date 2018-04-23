<?php
include "header.php";

if(isset($_COOKIE['chal1'])){
	$x = $_COOKIE['chal1'];	
} else {
	$x = "nope";
}

if($x == "20297c102348c1f9fadd725b1366da20d416a881a5efd54df23e0eeb0815826a"){
	if(isset($_COOKIE['chal2']) && ((json_decode($_COOKIE['chal2'],true)['solved'] == true) || $_COOKIE['chal2'] == "ae903f36d2f1be9383961ee566b7d40819baf506e89113706d2ca51cfb3ac1e2")){
		echo "If you give a mouse a cookie, will he modify it?<br><a href=\"solve2.php\">Click here for your flag</a>";
		$h = hash('sha256',"Nz6uEvQNtvEDzW4s");
		setcookie("chal2",$h,time()+9999999);
	} else {
		$arr = array('solved' => False);
		$c = json_encode($arr);
		echo "I gave you a cookie.. did you eat it?";
		setcookie("chal2",$c,time()+99999999);
	}
} else { 
	echo "Looks like you are trying to skip ahead...<br><a href=\"/\">Home</a>";
}
include "footer.php";
?>
