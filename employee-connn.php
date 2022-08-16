<?php
// Employee-add
function OpenCon(){
	$dbhost = "localhost"; 
	$dbuser = "root";
	$dbpass = "";
	$db = "fngg";
	$connn = new mysqli($dbhost, $dbuser, $dbpass, $db) or die("Connect failed: %s\n". $connn -> error); 

	return $connn;
}
function CloseCon($connn){
	$connn -> close();
}
?>
