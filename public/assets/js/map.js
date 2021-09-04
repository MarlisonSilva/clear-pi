
// MAP
mapboxgl.accessToken = 'pk.eyJ1Ijoia2FuYXNoaWkxNiIsImEiOiJja2ZyZGRmejAwdHIzMnpydjYyeTZydGJiIn0.d6QimYaEUk4OoF5pgDPiXQ';
const map = new mapboxgl.Map({
    container: 'map', // container ID
    center: [-74.5, 40], // starting position [lng, lat]
    zoom: 9 // starting zoom
});

map.addControl(
    new mapboxgl.GeolocateControl({
        positionOptions: {
            enableHighAccuracy: true
    },
    // When active the map will receive updates to the device's location as it changes.
    trackUserLocation: true,
    // Draw an arrow next to the location dot to indicate which direction the device is heading.
    showUserHeading: true
    })
);


// Toggle navigation
function navigationToggle(){
    let navigation = window.document.querySelector('.navigation');
    if (!navigation.classList.contains("disable")) {
        navigation.classList.add("disable");
    } else {
        navigation.classList.remove("disable");
    }
}


// DARK MODE
const prefersColorScheme = window.matchMedia('(prefers-color-scheme: dark)');
function mode() {
    console.log(window.matchMedia('(prefers-color-scheme: dark)').matches)
    var element = document.body;
    element.classList.toggle("dark-mode");
    if( prefersColorScheme.matches || document.body.className == "dark-mode") {
        map.setStyle('mapbox://styles/mapbox/navigation-night-v1');
    } else {
        map.setStyle('mapbox://styles/mapbox/streets-v11');
    }
    
}

if( prefersColorScheme.matches || document.body.className == "dark-mode") {
    map.setStyle('mapbox://styles/mapbox/navigation-night-v1');
} else {
    map.setStyle('mapbox://styles/mapbox/streets-v11');
}


