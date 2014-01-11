<meta charset="UTF-8" />
<?php
	
	include("conn.php");
	
	$userName = $_POST['username'];
	$senha = $_POST['password'];
	
    
     
    $result = mysql_query("SELECT * FROM usuarios WHERE senha = '$senha'", $connect);
	$conta = mysql_num_rows($result);
	$fetch = mysql_fetch_array($result);
	
	if($conta == 1 ){
	
	$_SESSION['email'] = $fetch['email'];
	
	
	$_SESSION['username'] = $userName;
		header("Location: welcome.php");
	}else{
		echo 'AHUAHUH';
	}
	
	
?>