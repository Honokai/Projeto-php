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
    <div class="modal" id="modal" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Evento</h5>
                </div>
                <div class="modal-body">
                    <div class="input-group mb-3" style="float:left">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="">Nome Evento</span>
                        </div>
                        <input type="text"id='nomevento' class="form-control" aria-label="Username" aria-describedby="basic-addon1">
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
                        <input type="time" id='horarioinicio' class="form-control" aria-label="Username" aria-describedby="basic-addon1">
                    </div>
                    <div class="input-group mb-3" style="float:left">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="">Descrição</span>
                        </div>
                        <input type="text" id='descricaoevento' class="form-control" aria-label="Username" aria-describedby="basic-addon1">
                    </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary">Salvar</button>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar e cancelar</button>
                </div>
            </div>
        </div>
    </div>