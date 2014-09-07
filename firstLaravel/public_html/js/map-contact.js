/**
 * Created by Tedo on 14.7.2014 г..
 */
function writeAddressName(latLng) {
    var geocoder = new google.maps.Geocoder();
    geocoder.geocode({
            "location": latLng
        },
        function(results, status) {
            if (status == google.maps.GeocoderStatus.OK)
                document.getElementById("address").innerHTML = results[0].formatted_address;
            else
                document.getElementById("error").innerHTML += "Unable to retrieve your address" + "<br />";
        });
}

function geolocationSuccess(position) {
    var userLatLng = new google.maps.LatLng(43.233900, 27.905900);
    // Write the formatted address
    writeAddressName(userLatLng);

    var myOptions = {
        zoom : 17,
        center : userLatLng,
        mapTypeId : google.maps.MapTypeId.ROADMAP
    };
    // Draw the map
    var mapObject = new google.maps.Map(document.getElementById("map"), myOptions);
    // Place the marker
    new google.maps.Marker({
        map: mapObject,
        position: userLatLng
    });


}

function geolocationError(positionError) {
    document.getElementById("error").innerHTML += "Error: " + positionError.message + "<br />";
}

function geolocateUser() {
    // If the browser supports the Geolocation API
    if (navigator.geolocation)
    {
        var positionOptions = {
            enableHighAccuracy: true,
            timeout: 10 * 1000 // 10 seconds
        };
        navigator.geolocation.getCurrentPosition(geolocationSuccess, geolocationError, positionOptions);
    }
    else
        document.getElementById("error").innerHTML += "Your browser doesn't support the Geolocation API";
}

window.onload = geolocateUser;
