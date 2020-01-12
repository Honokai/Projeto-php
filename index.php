<?php 
$title="Home";
require_once("agenda.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> <?php echo $title ?></title>

    <!-- bootstrap links -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>
    <link rel="stylesheet" type="text/css" href="style/main.css"/>
    <script type="text/javascript" src="validacao.js"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.js"></script>

</head>
<body>
    <?php include_once("./template/navbar.html");?>

    <div style="width: 100%; height: 40px">
        <div style="margin-top: 0.5%; float:right;">
            <button type="button" class="btn btn-primary">Primary</button>
        </div>
    </div>

    <?php
     $contador=0;
     $limite = mysqli_num_rows($query);
     while($row = mysqli_fetch_assoc($query)){
        $nome = $row['Nome'];
        $data = $row['data_ag'];
        $descricao = $row['Descricao'];
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

