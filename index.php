<?php 
$title="Home";
?>
<!DOCTYPE html>
<html lang="pt-br">
<?php include_once("template/header.html"); ?>
<body>
    
    <?php include_once("./template/navbar.html");?>
    <p></p>
    <div id='calendar'></div>
    <input type="text" id='login' style="visibility: hidden; width:1px; height:0" value="<?php echo $_SESSION['login']?>">
    <input type="text" id='namevento' style="visibility: hidden; width:1px; height:0" value="">
    <input type="text" id='dataevento' style="visibility: hidden; width:1px; height:0" value="">
    <input type="text" id='horaevento' style="visibility: hidden; width:1px; height:0" value="">
    <input type="text" id='datet' style="visibility: hidden; width:1px; height:0" value="">
    <input type="text" id='horat' style="visibility: hidden; width:1px; height:0" value="">
    <input type="text" id='descricao' style="visibility: hidden; width:1px; height:0" value="">
    <div class="modal" id="modal" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <div class="card-header">
                <ul class="nav nav-tabs card-header-tabs" id="listadados" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" href="#tabevento" role="tab" aria-controls="evento" aria-selected="true">Evento</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link"  href="#feedback" role="tab" aria-controls="feedback" aria-selected="false">Acontecimentos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#outra" role="tab" aria-controls="outra" aria-selected="false">Outra</a>
                    </li>
                </ul>
            </div>
            <div class="modal-body" >
                <div class="tab-content mt-3">
                    <div class="tab-pane active" id="tabevento" role="tabpanel">
                        <input type="text" id='descricao' style="visibility: hidden" value="">
                            <div class="input-group mb-3" style="float:left">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="">Nome Evento</span>
                                </div>
                                <input type="text" id='nomevento' class="form-control" aria-label="Username" aria-describedby="basic-addon1">
                            </div>
                            <div class="input-group mb-3" style="float:left">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="">Data</span>
                                </div>
                                <input type="date" id='datainicio' class="form-control" aria-label="Username" aria-describedby="basic-addon1">
                            </div>
                            <div class="input-group mb-3" style="float:left">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="">Horário</span>
                                </div>
                                <input type="text" id='horarioinicio' class="form-control" aria-label="Username" aria-describedby="basic-addon1">
                            </div>
                            <div class="input-group mb-3" style="float:left">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="">Data término</span>
                                </div>
                                <input type="date" id='datatermino' class="form-control" aria-label="Username" aria-describedby="basic-addon1">
                            </div>
                            <div class="input-group mb-3" style="float:left">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="">Horário término</span>
                                </div>
                                <input type="text" id='horariotermino' class="form-control" aria-label="Username" aria-describedby="basic-addon1">
                            </div>
                            <div class="input-group mb-3" style="float:left">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">Descrição</span>
                                </div>
                                <textarea class="form-control" id='descricaoevento' aria-label="With textarea"></textarea>
                            </div>
                        <div class="modal-footer">
                            <button type="button" id="enviar" class="btn btn-primary">Salvar</button>
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar e cancelar</button>
                        </div>
                    </div>
                    <div class="tab-pane" id="feedback" role="tabpanel">
                        <div class="input-group mb-3" style="float:left">
                            <div class="input-group-prepend">
                                <span class="input-group-text">Feedback</span>
                            </div>
                            <textarea class="form-control" id='feedbackdescricao' aria-label="With textarea"></textarea>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
    </div>