<input type="hidden" id="geocomplete" />
<div id="map_canvas" class="gmaps" style="width:640px;height:480px;"></div>
<script>
$(function(){
	var options = {
	  map: "#map_canvas",
	  details: "#frGeocomplete",
	  location: "<?=$embed?>"
	};
	$("#geocomplete").geocomplete(options).bind("geocode:result", function(event, result){
		var map = $("#geocomplete").geocomplete("map");
		google.maps.event.trigger(map, 'resize');       // fixes map display			
		map.setCenter(new google.maps.LatLng(result.geometry.location.lat(), result.geometry.location.lng()));			
	});;
});
</script>