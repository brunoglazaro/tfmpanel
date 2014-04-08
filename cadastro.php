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
		echo '<center><div class="topo"><br>Painel Administrativo</div><br>&nbsp;</p><div class="text"><center><b>></b> Cadastrar Usuário [VERSÃO DESATIVADA]!</center></div>';
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
<form name="signup" method="post" action="cadastrando.php">
<br /> <br />Nome: <input type="text" name="nome" /><br /> <br />
Sobrenome: <input type="text" name="sobrenome" /><br /> <br />
País: <input type="text" name="pais" /><br /> <br />
Estado: <input type="text" name="estado" /><br /> <br />
Cidade: <input type="text" name="cidade" /><br /> <br />
E-mail: <input type="text" name="email" /><br /> <br />
Senha: <input type="password" name="senha" /><br /> <br />
<input type="submit" value="Cadastrar" />

</body>

</html>