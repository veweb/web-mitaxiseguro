  var village = new google.maps.LatLng(52.835816,0.850368);
  var office = new google.maps.LatLng(52.835816,0.850368);
  var marker;
  var map;

  function initialize() {
    var mapOptions = {
      zoom: 18,
      mapTypeId: google.maps.MapTypeId.HYBRID,
      center: village,
    };

    map = new google.maps.Map(document.getElementById("map_canvas"),
            mapOptions);
          
    marker = new google.maps.Marker({
      map:map,
 	  scrollwheel: true,
      navigationControl: true,
      mapTypeControl: true,
      scaleControl: true,
      draggable: true,
      animation: google.maps.Animation.DROP,
      position: office
    });
    google.maps.event.addListener(marker, 'click', toggleBounce);
  }

  function toggleBounce() {

    if (marker.getAnimation() != null) {
      marker.setAnimation(null);
    } else {
      marker.setAnimation(google.maps.Animation.BOUNCE);
    }
  }