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
    <script type="text/javascript" src="js/jquery-3.4.1.js"></script>
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
          locale:'pt-br',
          plugins: [ 'interaction','dayGrid', 'timeGrid'],
          selectable: true,
          header: {
            left: 'prev,next today',
            center: 'title',
            right: 'dayGridMonth,timeGridWeek,timeGridDay'
        },
        editable: true,
        eventSources: [
          {
            url: "api/get/calendar.php",
            extraParams: {
              login: <?php echo $_SESSION['login'] ?>,
            }
          }
        ],
        eventDrop: function(info){
          $.ajax({
            url: "api/update/evento.php",
            method: 'POST',
            data: {
              login: <?php echo $_SESSION['login'] ?>,
              data: info.event.start.toISOString(),
              nome: info.event.title
            },
            complete: function(data){
              console.log(data);
            }
          });
        },
        eventClick: function(){
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
    <div class="modal fade" id="modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            ...
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary">Save changes</button>
          </div>
        </div>
      </div>
    </div>
</body>
</html>