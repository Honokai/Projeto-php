<?php 
require_once("config/BancoDados.php");
$bd = new BancoDados();
$conexao = $bd->conexao();

$dado = $_GET['data'];

$query = "select * from usuario where `e-mail`='".$dado."'";
$result = $conexao->prepare($query);
$result->execute();
$row = $result->fetch(PDO::FETCH_ASSOC);

    if($row != 0)
        echo 1;
    else
        echo 0;

?>