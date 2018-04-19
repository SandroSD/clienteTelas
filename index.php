<!DOCTYPE html>
<html lang="en">

  <head>
    <!--, initial-scale=1, shrink-to-fit=no-->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Seguplast</title>
    
    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">

    <!-- Custom fonts for this template -->
    <link href="https://fonts.googleapis.com/css?family=Saira+Extra+Condensed:100,200,300,400,500,600,700,800,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet">    
    <link href="vendor/devicons/css/devicons.min.css" rel="stylesheet">
    <link href="vendor/simple-line-icons/css/simple-line-icons.css" rel="stylesheet">


    <!-- Custom styles for this template -->
    <link rel="stylesheet" href="css/resume.css" >
    <link rel="stylesheet" href="css/cssMobile.css">

  </head>

  <body id="page-top">

    <nav class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top" id="sideNav">
      <a class="navbar-brand js-scroll-trigger" href="#page-top">
        <!--span class="d-block d-lg-none">Start Bootstrap</span>
        <span class="d-none d-lg-block">
          <img class="img-fluid img-profile rounded-circle mx-auto mb-2" src="img/profile.jpg" alt="">
        </span-->
        <img src="img/logo.svg" id="imgPortada">
      </a><div id="headerVMob">
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button></div>      
      <div class="collapse navbar-collapse" id="navbarSupportedContent">        
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger panelIzquierda" href="#home"><i class="fas fa-circle titCirc"></i> Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger panelIzquierda" href="#queHacemos"><i class="fas fa-circle titCirc"></i> ¿Qué Hacemos?</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger panelIzquierda" href="#telasPorTipo"><i class="fas fa-circle titCirc"></i> Nuestros Productos</a>
          </li>  
          <li class="nav-item subcategorias">
            <a class="nav-link js-scroll-trigger panelIzquierda" href="#telasPorTipo"><i class="fas fa-square titCirc"></i> Telas por Tipo</a>
          </li>
          <li class="nav-item subcategorias">
            <a class="nav-link js-scroll-trigger panelIzquierda" href="#telasPorUso"><i class="fas fa-square titCirc"></i> Telas por Uso</a>
          </li>
          <li class="nav-item subcategorias">
            <a class="nav-link js-scroll-trigger panelIzquierda" href="#gomaEspuma"><i class="fas fa-square titCirc"></i> Goma Espuma</a>
          </li>
          <li class="nav-item subcategorias">
            <a class="nav-link js-scroll-trigger panelIzquierda" href="#accesorios"><i class="fas fa-square titCirc"></i> Accesorios</a>
          </li>        
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger panelIzquierda" href="#skills"><i class="fas fa-circle titCirc"></i> Showroom</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger panelIzquierda" href="#interests"><i class="fas fa-circle titCirc"></i> Ubicación</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger panelIzquierda" href="#awards"><i class="fas fa-circle titCirc"></i> Contacto</a>
          </li>

        </ul>        
      </div>
    </nav>

    <div class="container-fluid p-0">

      <?php
        
        include_once("secciones/home.php"); 
        include_once("secciones/queHacemos.php");
        include_once("secciones/telasPorTipo.php");
        include_once("secciones/telasPorUso.php");
        include_once("secciones/gomaEspuma.php");
        include_once("secciones/accesorios.php");        
        include_once("secciones/showroom.php");
        include_once("secciones/ubicacion.php");
        include_once("secciones/contacto.php");

        include_once("modalTelas.php");

      ?>

      

      

      

      

      

    </div>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>    
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
    
    
    <!-- Plugin JavaScript -->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for this template -->
    <script src="js/resume.js"></script>
    <script src="https://use.fontawesome.com/releases/v5.0.7/js/all.js"></script>

    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD3MpC8XaUJMEy2r-uGvD4zIm4Zhl3-b4I"></script>
    <script type="text/javascript" src="js/jquery.googlemap.js"></script>

  </body>

</html>
