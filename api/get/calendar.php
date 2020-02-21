<?php 
  require_once("../../config/BancoDados.php");
  $banco = new BancoDados;
  $conexao = $banco->conexao();
  $char = $conexao->prepare("set names utf8");
  $char->execute();
  $teste = $_GET['login'];
  $query = "select id,nome title,data_ag start,descricao description from agenda a where usuario_id=".$teste;
  $result = $conexao->prepare($query);
  $result->execute(); $dados = [];
  $evento = array();
  while($linha = $result->fetch(PDO::FETCH_ASSOC)){
      array_push($evento, $linha);
  }
  header('Content-Type: application/json;charset=utf-8');
  echo json_encode($evento);
?>