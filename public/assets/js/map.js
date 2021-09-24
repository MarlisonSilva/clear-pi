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
        'caminhaoX': [-37.088812328380, -6.453410924117901],
        'caminhaoY': [-37.09295702940503, -6.457009376083426],
        'caminhaoZ': [-37.09364193028044, -6.4612598388448825],
        'caminhaoW': [-37.09312237261006, -6.457769501624235]
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
    markers.push(
        new mapboxgl.Marker()
            .setLngLat(lista['l1'][Object.keys(lista.l1)[x]]) //buscar coordenadas dentro do dicionário
            .setPopup(popUps[x])
            .addTo(map)
    ) 
}

for(var i = 0; i<=routes.length; i++) {
    markers[0].setLngLat(routes[i][0])
}