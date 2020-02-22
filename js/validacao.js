
$(document).ready(function(){

    
    $('#e-mail').blur(function(){
        var valor = document.getElementById('e-mail').value;
        $.ajax({
            type: "GET",
            url: 'usuario.php',
            data: {data: valor},
            success: function (data){
                if(data == 0)
                    document.getElementById('alerta').style.display = "block";
            }

        });   
    });
    
});
