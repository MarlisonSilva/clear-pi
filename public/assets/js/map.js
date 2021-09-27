// MAP
const prefersColorScheme = window.matchMedia('(prefers-color-scheme: light)');
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
    zoom: 13 // starting zoom
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
map.addControl(new mapboxgl.FullscreenControl());


// Toggle navigation
function navigationToggle(){
    let navigation = window.document.querySelector('.navigation');
    if (!navigation.classList.contains("disable")) {
        navigation.classList.add("disable");
    } else {
        navigation.classList.remove("disable");
    }
}

var lista = { 
    'l1': {
        'caminhaoX': [-37.09723429309963, -6.459378297512131],
        'caminhaoY': [-37.09536165688519, -6.459152968328851],
        'caminhaoZ': [-37.09451429722196, -6.462075741405471],
        'caminhaoW': [-37.09759721294813, -6.463538760944857]
    },
    'l2': {
        'caminhaoX': "Caminhão X",
        'caminhaoY': "Caminhão Y",
        'caminhaoZ': "Caminhão Z",
        'caminhaoW': "Caminhão W",
    }
}
function center(button) {
    var coords;
    map.setZoom('17')
    coords = lista['l1'][button.id]
    map.setCenter(coords)
}


// PopUps \\
var popUps = []

for (var i = 0; i < Object.keys(lista.l1).length; i++){
    popUps.push(
        new mapboxgl.Popup({ offset: 25 }).setText(
            lista['l2'][Object.keys(lista.l2)[i]] //buscar o texto dentro do dicionário
            )
        )
}

new mapboxgl.Popup({ offset: 25 }).setText()

// Marcações \\
var markers = []


for(var x = 0; x<popUps.length; x++){
    const el = document.createElement('div');
    el.className = 'marker';
    el.style.backgroundImage = "url(https://image.flaticon.com/icons/png/512/1012/1012781.png)";
    el.style.width = "32px";
    el.style.height = "32px";
    el.style.backgroundSize = '100%';

    markers.push(
        new mapboxgl.Marker(el)
            .setLngLat(lista['l1'][Object.keys(lista.l1)[x]]) //buscar coordenadas dentro do dicionário
            .setPopup(popUps[x])
            .addTo(map)
    ) 
}