<?php 
require_once('config/teste.php');

$id = $_GET['id'];
$nome = $_GET['nome'];
$data = $_GET['data'];
$descricao = $_GET['descricao'];
$horario = $_GET['horario'];

$cone = new Conexao;
$query = "insert into agenda (`usuario_id`,`Nome`,`data_ag`,`Descricao`,`horario`) values ('". $id."','" . $nome . "','" . $data . "','" . $descricao . "','". $horario ."')" ;
$db = $cone->estabelecon();
    $query = mysqli_query($db,$query);
    
    if(!$query){
        echo mysqli_error($db);
    }else{ 
        echo "Evento adicionado com sucesso";
    }

?>