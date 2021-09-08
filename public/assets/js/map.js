
// MAP
const prefersColorScheme = window.matchMedia('(prefers-color-scheme: dark)');
let mapStyle;
if(prefersColorScheme.matches || document.body.className == "dark-mode") {
    mapStyle = 'mapbox://styles/mapbox/navigation-night-v1';
} else {
    mapStyle = 'mapbox://styles/mapbox/streets-v11';
}


mapboxgl.accessToken = 'pk.eyJ1Ijoia2FuYXNoaWkxNiIsImEiOiJja2ZyZGRmejAwdHIzMnpydjYyeTZydGJiIn0.d6QimYaEUk4OoF5pgDPiXQ';
const map = new mapboxgl.Map({
    container: 'map', // container ID
    style: mapStyle,
    center: [-37.097191, -6.459455], // starting position [lng, lat]
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