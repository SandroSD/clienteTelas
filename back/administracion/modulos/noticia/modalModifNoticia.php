<?php
    require_once("../../../core.php");

    $bd = new bd();

    $queryToModif = "SELECT * FROM noticia where idNoticia ='".$_POST['idNoticia']."'";
    $noticia = $bd->ejecutarQuery($queryToModif);
    
    
?>

<div class="modal fade" id="modalModifNot" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Modificar Noticia</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="modificarForm" method="POST">                    
                    <div class="form-group">
                        <label for="descripcion">Descripción</label>
                        <textarea name="descripcion" id="descripcion" class="form-control" cols="30" rows="7">
                            <?php echo $noticia[0]['descripcion']; ?>
                        </textarea>
                    </div>                    
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="estadoN" id="visibleN" value="1" <?php echo $noticia[0]['estado']=="1"?"checked":""; ?> >
                        <label class="form-check-label" for="estadoN">
                            Visible
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="estadoN" id="noVisibleN" value="0" <?php echo $noticia[0]['estado']=="0"?"checked":""; ?>>
                        <label class="form-check-label" for="estadoN">
                            No Visible
                        </label>
                    </div>                    
                </form>
            </div>
            <div class="modal-footer">                
                <button type="submit" id="changeNotice" class="btn btn-success" data-dismiss="modal">Guardar Cambios</button>
            </div>
        </div>
    </div>
</div>