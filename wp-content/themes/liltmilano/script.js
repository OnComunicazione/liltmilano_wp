mapboxgl.accessToken = "pk.eyJ1IjoibGlzaXJpIiwiYSI6ImNqb2VmbTlobTJvNmsza28xbjQzNHJkdm4ifQ.4RaiJilU7hEkVwUzBziLcg";
var center = [9.21336,45.48297]
var zoom = 10.7
var map = new mapboxgl.Map({
  container: "map",
  style: "mapbox://styles/lisiri/cjoeg1qtt50q32rmm0yj29x8g",
  zoom: zoom,
  minZoom: 6,
  center: center
})

var pointClicked = false;

function togliTrans(current_marker) {
  setTimeout(function() {
    console.log('rimuovo');
    current_marker.classList.remove('marker_trans')
  },150)
}
// add markers to map
geojson.features.forEach(function(marker) {

  // create a HTML element for each feature
  var el = document.createElement('div');
  el.className = 'marker';
  el.onclick = function(e) {

    var allMarkers = document.getElementsByClassName('marker')
    for(var i = 0; i < allMarkers.length; i++){
      var current_marker = allMarkers[i];
      current_marker.classList.add('marker_trans')
      current_marker.classList.remove('marker_clicked')
      togliTrans(current_marker)
      console.log('fine ciclo');
    }

      var current_marker = e.target;
      current_marker.classList.add('marker_trans')
      current_marker.classList.add('marker_clicked')
      togliTrans(current_marker)

      document.getElementById('intro').style.display = 'none'
      document.getElementById('details').style.display = 'block'

      setTimeout(function() {
        map.flyTo({
          center: marker.geometry.coordinates,
        });
        document.getElementById('city').innerHTML = marker.properties.city
        document.getElementById('label').innerHTML = marker.properties.label
        map.resize()
    },150)
  }


// make a marker for each feature and add to the map
new mapboxgl.Marker(el)
    .setLngLat(marker.geometry.coordinates)
    .addTo(map);
});


map.on('load', function() {
  map.getCanvas().style.cursor = 'default';
})

var backToMap = function() {
  document.getElementById('details').style.display = 'none'
  document.getElementById('intro').style.display = 'block'
  var allMarkers = document.getElementsByClassName('marker')
  for(var i = 0; i < allMarkers.length; i++){
    var current_marker = allMarkers[i];
    current_marker.classList.add('marker_trans')
    current_marker.classList.remove('marker_clicked')
    togliTrans(current_marker)
    console.log('fine ciclo');
  }
  setTimeout(function() {
    map.flyTo({
      center: center,
      zoom: zoom,
    });
  }, 150)
  map.resize()
}
