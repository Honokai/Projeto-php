<?php 
  require_once("../../config/BancoDados.php");
  $banco = new BancoDados;
  $conexao = $banco->conexao();
  $data = substr($_POST['data'],0,24); 
  $data = date('Y-m-d H:i:s',strtotime($data)); 
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