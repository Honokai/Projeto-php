<?php 
$title="Login";
require_once('config/connection.php');
?>
<!DOCTYPE html>
<html lang="pt">
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
    
    
    <link rel="stylesheet" type="text/css" href="style/main.css"/>
    <script type="text/javascript" src="validacao.js"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.js"></script>

</head>
<body id="login">
    
    <?php include_once("./template/navbar.html");?>
    
    <div class="loginback">
        <div class="container container-fluid">
            <div class="card centro resize">
                <img src="img/default.png" class="card-img-top img">
                <div class="card-body">
                    <h5 class="card-title alinhamento">Login</h5>
                    <p class="card-text">
                        <form method="POST" action="validar.php">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Endereço de e-mail</label>
                                <input type="text" class="form-control" name="email" id="e-mail" aria-describedby="emailHelp" placeholder="e-mail">
                                <div class="alert alert-warning alert-dismissible fade show" id="alerta" style="text-align:center; display: none" role="alert">
                                    Usuário não cadastrado!
                                    <button type="button" id="fechar" class="close" aria-label="Close">&times;</button>
                                </div>
                                <small id="emailHelp" class="form-text text-muted">Seu e-mail nunca será exposto conosco.</small>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Senha</label>
                                <input type="password" name="senha"class="form-control" id="exampleInputPassword1" placeholder="senha">
                            </div>
                            <div class="form-group form-check alinhamento">
                                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                <label class="form-check-label" for="exampleCheck1">Check me out</label><br>
                                <a class="btn btn-link" href="registro.php">Não tem conta? Registre-se aqui.</a>

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

