<script src="{{ asset('vendor/jquery/dist/jquery.min.js') }}"></script>
<script src="{{ asset('vendor/materialize/dist/js/materialize.min.js') }}"></script>

<script src="http://cdn.leafletjs.com/leaflet-0.3.1/leaflet.js"></script>
<script src="http://maps.google.com/maps/api/js?v=3.2&sensor=false"></script>
<script src="http://matchingnotes.com/javascripts/leaflet-google.js"></script>
<script type="text/javascript">
  var map = new L.Map('map', {center: new L.LatLng(51.51, -0.11), zoom: 9});
  var googleLayer = new L.Google('ROADMAP');
  map.addLayer(googleLayer);

</script>


<script src="{{ asset('js/main.js') }}"></script>