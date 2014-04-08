<html>

<head>
<title>Cadastrando...</title>

<script type="text/javascript">
function cadastrosuccessfully() {
	setTimeout("window.location='painel.php'", 4000);
}
</script>
</head>

<body>


<?php
$host = "localhost";
$user = "root";
$pass = "";
$banco = "painel";
$conexao = mysql_connect($host, $user, $pass) or die(mysql_error());
mysql_select_db($banco) or die(mysql_error());
?>
<?php
$nome=$_POST['nome'];
$sobrenome=$_POST['sobrenome'];
$pais=$_POST['pais'];
$estado=$_POST['estado'];
$cidade=$_POST['cidade'];
$email=$_POST['email'];
$senha=$_POST['senha'];

$sql = mysql_query("INSERT INTO usuarios(nome, sobrenome, paiis, estado, cidade, email, senha)
VALUES('$nome', '$sobrenome', '$pais', '$estado', '$cidade', '$email', 'senha')");
echo"<center><h2>Cadastro efetuado com sucesso!</h2></center>";
echo "<script>cadastrosuccessfully()</script>";
?>
</body>
</html>