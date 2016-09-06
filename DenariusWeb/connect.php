<?php

 $connect = mysql_connect('localhost', 'root', '');
if(!$connect)
{
	die("Não foi possivel conectar: ".mysql_error()."</br>");
}
 $db_conexao = mysql_select_db('database', $connect);
if(!$db_conexao)
{
	die("Banco de dados não encontrado: ".mysql_error()."</br>");
}
?>