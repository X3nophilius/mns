parralexlistener = document.body.addEventListener("mousemove",function (e) {
  let layer1 = document.getElementsByClassName("layer1");
  for (i of layer1) {
    i.style.top =  ((e.clientY-(window.innerHeight/2))*0.0055)+parseInt(i.attributes.datay.value)+"vh"
    i.style.left =  ((e.clientX-(window.innerWidth/2))*0.0055)+parseInt(i.attributes.datax.value)+"vw"
  }
  
  let layer2 = document.getElementsByClassName("layer2");
  for (i of layer2) {
    i.style.top =  ((e.clientY-(window.innerHeight/2))*0.003)+parseInt(i.attributes.datay.value)+"vh"
    i.style.left =  ((e.clientX-(window.innerWidth/2))*0.003)+parseInt(i.attributes.datax.value)+"vw"
  }

  let layer3 = document.getElementsByClassName("layer3");
  for (i of layer3) {
    i.style.top =  ((e.clientY-(window.innerHeight/2))*0.0015)+parseInt(i.attributes.datay.value)+"vh"
    i.style.left =  ((e.clientX-(window.innerWidth/2))*0.0015)+parseInt(i.attributes.datax.value)+"vw"
  }
})

const dark = ['rgb(255,255,255)','rgb(47,46,68)','rgb(32, 31, 46)','rgb(26, 26, 41)'];
const light = ['rgb(255,255,255)','rgb(47,46,68)','rgb(255,255,255)','rgb(26, 26, 41)'];

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