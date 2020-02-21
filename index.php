<?php 
$title="Home";
?>
<!DOCTYPE html>
<html lang="pt-br">
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
    <script type="text/javascript" src="js/popper.min.js"></script>
    <script type="text/javascript" src="js/jquery-3.4.1.js"></script>
    <script type="text/javascript" src="js/tooltip.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="style/main.css"/>
    <link rel="stylesheet" type="text/css" href="style/bootstrap.min.css"/>
    
    
    
    <script type="text/javascript" src="mask/jquery.mask.js"></script>  
    <script type="text/javascript" src="js/teste.js"></script> 
    <script type="text/javascript" charset="utf8" src="js/jquery.dataTables.min.js"></script>
  <!--  TESTE -->
    <link rel="stylesheet" type="text/css" href="style/jquery.dataTables.min.css"/>
    <link href='packages/core/main.css' rel='stylesheet' />
    <link href='packages/daygrid/main.css' rel='stylesheet' />
    <link href='packages/timegrid/main.css' rel='stylesheet' />

    <script src='packages/core/main.js'></script>
    <script src='packages/daygrid/main.js'></script>
    <script src='packages/timegrid/main.js'></script>
    <script src='packages/interaction/main.js'></script>
    <script src='packages/core/locales/pt-br.js'></script>

    <script>

      document.addEventListener('DOMContentLoaded', function() {
        var calendarEl = document.getElementById('calendar');

        var calendar = new FullCalendar.Calendar(calendarEl, {
          timezone: 'America/Fortaleza',
          locale:'pt-br',
          plugins: [ 'interaction','dayGrid', 'timeGrid'],
          selectable: true,
          editable: true,
          header: {
            left: 'prev,next today',
            center: 'title',
            right: 'dayGridMonth,timeGridWeek,timeGridDay'
        },
        eventSources: [
          {
            url: "api/get/calendar.php",
            extraParams: {
              login: <?php echo $_SESSION['login'] ?>,
            },
            color: 'yellow',   // an option!
            textColor: 'black' // an option!
          }
        ],
        eventRender: function(info) {
          var user = document.createElement('div');
          user.innerHTML = info.event.extendedProps.description;
          info.el.lastChild.lastChild.appendChild(user);
        },
        eventDrop: function(info){
          timezone: 'America/Noronha';
          $.ajax({
            url: "api/update/evento.php",
            method: 'POST',
            data: {
              login: <?php echo $_SESSION['login'] ?>,
              data: info.event.start.toString(),
              nome: info.event.title
            }
          });
        },
        dateClick: function(event){
          $('#calendar').fullCalendar('changeView', 'agendaDay');
        },
        eventClick: function(info){
          $.ajax({
            url:"api/get/dadoevento.php",
            type: 'GET',
            contentType: "charset=ISO-8859-1",
            data: {
              login: <?php echo $_SESSION['login'] ?>,
              data: info.event.start.toISOString(),
              nome: info.event.title
            },
            complete: function(data){
              console.log(data);
            }
          });
          $("#modal").modal('toggle');
        }
        });
        calendar.render();
      });

    </script>

</head>
<body>
    
    <?php include_once("./template/navbar.html");?>
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
                        <input type="date" id='dataevento' class="form-control" aria-label="Username" aria-describedby="basic-addon1">
                    </div>
                    <div class="input-group mb-3" style="float:left">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="">Início</span>
                        </div>
                        <input type="time" id='dataevento' class="form-control" aria-label="Username" aria-describedby="basic-addon1">
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