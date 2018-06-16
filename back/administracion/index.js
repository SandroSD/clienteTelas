$(document).ready(function(){
    $.ajax({
        data:{
            
        },
        url: 'modulos/noticia/noticia.php',
        type: 'POST',
        dataType: 'html',
        beforeSend:function(){},
        success:function(rta){
            $("#barraRight").html(rta);
            var salida;
            cargarFechaEnNuevaNoticia();
            
            checkBeforeSubmit();

            modificarNoticia();
        }
    });  
    //$("#barraRight").load("modulos/noticia/noticia.php");

    
    /*$.getScript("modulos/noticia/noticia.js",function(){});
    $("#secNoticia").click(function(){});*/

       
});

function cargarFechaEnNuevaNoticia(){
    var fecha = new Date();

    var mes = fecha.getMonth()+1;
    var dia = fecha.getDate();

        salida = (dia<10 ? '0' : '') + dia + '/' +
                 (mes<10 ? '0' : '') + mes + '/' +
                 fecha.getFullYear();
    $("#fechaPublicacion").val(salida);
}

function checkBeforeSubmit(){
    $("#newNoticia").click(function(e){
        e.preventDefault();
        var textArea = $("#descripcion").val();
        var datos = $("#contForm").serialize();
        if(textArea.length == 0){
            alert("Debe completar una descripción para registrar la nueva noticia");
        }else{
            $.ajax({
                data:{
                    datos: datos, salida: salida
                },
                url: 'modulos/noticia/switch.php?op=nuevaNoticia',
                type: 'POST',
                beforeSend:function(){},
                success:function(rta){
                    if(rta=="OK"){
                        alert("La noticia fue registrada correctamente");
                        location.reload();
                        $("#descripcion").val("");
                    }else{
                        alert("Hubo un error al registrar la noticia, intente mas tarde");
                    }
                }
            });   
        }
    });
}

function modificarNoticia(){
    $(".modificarNoticia").click(function(){
        var idNoticia = $(this).attr("data-id");
        $.ajax({
            data:{
                idNoticia: idNoticia
            },
            url: 'modulos/noticia/modalModifNoticia.php',
            type: 'POST',
            dataType: 'html',
            beforeSend:function(){
                $("#pegarModal").html("");
            },
            success:function(rta){
                $("#pegarModal").prepend(rta);
                $("#modalModifNot").modal('show');

                modificarDatosNoticia(idNoticia);
            }
        });
    });
}

function modificarDatosNoticia(idNoticia){
    $("#changeNotice").click(function(){
        var datos = $("#modificarForm").serialize();
        $.ajax({
            data:{
                idNoticia:idNoticia,
                datos: datos
            },
            url: 'modulos/noticia/switch.php?op=modificarNoticia',
            type: 'POST',
            dataType: 'html',
            beforeSend:function(){
                
            },
            success:function(rta){
                if((rta)=="OK"){
                    alert("La noticia fue modificada correctamente");
                    setTimeout(() => {
                        location.reload();
                    }, 500);
                }
            }
        });
    });
}