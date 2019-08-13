
var callEnemy = document.getElementById('attack');
var enemyPlace = document.getElementById('Enemy');
var attack = document.getElementById('attack-2');

// HERO STATS
var heroHealth = localStorage.getItem('health');
var heroDamage = Math.floor(Math.random() * 10);
var stamina = 50;
var heroGold = localStorage.getItem('gold');
if (heroGold == undefined) {
  localStorage.setItem('gold', 0);
}

// Monsters stats
var monsters = [{
  name: "Fox",
  damage: 5,
  health: 25,
  dropGold: Math.floor(Math.random() * 10)
},
{
name: "Goblin",
damage: 7,
health: 50,
dropGold: Math.floor(Math.random() * 30)
},
{
name: "Troll",
damage: 31,
health: 150,
dropGold: Math.floor(Math.random() * 60)


}]


//Player Stats function
function PlayerStats() {
  document.getElementById('playerStats').innerHTML =
  'Health : ' + heroHealth +  ' <br> Stamina : ' + stamina + ' <br> Gold : ' + heroGold;
}
PlayerStats();


//Call the enemy function!

var activeMonster = {};
callEnemy.addEventListener("click", function(){
  var mID = Math.round(Math.random() * 2);
  activeMonster = Object.assign({}, monsters[mID]);
  enemyPlace.innerHTML = "Monster : " + activeMonster.name + '<br> Health : ' + activeMonster.health + '<br> Damage : ' + activeMonster.damage;
});






//Attack function!!!


// HERO  GETS DAMAGE
function doDamage(damage){
  if (heroHealth < 0) {
    document.getElementById('arena').innerHTML ="You are already dead chill out!";
    return;
}

heroHealth -= activeMonster.damage;
localStorage.setItem('health', heroHealth);
if (heroHealth === 0 ||  heroHealth == undefined || heroHealth < 0) {
  localStorage.setItem('health', 100);
}



if (heroHealth >= 0) {
  return;
}
    heroHealth = 0;
    document.getElementById('arena').innerHTML ="Sorry, but you have been defeated! Go back to town";
    var btn = document.createElement("BUTTON");
    btn.innerHTML = "Go back to town Hero";
    document.body.appendChild(btn);
    btn.onclick = function (){
      location.href = 'index.html';
    }


  }





// MONSTER GETS DAMAGE



function giveDamage(){
  if (activeMonster.health <=0) {
    document.getElementById('arena').innerHTML =" It\s dead Hero calm down!";
    return;
  }
    activeMonster.health -= heroDamage;



if (activeMonster.health > 0){
    return;
}
    activeMonster.health = 0 ;
    var btn = document.createElement("BUTTON");
    btn.innerHTML = "Go back to town Hero";
    document.body.appendChild(btn);
    btn.onclick = function (){
      location.href = 'index.html';
    }
    heroGold += activeMonster.dropGold;
    localStorage.setItem('gold', heroGold);
    document.getElementById('arena').innerHTML =" You won hero! The monster you slayed have droped some drop, check it out! <br> Gold : " + activeMonster.dropGold;

}


// GIVES DAMAGE AFTER PRESS BUTTON
attack.addEventListener("click", function(){
if (heroHealth > 0 && activeMonster.health > 0){
  doDamage(activeMonster.damage);
  giveDamage();
  document.getElementById('playerStats').innerHTML =
  'Health : ' + heroHealth +  ' <br> Stamina : ' + stamina + ' <br> Gold : ' + heroGold;
  enemyPlace.innerHTML = "Monster : " + activeMonster.name + '<br> Health : ' + activeMonster.health + '<br> Damage : ' + activeMonster.damage;

}

});
