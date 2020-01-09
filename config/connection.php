<?php 

    $db = "site";
    $user = 'root';
    $pass = '865358';
    $end = '127.0.0.1';
        
    $conexao = mysqli_connect($end,$user,$pass,$db);

    if(!$conexao){
        echo ("<script> alert('Estamos tendo problemas técnicos'); </script>");
        die();
    }
    else{
        
        
    }
    
?>