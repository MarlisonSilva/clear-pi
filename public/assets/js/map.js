mapboxgl.accessToken = 'pk.eyJ1Ijoia2FuYXNoaWkxNiIsImEiOiJja2ZyZGRmejAwdHIzMnpydjYyeTZydGJiIn0.d6QimYaEUk4OoF5pgDPiXQ';
const map = new mapboxgl.Map({
    container: 'map', // container ID
    style: 'mapbox://styles/mapbox/streets-v11', // style URL
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


// DARK MODE
const prefersColorScheme = window.matchMedia('(prefers-color-scheme: dark)');

if( prefersColorScheme.matches ) {
    map.setStyle('mapbox://styles/mapbox/navigation-night-v1');
} else {
    map.setStyle('mapbox://styles/mapbox/streets-v11');
}