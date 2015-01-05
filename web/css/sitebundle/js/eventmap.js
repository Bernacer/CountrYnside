var map;
var myCenter=new google.maps.LatLng(46.6302142, 2.5680160)
var marker=new google.maps.Marker({
    position:myCenter
});

function initialize() {
    var mapProp = {
        center:myCenter,
        draggable: false,
        scrollwheel: true,
        mapTypeId:google.maps.MapTypeId.ROADMAP,
        zoom: 6,
        disableDefaultUI: true
    };

    map=new google.maps.Map(document.getElementById("map-canvas"),mapProp);
    marker.setMap(map);

    google.maps.event.addListener(marker, 'click', function() {

        infowindow.setContent(contentString);
        infowindow.open(map, marker);

    });
};
google.maps.event.addDomListener(window, 'load', initialize);

google.maps.event.addDomListener(window, "resize", resizingMap());

$('#mapModal').on('show.bs.modal', function() {
    //Must wait until the render of the modal appear, thats why we use the resizeMap and NOT resizingMap!! ;-)
    resizeMap();
})

function resizeMap() {
    if(typeof map =="undefined") return;
    setTimeout( function(){resizingMap();} , 400);
}

function resizingMap() {
    if(typeof map =="undefined") return;
    var center = map.getCenter();
    google.maps.event.trigger(map, "resize");
    map.setCenter(center);
}

function reinitialize(Coord) {
    var res = Coord.substring(1, Coord.length - 1);
    var coord = res.split(", ")
    var pos = new google.maps.LatLng(coord[0], coord[1]);
    var mapOptions = {
        zoom: 14,
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
