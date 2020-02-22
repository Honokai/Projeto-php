<?php 

require_once("../../config/connection.php");
date_default_timezone_set('America/Fortaleza');
$bd = new BD();
$conexao = $bd->conexao();


$data = substr($_GET['data'],0,24);
$data = strtotime($data);
$data = date("Y-m-d H:m:s", $data); $hora = substr($data,11,19); $data = substr($data,0,10);
$nome=$_GET['nome']; $login = $_GET['login'];
$query = "select * from agenda where `usuario_id`=".$login." and nome='".$nome."' and `data_ag`='". $data . " " . $hora . "'";
$result = mysqli_query($conexao,$query); 
if($result = mysqli_query($conexao,$query)){
    echo json_encode(mysqli_fetch_assoc($result), true);
}else{
    echo json_encode($query, true);
}
?>

