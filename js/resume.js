(function($) {
  "use strict"; // Start of use strict
  
  $(document).ready(function(){

    $("#btnSubmit").click(function(e){
      e.preventDefault();
      var nombre = $("#nombre").val();
      var asunto = $("#asunto").val();
      var email = $("#email").val();
      var mensaje = $("#mensaje").val();
      
      var flagNombre=0;
      var flagAsunto=0;
      var flagEmail=0;
      var flagMensaje=0;
      
      /* Validación campo nombre */
      if(nombre.length<6){
          $("#nombreInfo").removeClass("correcto");
          $("#nombreInfo").addClass("error");
          $("#nombreInfo").html("");
          $("#nombreInfo").html("El Nombre debe superar los 6 caracteres.");
          flagNombre=1;
      }else{
          $("#nombreInfo").removeClass("error");
          $("#nombreInfo").addClass("correcto");
          $("#nombreInfo").html("");
          $("#nombreInfo").html("✓ Nombre correcto.");
          flagNombre=0;
      }
      /* Fin validación campo nombre */

      /* Validación campo asunto */
      if(asunto.length==0){
          asunto = "Sin Asunto";
      }
      /* Fin validación campo asunto */

      /* Validación campo email */
      var arroba = $("#email").val().indexOf("@");
      if(arroba==-1){
          $("#emailInfo").removeClass("correcto");
          $("#emailInfo").addClass("error");
          $("#emailInfo").html("");
          $("#emailInfo").html("Mail incorrecto.");
          flagEmail=1;        
      }else{
          var puntoDspDeArroba = $("#email").val().lastIndexOf(".");        
          if(puntoDspDeArroba==-1){
              $("#emailInfo").removeClass("correcto");
              $("#emailInfo").addClass("error");
              $("#emailInfo").html("");
              $("#emailInfo").html("Mail incorrecto.");
              flagEmail=1;            
          }else{            
              $("#emailInfo").removeClass("error");
              $("#emailInfo").addClass("correcto");
              $("#emailInfo").html("");
              $("#emailInfo").html("✓ Email correcto.");
              flagEmail=0;
          }
      }
      /* Fin validación campo email */
      
      if(mensaje.length==0){
          $("#mensajeInfo").removeClass("correcto");
          $("#mensajeInfo").addClass("error");
          $("#mensajeInfo").html("");
          $("#mensajeInfo").html("Debe escribir contenido en mensaje.");
          flagMensaje=1;
      }else{
          $("#mensajeInfo").removeClass("error");
          $("#mensajeInfo").addClass("correcto");
          $("#mensajeInfo").html("");
          $("#mensajeInfo").html("✓ Mensaje correcto.");
          flagMensaje=0;
      }          
      if(flagNombre==0 && flagMensaje==0){
          $.ajax({
              url: "checkAndSendMail.php",
              type:"POST",
              data: {
                  nombre: nombre,
                  asunto: asunto,
                  email: email,
                  mensaje: mensaje
              },
              beforeSend: function(){
                $(".btnSpinner").remove();
                $("#btnSubmit").prepend("<div class='btnSpinner fa fa-spinner fa-spin'></div>");                
                $("#btnSubmit").prop("disabled",true);                
              },
              success: function(result){
                
                setTimeout(() => {
                  alert("Su consulta fue enviada correctamente. Gracias por contactarse con Seguplast");
                  $(".btnSpinner").remove();
                  $("#btnSubmit").prop("disabled",false);
                  $("#nombre").val("");
                  $("#asunto").val("");
                  $("#email").val("");
                  $("#mensaje").val("");                  
                }, 1500);
              }
          });
      }else{
          
      }
    });

    $("#imgMapa").click(function(){      
      $.ajax({
          data:{                
          },
          url: 'modalMap.php',
          type: 'POST',
          beforeSend:function(){},
          success:function(rta){
              $("#interests").append(rta);
              $("#googleMapModal").modal("show");
          }
      });
    });
  });

  function checkAndSend(e){
    
}


  // Smooth scrolling using jQuery easing
  $('a.js-scroll-trigger[href*="#"]:not([href="#"])').click(function() {
    if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
      if (target.length) {
        $('html, body').animate({
          scrollTop: (target.offset().top)
        }, 1000, "easeInOutExpo");
        return false;
      }
    }
  });

  // Closes responsive menu when a scroll trigger link is clicked
  $('.js-scroll-trigger').click(function() {
    $('.navbar-collapse').collapse('hide');
  });

  // Activate scrollspy to add active class to navbar items on scroll
  $('body').scrollspy({
    target: '#sideNav'
  });

  $("#imgSmart").click(function(){
    //location.href="http://smart360.com.ar";
    window.open("http://smart360.com.ar");
  })

})(jQuery); // End of use strict
