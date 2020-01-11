<?php 
require_once('config/teste.php');



if($_SERVER['REQUEST_METHOD']=='POST'){
    $nome = $_POST['nome'];
    $senha = $_POST['senha'];
    echo $senha."//";
    $senha= md5($senha);
    echo $senha;
    $email = $_POST['email'];
    $ser = new Conexao();
    $db = $ser->estabelecon();
    $query = "insert into usuario (nome,senha,`e-mail`) values ('". $nome . "','" . $senha . "','" . $email . "')" ;
    $teste = mysqli_query($db,$query);
    echo mysqli_error($db);
}

?>