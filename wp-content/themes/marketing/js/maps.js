function initialize() {
    
    var coords = new google.maps.LatLng(-37.887832, 145.031416)
    
    var mapOptions = {
      center: coords,
      zoom: 15,
      scrollwheel: false
    };
    
    var map = new google.maps.Map(document.getElementById("map-canvas"),
        mapOptions);
  
  
    var marker = new google.maps.Marker({
        position: coords,
        map: map,
        title: 'Nebulas Palace of creativity'
    });
  }
  google.maps.event.addDomListener(window, 'load', initialize);