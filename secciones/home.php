<section class="resume-section p-lg-1" id="home">
    <div class="row">        
        <div class="col-12 col-md-12 col-sm-12 mt-3">
            <div id="contenedorCarousel">
                <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img class="d-block w-100" src="img/home/img1.jpg" alt="First slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="img/home/img2.jpg" alt="Second slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="img/home/img3.jpg" alt="Third slide">
                        </div>
                    </div>                    
                </div>
                <p align="right" style="color: black; margin-top:0.1em;">Acompañando tus ideas...</p>
            </div>
            <div class="col-12 col-md-12 col-sm-12 mt-3">
                
                <div id="contenidoNoticias">
                    <?php
                        $queryVerNoticias = "SELECT * FROM noticia WHERE estado = '1'";
                        $noticias=$bd->ejecutarQuery($queryVerNoticias);
                        
                        foreach ($noticias as $noticia){
                            echo "<p>".$noticia['descripcion']."</p>";
                        }
                    ?>                    
                </div>        
                <div id="contenedorMarcas">
                    <div class="col-12 col-md-12 col-sm-12">
                    <p align="center" style="color: black;">¡Te invitamos a conocernos!</p>                    
                        <hr class="style14">
                        <div class="row">
                            <div class="col-4 col-md-3 col-sm-6 col-lg-4">
                                <div class="imgCentrar">
                                    <img src="img/home/plavinil.png" class="imagenHome">
                                </div>
                            </div>
                            <div class="col-4 col-md-3 col-sm-6 col-lg-4">
                                <div class="imgCentrar">
                                    <img src="img/home/adisa.png" class="imagenHome">
                                </div>
                            </div>
                            <div class="col-4 col-md-3 col-sm-6 col-lg-4">
                                <div class="imgCentrar">
                                    <img src="img/home/dominante.png" class="imagenHome">
                                </div>
                            </div>
                        </div>
                    </div>                    
                </div>
            </div>
        </div>                 
    </div>
</section>