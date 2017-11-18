$(document).ready(function(){
    $("#googleMap").click(function(){
        $.ajax({
            data:{                
            },
            url: 'modalMap.php',
            type: 'POST',
            beforeSend:function(){},
            success:function(rta){
                $("body").append(rta);
                $("#googleMapModal").modal("show");
            }
        });
    });
});

