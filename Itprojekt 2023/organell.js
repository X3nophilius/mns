const light = ['rgb(0,0,0)','rgb(255,255,255)','rgb(47,46,68)','rgb(26, 26, 41)'];
const dark = ['rgb(255,255,255)','rgb(47,46,68)','rgb(32, 31, 46)','rgb(26, 26, 41)'];

window.addEventListener("keyup", function(e){ if(e.keyCode == 27) history.back(); }, false);

if  (sessionStorage.getItem("mode")==null) {
    sessionStorage.setItem("mode",'light');
}
setmode(sessionStorage.getItem("mode"));

function setmode (mode) {
    var r = document.documentElement;
    if (mode == 'light') {
        r.style.setProperty('--text-color',light[0]);
        r.style.setProperty('--main-bg-color',light[1]);
        r.style.setProperty('--body-bg-color',light[2]);
        r.style.setProperty('--border-color',dark[3]);
        document.getElementById("light").style.display = "none"; 
        document.getElementById("dark").style.display = "block";
    } else {
        r.style.setProperty('--text-color',dark[0]);
        r.style.setProperty('--main-bg-color',dark[1]);
        r.style.setProperty('--body-bg-color',dark[2]);
        r.style.setProperty('--border-color',dark[3]);
        document.getElementById("light").style.display = "block"; 
        document.getElementById("dark").style.display = "none";
    }
}

function changemode () {
    if (sessionStorage.getItem("mode") == 'light') {
        sessionStorage.setItem("mode",'dark'); 
    }
    else {
        sessionStorage.setItem("mode",'light'); 
    }
    setmode(sessionStorage.getItem("mode"))
}