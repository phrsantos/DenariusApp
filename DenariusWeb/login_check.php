<?php

include 'connect.php';
session_start();

$nome = null;
$senha = null;
$id = null;
$senhaError = $nomeError = "";

if(!empty($_POST))
{
	$nome = $_POST['nome'];
	$senha = $_POST['senha'];
}

if($nome !== null and $senha !== null)
{
	$sql = "SELECT * FROM tabela WHERE nome = '$nome'";
	$resultado = mysql_query($sql, $connect) or die(mysql_error());
	mysql_close($connect);

	$linha = mysql_fetch_array($resultado);

	$password = $linha['senha'];
	$id = $linha['id'];
	
	$senhamd5 = md5($senha, true);

	if($password !== $senha_md5)
	{		
		
		#header("Location: login.php");
		$senhaError = $senhamd5;
		
	}
	else
	{
		$_SESSION['nome'] = $nome;
		$_SESSION['senha'] = $senha;
		$_SESSION['id'] = $id;
		header("Location: paginaAdmin.php");
	}
}
else
{
	echo("Nome ou Senha em branco");
	
}

mysql_close($connect);


?>