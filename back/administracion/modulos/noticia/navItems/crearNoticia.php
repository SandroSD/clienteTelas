<h3 class="titSubseccion">Cargar Nueva Noticia</h3>

<p>Completar todos los datos para publicar una nueva noticia.</p>

<form id="contForm" method="POST">
      <div class="form-group">
            <label for="descripcion">Descripción</label>
            <textarea name="descripcion" id="descripcion" class="form-control" cols="30" rows="7"></textarea>
      </div>
      <div class="form-group">
            <label for="fechaPublicacion">Fecha de Publicación</label>
            <input type="text" name="fechaPublicacion" id="fechaPublicacion" class="form-control" disabled>
      </div>
      <div class="form-check">
            <input class="form-check-input" type="radio" name="estadoN" id="visibleN" value="1" checked>
            <label class="form-check-label" for="estadoN">
                  Visible
            </label>
      </div>
      <div class="form-check">
            <input class="form-check-input" type="radio" name="estadoN" id="noVisibleN" value="0">
            <label class="form-check-label" for="estadoN">
                  No Visible
            </label>
      </div>
      <button type="submit" class="btn btn-primary" id="newNoticia">Registrar Noticia</button>
</form>

