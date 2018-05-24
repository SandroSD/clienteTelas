<h3 class="titSubseccion">Modificar/Ocultar Noticia</h3>
    <div id="tituloUltimas">
        <div class="row">        
            <div class="col-lg-1">Número</div>
            <div class="col-lg-5">Descripción</div>
            <div class="col-lg-2">Fecha de Publicación</div>
            <div class="col-lg-1">Estado</div>
            <div class="col-lg-1">Modificar</div>
        </div>        
    </div>
<div id="contenerNoticiasAModificar">    
<?php
    require_once("../../../core.php");
    $bd = new bd();
    
    $queryNoticias = "SELECT * FROM noticia";
    $noticias = $bd->ejecutarQuery($queryNoticias);
    $i=1;
    foreach ($noticias as $noticia) {
?>

    <div class="row">
        <div class="col-lg-1">
            <div class="acomodoUltimasNoticias">
                <?php echo $i; ?>
            </div>        
        </div>
        <div class="col-lg-5">
            <div class="acomodoUltimasNoticias" align="justify">
                <?php echo $noticia['descripcion']; ?>
            </div>        
        </div>
        <div class="col-lg-2">
            <div class="acomodoUltimasNoticias" >
                <?php echo $noticia['fechaPublicacion']; ?>
            </div>            
        </div>
        <div class="col-lg-1">
            <div class="acomodoUltimasNoticias">
                <?php echo $noticia['estado']=="1"?"Visible":"No Visible"; ?>
            </div>
        </div>
        <div class="col-lg-1">
            <div class="acomodoUltimasNoticias" align="center">
                <button class="btn btn-info modificarNoticia" data-id="<?php echo $noticia['idNoticia'] ?>" data-toggle="modal" data-target="#modalModifNot">
                    <i class="fas fa-cog"></i>
                </button>
            </div>
        </div>
    </div>

<?php
    $i++;
    }
?>
</div>
<div id="pegarModal"></div>