<?php 
require_once("config/teste.php");

session_start();
$conexao = new Conexao();
$db = $conexao->estabelecon();
$email = $_POST['email'];
$senha = $_POST['senha'];
$senha = md5($_POST['senha']);
$query = mysqli_query($db, "select * from usuario where `e-mail` = '".$email."'");

$row = mysqli_fetch_assoc($query);
if($row['e-mail'] == $email && $row['senha'] == $senha){
    $_SESSION['login'] = $row['id'];
    $_SESSION['nome'] = $row['nome'];
    $_SESSION['senha'] = $senha;
    header('location: index.php');
}else{
    unset($_SESSION['login']);
    unset($_SESSION['senha']);
    echo ("Erro: ".mysqli_error($db));
    echo ("Senha: ". $_SESSION['senha']);
    echo ("Senha no banco: ". $row['senha']);
}

?>