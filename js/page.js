function openGlobe() {
  document.getElementById("myGlobe").style.display = "block";
}

function closeGlobe() {
  document.getElementById("myGlobe").style.display = "none";
}




let l = window.location.href;
let cityName='';

for(let i=l.indexOf('?')+6; i<l.length; i++){
  cityName=cityName+l[i];
}

const malningArea = document.getElementsByClassName('area');

switch(cityName) {
  case "Stockholm":
    for(let i=0; i<3;i++) {
      malningArea[i].innerHTML = "Stockholm";
    }
    break;

  case "Lidingö":
    for(let i=0; i<3;i++) {
      malningArea[i].innerHTML = "Lidingö";
    }
    break;

  case "Bromma":
    for(let i=0; i<3;i++) {
      malningArea[i].innerHTML = "Bromma";
    }
    break;

  case "Täby":
    for(let i=0; i<3;i++) {
      malningArea[i].innerHTML = "Täby";
    }
    break;

  case "Danderyd":
    for(let i=0; i<3;i++) {
      malningArea[i].innerHTML = "Danderyd";
    }
    break;

  case "Solna":
    for(let i=0; i<3;i++) {
      malningArea[i].innerHTML = "Solna";
    }
    break;

  case "Järfälla":
    for(let i=0; i<3;i++) {
      malningArea[i].innerHTML = "Järfälla";
    }
    break;

  case "Spånga":
    for(let i=0; i<3;i++) {
      malningArea[i].innerHTML = "Spånga";
    }
    break;

  case "Upplands Väsby":
    for(let i=0; i<3;i++) {
      malningArea[i].innerHTML = "Upplands Väsby";
    }
    break;

  case "Vallentuna":
    for(let i=0; i<3;i++) {
      malningArea[i].innerHTML = "Vallentuna";
    }
    break;

  case "Sigtuna":
    for(let i=0; i<3;i++) {
      malningArea[i].innerHTML = "Sigtuna";
    }
    break;
  case "Fasadmålning i Sollentuna":
    for(let i=0; i<3;i++) {
      malningArea[i].innerHTML = "Fasadmålning i Sollentuna";
    }
    break;
}
