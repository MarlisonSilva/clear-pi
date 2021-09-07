// DARK MODE
function modeMap() {
    console.log(window.matchMedia('(prefers-color-scheme: dark)').matches)
    var element = document.body;
    element.classList.toggle("dark-mode");
    if( prefersColorScheme.matches || document.body.className == "dark-mode") {
        map.setStyle('mapbox://styles/mapbox/navigation-night-v1');
    } else {
        map.setStyle('mapbox://styles/mapbox/streets-v11');
    }
}

function modeHome() {
    console.log(window.matchMedia('(prefers-color-scheme: dark)').matches)
    var element = document.body;
    element.classList.toggle("dark-mode");

    // Icon 1
    var icon1 = document.querySelector('#icon1');

    if (icon1.classList.contains("bi-house-fill")) {
        icon1.classList.add("bi-house");
        icon1.classList.remove("bi-house-fill");
    } else {
        icon1.classList.remove("bi-house");
        icon1.classList.add("bi-house-fill");
    }

    // Icon 4

    var icon4 = document.querySelector('#icon4');

    if (icon4.classList.contains("bi-people-fill")) {
        icon4.classList.add("bi-people");
        icon4.classList.remove("bi-people-fill");
    } else {
        icon4.classList.remove("bi-people");
        icon4.classList.add("bi-people-fill");
    }

    // Icon 5
    var icon5 = document.querySelector('#icon5');

    if (icon5.classList.contains("bi-moon-stars-fill")) {
        icon5.classList.add("bi-moon-stars");
        icon5.classList.remove("bi-moon-stars-fill");
    } else {
        icon5.classList.remove("bi-moon-stars");
        icon5.classList.add("bi-moon-stars-fill");
    }

    // Icon 6
    var icon6 = document.querySelector('#icon6');

    if (icon6.classList.contains("bi-stopwatch-fill")) {
        icon6.classList.add("bi-stopwatch");
        icon6.classList.remove("bi-stopwatch-fill");
    } else {
        icon6.classList.remove("bi-stopwatch");
        icon6.classList.add("bi-stopwatch-fill");
    }

}

