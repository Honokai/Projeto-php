
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
    <link rel="stylesheet" type="text/css" href="style/main.css"/>
    <link rel="stylesheet" type="text/css" href="style/bootstrap.min.css"/>
    
    
    
    <script type="text/javascript" src="mask/jquery.mask.js"></script>  

    <script type="text/javascript" charset="utf8" src="js/jquery.dataTables.min.js"></script>
  <!--  TESTE -->
    <link rel="stylesheet" type="text/css" href="style/jquery.dataTables.min.css"/>
    <link href='packages/core/main.css' rel='stylesheet' />
    <link href='packages/daygrid/main.css' rel='stylesheet' />

    <script src='packages/core/main.js'></script>
    <script src='packages/daygrid/main.js'></script>

    <script>

      document.addEventListener('DOMContentLoaded', function() {
        var calendarEl = document.getElementById('calendar');

        var calendar = new FullCalendar.Calendar(calendarEl, {
          plugins: [ 'dayGrid']
        });

        calendar.render();
      });

    </script>

</head>
<body>
    
    <?php include_once("./template/navbar.html");?>
    <div id='calendar'></div>
</body>
</html>