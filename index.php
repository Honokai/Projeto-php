<?php 
$title="Home";
?>
<!DOCTYPE html>
<html lang="en">
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
    
    <script type="text/javascript" src="config/jquery.min.js"></script>
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>
    <link rel="stylesheet" type="text/css" href="style/main.css"/>
    <link rel="stylesheet" type="text/css" href="style/bootstrap.min.css"/>
    <script type="text/javascript" src="validacao.js"></script>
    <script type="text/javascript" src="novoevento.js"></script>
    <script type="text/javascript" src="config/jquery-3.4.1.js"></script>
    
    <script type="text/javascript" src="mask/jquery.mask.js"></script>
    <script type="text/javascript" src="config/bootstrap.min.js"></script>


  <!--  TESTE -->
    <link rel="stylesheet" type="text/css" href="style/jquery.dataTables.min.css"/>
    <script type="text/javascript" charset="utf8" src="config/jquery.dataTables.min.js"></script>

</head>
<body>

    <?php include_once("./template/navbar.html");?>
    <?php echo "<input id='usuario_id' type='text' hidden value='".$_SESSION['login']."'>"?>
    <div style="width: 100%; height: 40px">
        <div style="margin-top: 0.5%; float:right; margin-bottom:0.5%">
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                Cadastrar evento
            </button>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Cadastramento de novo evento</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
        <form method="POST" action="validar.php">
            <div class="form-group">
                <label for="exampleInputEmail1">Nome do evento</label>
                    <input type="text" class="form-control" name="evento" id="evento" placeholder="Nome do evento">
            </div>
            <div class="form-group">
                <label for="Data">Data</label>
                <input type="date" name="data" id="data"class="form-control" id="Data">
            </div>
            <div class="form-group">
                <label for="horario">Horário</label>
                <input type="text" name="horario" id="horario" class="form-control" id="Data">
            </div>
            <div class="form-group">
                <label for="descrip">Descrição do evento</label>
                <textarea name="descrip" placeholder="Descrição do evento" id="descrip" class="form-control" aria-label="With textarea"></textarea>
            </div>
        </form>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="button" id="save" class="btn btn-primary">Save changes</button>
        </div>
        </div>
    </div>
    </div>
    <?php
     $contador=0;
     $limite = mysqli_num_rows($query);
     while($row = mysqli_fetch_assoc($query)){
        $nome = $row['Nome'];
        $data = $row['data_ag'];
        $descricao = $row['Descricao'];
        $horario = $row['horario']; 
        if($contador==0){
            include('template/tablehead.html');
        }
        include('template/agenda.html');
        if($contador == $limite)
            include('template/tablefoo.html');
        $contador++;
     }
    ?>
    
</body>
</html>

