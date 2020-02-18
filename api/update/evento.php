<?php 
  require_once("../../config/BancoDados.php");
  $banco = new BancoDados;
  $conexao = $banco->conexao();
  $data = str_replace("T"," ",$_POST['data']); $data = substr($data,0,19);
  $query = "update agenda set data_ag='".$data."' where usuario_id=".$_POST['login']." and nome='".$_POST['nome']."'";
  $result = $conexao->prepare($query);
  $result->execute();
  if($result->execute()){
    http_response_code(200);
    header('Content-Type: application/json;charset=utf-8');
    echo json_encode(array("resposta"=>"sucesso"));
  }else{
    http_response_code(404);
    header('Content-Type: application/json;charset=utf-8');
    echo json_encode($query);
  }
?>