let targetNumber = Math.floor(Math.random()*100)+1;

console.log (targetNumber);

let userNumber = prompt('Devinez un nombre entre 1 et 100 :');

while(userNumber != targetNumber){

if(userNumber > targetNumber) 
        {alert('C\'est Trop Grand Fumier Réessaie');}
    else if (userNumber < targetNumber) 
        {alert('C\'est Trop Petit Chien Réessaie');}

     userNumber = prompt('Devinez un nombre entre 1 et 100 :');
}
 {alert('Bien jouer Ma Biche');}



/*
let firstName = prompt (`Commennt T'apelle Tu MEK!`) ;
let lastName = prompt (`Et ton nom de famille MEK!`) ;
let userAge = prompt (`Combien de temps a tu passé sur Terre ?`)

console.log (`Salut ! ${firstName} ${lastName} tu a ${userAge} ans`);
*/
