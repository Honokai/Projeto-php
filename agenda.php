<?php 
require_once("config/teste.php");
session_start();
$con = new Conexao();

$conexao = $con->estabelecon();

$query = mysqli_query($conexao, "select * from agenda where usuario_id=". $_SESSION['login'] ."");
?>