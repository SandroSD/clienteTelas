<script>
$(function() {
    $("#map").googleMap({
      zoom: 10, // Initial zoom level (optional)
      coords: [48.895651, 2.290569], // Map center (optional)
      type: "ROADMAP" // Map type (optional)
    });
  });
</script>
<style>
#map{
    width:350px;
    height:350px;    
}
modal{
    margin:0;
    padding:0;
}
</style>
<div class="modal" tabindex="-1" role="dialog" id="googleMapModal">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">¿Cómo llegar a nuestro local?</h5>        
      </div>
      <div class="modal-body">
        
        <div class="container-fluid">
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-4">
                <div id="map"></div>
            </div>
            <div class="col-md-4"></div>
        </div>
        </div>
        

      </div>
      <div class="modal-footer">        
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
      </div>
    </div>
  </div>
</div>