<?php
	$hostname = "localhost";    
    $username = "root"; 
    $password = "";   
 
    $connect = mysql_connect($hostname, $username, $password) or die(mysql_error());
    $db = mysql_select_db("painel") or die(mysql_error());
	
	session_start();
	if (!isset($_SESSION["username"])) {
		header("Location: index.php");
	} else {
		header("Location: welcome.php");
	}
	?>