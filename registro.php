<?php 
$title="Registro";

?>
<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> <?php echo $title ?></title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>
    <link rel="stylesheet" type="text/css" href="style/main.css"/>
    <script type="text/javascript" src="registro.js"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.js"></script>

</head>
<body class="">
    <?php include_once("./template/navbar.html");?>
    <div class="loginback">
        <div class="container container-fluid">
            <div class="card centro resize">
                <img src="img/default.png" class="card-img-top img">
                <div class="card-body">
                    <h5 class="card-title alinhamento">Registro</h5>
                    <p class="card-text">
                        <form action="cadastroup.php" method="POST">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Nome de usuário</label>
                                <input type="text" name="nome" class="form-control" id="nome" aria-describedby="emailHelp" placeholder="nome de usuário">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">E-mail</label>
                                <input type="email" class="form-control" name="email" id="e-mail" aria-describedby="emailHelp" placeholder="e-mail">
                                <small id="emailHelp" class="form-text text-muted">Seu e-mail nunca será exposto conosco.</small>
                            </div>
                            <div class="alert alert-warning alert-dismissible fade show" id="alerta" style="text-align:center; display: none" role="alert">
                                Usuário cadastrado!
                                <button type="button" id="fechar" class="close" aria-label="Close">&times;
                                </button>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Senha</label>
                                <input type="password" name="senha" class="form-control" id="senha" placeholder="senha">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Confirmação de senha</label>
                                <input type="password" class="form-control" id="confirmacao" placeholder="senha">
                            </div>
                            <div class="alinhamento">
                                <button type="submit" class="btn btn-primary alinhamento">Submit</button>
                            </div>
                        </form>
                    
                    </p>
                </div>
            </div>
        </div>
    </div>
    
    
</body>
</html>

