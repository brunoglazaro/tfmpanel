<!-- Conexão para verificar se o usuário tem permissão para entrar no painel -->
<?php
$host = "localhost";
$user = "root";
$passw = "";
$banco = "painel";
$conexao = mysql_connect($host, $user, $passw) or die(mysql_error());
mysql_select_db($banco) or die(mysql_error());
?>
<?php
	session_start();
	if(!isset($_SESSION["email"]) || !isset($_SESSION["senha"])) {
		header("Location: index.php");
		exit;
	} else {
		echo '<center><div class="topo"><br>Painel Administrativo</div><br>&nbsp;</p><div class="text"><center><b>></b> Bem-Vindo ao TFM PAINEL!</center></div>';
	}
?>
<!-- Fim da verificação -->

<html>
<meta charset="UTF-8">
<link href="include/style2.css" type="text/css" rel="stylesheet" media="all" />
<head>
<title>Painel</title>


</head>

<body>
<center>
   <p>&nbsp;</p>
  <p>&nbsp;</p>
<a href="#"><img src="include/img/ligar.png" alt="Ligar o Servidor"/></a> &nbsp;&nbsp;&nbsp;
<a href="#"><img src="include/img/reiniciar.png" alt="Reiniciar o Servidor" /></a>&nbsp;&nbsp;&nbsp;
<a href="#"><img src="include/img/evento.png" alt="Enviar Evento" /></a>&nbsp;&nbsp;&nbsp;
<a href="#"><img src="include/img/comando.png" alt="Enviar Comando" /></a>&nbsp;&nbsp;&nbsp;
<p>&nbsp;</p><a href="#"><img src="include/img/modulos.png" alt="Reiniciar Modulos" /></a>&nbsp;&nbsp;&nbsp;
<a href="cadastro.php"><img src="include/img/cadastrar.png" alt="Cadastrar Usuário" /></a>&nbsp;&nbsp;&nbsp;
<p>&nbsp;</p><a href="logout.php"><img src="include/img/deslogar.png" alt="Deslogar" /></a>
</center>
</body>

</html>