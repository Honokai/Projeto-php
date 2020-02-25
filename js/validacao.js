$(document).ready(function(){

    $('#e-mail').blur(function(){
        var valor = document.getElementById('e-mail').value;
        $.ajax({
            url: 'usuario.php',
            type: "GET",
            data: {data: valor},
            success: function (data){
                if(data == 0)
                    document.getElementById('alerta').style.display = "block";
            }

        });   
    });
    $('#enviar').on('click', function(){
        let login = $('#login').val();
        let nome = $('#nomevento').val();
        let datainicio = $('#datainicio').val();
        let horainicio = $('#horarioinicio').val();
        let datatermino = $('#datatermino').val();
        let horatermino = $('#horariotermino').val();
        let descricao = $('#descricaoevento').val();
        let nome1 = $('#namevento').val();
        let datainicio1 = $('#dataevento').val();
        let horainicio1 = $('#horaevento').val();
        let datatermino1 = $('#datet').val();
        let horatermino1 = $('#horat').val();
        let descricao1 = $('#descricao').val();
        console.log(nome1);
        $.ajax({
            url: 'api/update/modalupdate.php',
            type: 'POST',
            data:{
                "login":login,
                "nome":nome,
                "datainicio":datainicio,
                "horarioinicio":horainicio,
                "datatermino":datatermino ,
                "horariotermino":horatermino,
                "descricao": descricao, //atuais novos
                "nome1":nome1, //antigos
                "datainicio1":datainicio1,
                "horarioinicio1":horainicio1,
                "datatermino1":datatermino1 ,
                "horariotermino1":horatermino1,
                "descricao1": descricao1
            },
            complete: function(data,response){
                console.log(login);
                console.log(response);
                console.log(data);
                $("#modal").modal('toggle');
            }
        });
      });
      $('#listadados a').on('click', function (e) {
        e.preventDefault()
        $(this).tab('show')
      })
    
});
