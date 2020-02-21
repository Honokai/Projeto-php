<?php 
require_once("../../config/BancoDados.php");
date_default_timezone_set('America/Fortaleza');
$bd = new BancoDados();
$conexao = $bd->conexao();
$data = substr($_GET['data'],0,24);
$data = strtotime($data);
$data = date("Y-m-d H:m:s", $data);
$hora = substr($data,11,19);
$data = substr($data,0,10);
$query = "select * from site.agenda where usuario_id=".$_GET['login']. " and nome='".$_GET['nome']."' and data_ag='". $data . " " . $hora . "'";
$result = $conexao->prepare($query);
$result->execute($parametros);
while($linha = $result->fetch(PDO::FETCH_ASSOC)){
    array_push($evento, $linha);
}
var_dump($linha);

//$linhas = ;
//print_r(array("query"=>$query, "Linhas"=>$linhas));
?>

