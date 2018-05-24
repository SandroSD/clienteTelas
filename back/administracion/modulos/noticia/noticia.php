<div id="noticiaContainer">
    
        
  <ul class="nav nav-pills" role="tablist">
    <li class="nav-item">
      <a class="nav-link active" data-toggle="pill" href="#home">Ver Noticias</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" data-toggle="pill" href="#menu1">Crear Noticia</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" data-toggle="pill" href="#menu2">Modificar/Ocultar Noticia</a>
    </li>
  </ul>

  <!-- Tab panes -->
  <div class="tab-content">
    <div id="home" class="container-fluid tab-pane active"><br>
        <?php include_once("navItems/verNoticia.php"); ?>
    </div>
    <div id="menu1" class="container-fluid tab-pane fade"><br>
        <?php include_once("navItems/crearNoticia.php"); ?>
    </div>
    <div id="menu2" class="container-fluid tab-pane fade"><br>
        <?php include_once("navItems/modifElimNoticia.php"); ?>
    </div>
  </div>
  <div id="cargarScript">
  
  </div>
</div>

<!--script src="noticia.js"></script-->