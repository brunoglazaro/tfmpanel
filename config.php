<meta charset="UTF-8" />
<?php
$host = "127.0.0.1";
$user = "root";
$passw= "";
$db = "painel";

$con = mysql_connect($host, $user, $passw) or print (mysql_error());
print "-<b>Conexão OK!</b>";
mysql_close($con);
?>