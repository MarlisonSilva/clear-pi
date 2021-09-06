let running = false;

function run(){
    console.log('funciona');
    let img = document.getElementById('run');
    if(img.getAttribute('src') == "assets/images/pause-fill.svg"){
        img.setAttribute('src', 'assets/images/play-fill.svg');
    }else{
        img.setAttribute('src', 'assets/images/pause-fill.svg');
    }

}

running