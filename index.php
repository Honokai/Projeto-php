<?php 
$title="Home";
?>
<!DOCTYPE html>
<html lang="pt">
<head>
    <?php 
        session_start();
        require_once("agenda.php");
        if((!isset($_SESSION['login']) == true) and (!isset($_SESSION['senha'])== true)){
            header("location: login.php");
        }else{
        }
    ?>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> <?php echo $title ?></title>
    
    <!-- bootstrap links -->    
    
    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/jquery-3.4.1.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/validacao.js"></script>
    <script type="text/javascript" src="js/novoevento.js"></script>
    <link rel="stylesheet" type="text/css" href="style/main.css"/>
    <link rel="stylesheet" type="text/css" href="style/bootstrap.min.css"/>
    
    
    
    <script type="text/javascript" src="mask/jquery.mask.js"></script>  

    <script type="text/javascript" charset="utf8" src="js/jquery.dataTables.min.js"></script>
  <!--  TESTE -->
    <link rel="stylesheet" type="text/css" href="style/jquery.dataTables.min.css"/>
    

</head>
<body>

    <?php include_once("./template/navbar.html");?>

    <?php echo "<input id='usuario_id' type='text' hidden value='".$_SESSION['login']."'>"?>
    <div id="bot"style="width: 100%; height: 40px">
        <div style="margin-top: 0.5%; float:right; margin-bottom:0.5%">
            <button type="button" id="ativa" class="btn btn-primary">
                Refresh
            </button>
            <button type="button" id="adicionar" class="btn btn-primary">
                Adicionar
            </button>
        </div>
    </div>
    <div id="adiciona" style="width: 100vw; margin-top: 1%;margin-bottom: 1%">

    </div>

    <div id="automatico">
        <?php
        include('template/tablehead.html');
        include('template/tablefoo.html');
        ?>
    </div>

</body>
</html>

