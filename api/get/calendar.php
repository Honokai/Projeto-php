<?php 
  require_once("../../config/BancoDados.php");
  $banco = new BancoDados;
  $conexao = $banco->conexao();
  $teste = $_GET['login'];
  $query = "select id,nome title,data_ag start from agenda a where usuario_id=".$teste;
  $result = $conexao->prepare($query);
  $result->execute(); $dados = [];
  $evento = array();
  while($linha = $result->fetch(PDO::FETCH_ASSOC)){
      array_push($evento, $linha);
  }
  header('Content-Type: application/json');
  echo json_encode($evento);
?>