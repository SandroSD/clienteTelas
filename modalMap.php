<script>
$(function() {
    $("#map").googleMap({
      zoom: 17, // Initial zoom level (optional)
      coords: [-34.6618734, -58.667913399999975], // Map center (optional)
      type: "ROADMAP" // Map type (optional)
    });
    $("#map").addMarker({
      coords: [-34.636240, -58.662797], // GPS coords
      title: 'Seguplast', // Title
      text:  '<b>Lorem ipsum</b> dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.' // HTML content
    });
  });
</script>
<style>
#map{
    width:465px;
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
        <div id="map"></div>
            <div class="col-md-2"></div>
            <div class="col-md-4">
                
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