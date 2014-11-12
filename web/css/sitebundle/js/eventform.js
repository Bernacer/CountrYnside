
var placeSearch, autocomplete, place, map;
;

function initialize() {
    // Create the autocomplete object, restricting the search
    // to geographical location types.
    autocomplete = new google.maps.places.Autocomplete(
            /** @type {HTMLInputElement} */(document.getElementById('event_adresse')),
            {types: ['geocode'],
                componentRestrictions: {country: 'fr'}
            });
    google.maps.event.addListener(autocomplete, 'place_changed', function () {

        place = autocomplete.getPlace();

        document.getElementById("event_coord").value = place.geometry.location;
        if (typeof place.address_components[4] === 'undefined') {
            document.getElementById("event_region").removeAttribute("readonly");
        } else {
            document.getElementById("event_region").setAttribute('readonly', 'readonly');
            document.getElementById("event_region").value = place.address_components[4].long_name;
        }
    });
}


// Bias the autocomplete object to the user's geographical location,
// as supplied by the browser's 'navigator.geolocation' object.
function geolocate() {
    if (navigator.geolocation) {
        navigator.geolocation.getCurrentPosition(function (position) {
            var geolocation = new google.maps.LatLng(
                    position.coords.latitude, position.coords.longitude);
            autocomplete.setBounds(new google.maps.LatLngBounds(geolocation,
                    geolocation));
        });
    }
}