var map;
function initialize() {
    var mapOptions = {
        zoom: 8,
        disableDefaultUI: true,
        scrollwheel: false,
        center: new google.maps.LatLng(-34.397, 150.644)
    };
    map = new google.maps.Map(document.getElementById('map-canvas'),
            mapOptions);
}

function reinitialize(Coord) {
    var res = Coord.substring(1, Coord.length - 1);
    var coord = res.split(", ")
    var pos = new google.maps.LatLng(coord[0], coord[1]);
    var mapOptions = {
        zoom: 18,
        disableDefaultUI: true,
        scrollwheel: true,
        center: new google.maps.LatLng(coord[0], coord[1])
    };
    map = new google.maps.Map(document.getElementById('map-canvas'),
            mapOptions);
            
    marker = new google.maps.Marker({
        map: map,
        draggable: true,
        animation: google.maps.Animation.DROP,
        position: pos
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

google.maps.event.addDomListener(window, 'load', initialize);
