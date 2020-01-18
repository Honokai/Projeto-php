<?php 
require_once('config/teste.php');

if($_SERVER['REQUEST_METHOD']=='POST'){
    $nome = $_POST['nome'];
    $senha = $_POST['senha'];
    $senha = md5($senha);
    $email = $_POST['email'];
    $ser = new Conexao();
    $db = $ser->estabelecon();
    $query = "insert into usuario (nome,senha,`e-mail`) values ('". $nome . "','" . $senha . "','" . $email . "')" ;
    $teste = mysqli_query($db,$query);
    if(!mysqli_errno($db))
        header("location:login.php");
}

?>