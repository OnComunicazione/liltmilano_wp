mapboxgl.accessToken = "pk.eyJ1IjoibGlzaXJpIiwiYSI6ImNqb2VmbTlobTJvNmsza28xbjQzNHJkdm4ifQ.4RaiJilU7hEkVwUzBziLcg";
var center = [9.22,45.505]
var zoom = 10.2

// se esiste una mappa nella pagina avvio tutte le sue funzioni
if (document.getElementById('map')) {

  var map = new mapboxgl.Map({
    container: "map",
    style: "mapbox://styles/lisiri/cjoeg1qtt50q32rmm0yj29x8g",
    zoom: zoom,
    minZoom: 6,
    center: center
  });

  var pointClicked = false;

  function togliTrans(current_marker) {
    setTimeout(function() {
      current_marker.classList.remove('marker_trans')
    },150)
  }

  var clickFunction = function(e, marker) {

    var allMarkers = document.getElementsByClassName('marker')
    for(var i = 0; i < allMarkers.length; i++){
      var current_marker = allMarkers[i];
      current_marker.classList.add('marker_trans')
      current_marker.classList.remove('marker_clicked')
      togliTrans(current_marker)
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

        document.getElementById('visite-home').innerHTML =
          marker.properties.visite.reduce(function(accum, item, i, arr) {
            return accum += '<li>' + item['name'] + '</li>'
          }, '');
        document.getElementById('esami-home').innerHTML =
          marker.properties.esami.reduce(function(accum, item, i, arr) {
            return accum += '<li>' + item['name'] + '</li>'
          }, '');

        document.getElementById('city').innerHTML = marker.properties.city
        document.getElementById('label').innerHTML = marker.properties.label
        document.getElementById('sito').setAttribute('href', marker.properties.url)
        map.resize()
    },150)
  };

  // add markers to map
  geojson.features.forEach(function(marker) {
    // create a HTML element for each feature
    var el = document.createElement('div');
    el.className = 'marker';
    el.onclick = function(e) {
      clickFunction(e, marker);
    };
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
    }
    setTimeout(function() {
      map.flyTo({
        center: center,
        zoom: zoom,
      });
    }, 150)
  }

  // creo loop spazi nella pagina Mappa
  function initPaginaMappa() {
    var grouped_cities = _.toArray(_.groupBy(geojson.features, 'properties.city'))
    var loop = grouped_cities.reduce(function(accum, item, i, arr) {
      return accum +=
      `<h1 class="city">${item[0].properties.city}</h1>
      <div class="col-lista"> ` +

        item.reduce(function(acc, it, ind) {
          // console.log(it.properties);
          return acc += `<p class="paragrafo-puntato list">
                        ${it.properties.label}
                        </p>
                        `
        },'')
      + `</div>`
    }, '')
    if (document.getElementById('loop-spazi')) document.getElementById('loop-spazi').innerHTML = loop;
  }

  initPaginaMappa();

}

function initForm() {
  console.log('here')
  var a = document.querySelectorAll('input.ninja-forms-field');
  a.forEach(function(i){
    i.addEventListener('focus', function(e) {
      e.target.parentNode.parentNode.children[0].children[0].classList.add('focused')
    })
    i.addEventListener('blur', function(e) {
      if (e.target.value) return false
      e.target.parentNode.parentNode.children[0].children[0].classList.remove('focused')
    })
  });
}

var mySwiper = new Swiper ('.swiper-container', {
    // loop: true,
    pagination: {
      el: '.swiper-pagination',
      clickable: true
    },
    watchOverflow: true,
    autoplay: {
      delay: 6000
    },

    // navigation: {
    //   nextEl: '.swiper-button-next',
    //   prevEl: '.swiper-button-prev',
    // },

    // scrollbar: {
    //   el: '.swiper-scrollbar',
    // },
  });
  console.log(mySwiper);

jQuery(document).ready(function() {
  jQuery(document).on('nfFormReady',initForm);
  jQuery(document).on('nfFormSubmitResponse',initForm);
  if (map) map.resize();
})
