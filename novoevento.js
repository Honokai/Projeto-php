$(document).ready(function(){
    $("#horario").mask('AA:AA');
    $("#tabela").DataTable();
    $('#save').on("click", function(){
        var id,descricao, data, nome, horario;
        id = document.getElementById('usuario_id').value;
        descricao = document.getElementById('descrip').value;
        data = document.getElementById('data').value;
        nome = document.getElementById('evento').value;
        horario = document.getElementById('horario').value;
        console.log(data,nome,descricao);
        $.ajax({
            method: "GET",
            url: 'eventoup.php',
            data: {"id":id,"descricao":descricao,"data":data,"nome":nome,"horario": horario},
            success: function(data){
                console.log(data);
            }
        });
    });

    
});