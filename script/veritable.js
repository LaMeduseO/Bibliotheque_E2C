let trigger = document.querySelector('#send-button');
let numberZone = document.querySelector('#user-number');
let displayZone = document.querySelector('#game-display');

let targetNumber = Math.floor(Math.random()*100)+1;

console.log(trigger, numberZone, displayZone, targetNumber);

function compareNumber(){
   // console.log("ça marche");
   let userNumber = numberZone.value;
   let result;
   // console.log(userNumber);
   if (userNumber==targetNumber) {result='gagné'}
   else if(userNumber > targetNumber) 
        {result='C\'est Trop Grand Fumier Réessaie';}
    else if (userNumber < targetNumber) 
        {result='C\'est Trop Petit Chien Réessaie';}

    let resultZone = document.createElement ('p');
    resultZone.innerHTML = result;
    resultZone.style.padding = "5px";
    resultZone.classList.add('result-line');

    //console.log(resultZone);

    displayZone.appendChild(resultZone);

}


trigger.addEventListener('click', compareNumber);
/* 

console.log (targetNumber);

let userNumber = prompt('Devinez un nombre entre 1 et 100 :');

while(userNumber != targetNumber){



     userNumber = prompt('Devinez un nombre entre 1 et 100 :');
}
 {alert('Bien jouer Ma Biche');}



/*
let firstName = prompt (`Commennt T'apelle Tu MEK!`) ;
let lastName = prompt (`Et ton nom de famille MEK!`) ;
let userAge = prompt (`Combien de temps a tu passé sur Terre ?`)

console.log (`Salut ! ${firstName} ${lastName} tu a ${userAge} ans`);
*/
