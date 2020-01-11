<?php 
require_once("config/teste.php");

$conexao = new Conexao();
$db = $conexao->estabelecon();

$email = $_GET['email'];
$senha = $_GET['senha'];
$senha = md5($senha);

$query = mysqli_query($db, "select * from usuario where `e-mail` = '".$email."'");

$row = mysqli_fetch_assoc($query);
if($row['e-mail'] == $email && $row['senha'] == $senha){
    echo "Login efetuado, em segundos você será redirecionado";
}else{
    echo "Senha ou usuário incorreto";
}

?>