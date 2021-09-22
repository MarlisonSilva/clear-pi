let running = false;

let hour = "00";
let min = "00";
let sec = "00";
let stopwatching = false;

let images = ["assets/images/play-fill.svg", "assets/images/pause-fill.svg"];
let texts = ["Iniciar coleta agora", "Finalizar coleta"];

function run(){
    stopwatching = !stopwatching;

    let img = document.getElementById('run');

    img.setAttribute('src', images[+stopwatching]);
    document.getElementById('text-run').innerText = texts[+stopwatching];
    
    if(stopwatching){
        startStopwatch();
    }
}

function stopStopwatch(){
    
}

function startStopwatch() {
    if(stopwatching){
        sec++;
        sec = checkTime(sec);
        type = "min";
        min = nextTime(sec, min, type);
        type = "hour";
        hour = nextTime(min, hour, type);
        document.getElementById('stopwatch').innerHTML =  hour + ":" + min + ":" + sec;
        if(stopwatching){
            setTimeout(startStopwatch, 1000);
        }else{
            clearTimeout();
        }
    }
}
  
function checkTime(i) {
    if (i < 10) {
        i = "0" + i
    }
    return i;
}

function nextTime(v1, v2, t){
    if(v1 > 59){
        if(t == "min"){
            sec = "00";
        }else{
            min = "00";
        }
        v2++;
        v2 = checkTime(v2);
    }
    return v2;
}
