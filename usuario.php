<?php 

require_once("config/connection.php");

$dado = $_GET['data'];
$query = mysqli_query($conexao,"select * from usuario where nome like '".$dado."%'");
$row = mysqli_num_rows($query);

if($row != 0)
    echo 1;
else
    echo 0;
?>