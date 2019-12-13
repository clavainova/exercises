import { Hero } from "./Heros.js";
import { Monstre } from "./Monstre.js";
import { Plateau } from "./Plateau.js";
import { Bomb } from "./Bombe.js";
import { List } from "./List.js";
//"object" is imported in heros, monstre & bombes
"use strict";

//                    *************
//******************** -- to do -- *********************//
//                    *************

//increments/frames  - request animation frame?? need to end lag and make smoother
//                   - use grid like example? 32x32px?
//                   - 8 possible moves, use moveTo()
//array of positions - to prevent overlap
//                   - also for collision detection
//actually do something with plateau object?? position array history in there?
//                   - rn it offers no utility
//animations
//                   -explosion
//                   -you lose
//timer
//score
//sounds


//                    *******************************
//******************** -- variables and constants -- *********************//
//                    *******************************
//urls
const cUrl = "img/background.jpg";
const heroUrl = "img/hero.png";
const monstUrl = "img/monster.png";
const bombUrl = "img/pixel-bomb-bombe-explosion.png";
const explUrl = "img/ground-explode.gif";
const loseUrl = "img/you-lose.gif"; //need alternative 
//dimensions
// >bomb
const bombNum = 10;
const bombWidth = 32;
const bombHeight = 32;
// >hero
const heroHeight = 32;
const heroWidth = 32;
const heroSpeed = 10;
// >monstre
const monstHeight = 32;
const monstWidth = 30;
// >canvas
const cWidth = 1000;
const cHeight = 800;
//time + score
const timeLimit = 15;
var countdown;
var score;
var highScore;
//controls
var keys = [];
//objects
var hero = new Hero(0, 0, heroWidth, heroHeight, heroUrl, 0, 0, heroSpeed);
var monstre = new Monstre(monstWidth, monstHeight, monstUrl);
var bombeList = new List([]);
var plateau = new Plateau(cWidth, cHeight, cUrl);
//coords array
var coords = [];

//******************** -- body -- ***********************//

//initialize bomb array
for (let i = 0; i < bombNum; i++) {
    let bombe = new Bomb(bombWidth, bombHeight, bombUrl, i);
    bombeList.push(bombe);
}

//draw board
var canvas = drawCanvas();
window.ctx = canvas.getContext('2d'); //global because pretty much everything needs to access it
plateau.drawBg("board"); //set bg in css to avoid layering problems

//place items
initPos();

//******************** -- functions -- *********************//

//create canvas object
function drawCanvas() {
    "use strict";
    let canvas2 = document.createElement('canvas');
    canvas2.setAttribute("id", "board");
    canvas2.width = cWidth;
    canvas2.height = cHeight;
    document.body.appendChild(canvas2);
    return canvas2;
}

//place items - initiate position
function initPos() {
    "use strict";
    bombeList.placeItems((cWidth - bombWidth), (cHeight - bombHeight)); //place bombs
    monstre.place((cWidth - monstWidth), (cHeight - monstHeight)); //place monstre
    hero.place((cWidth - heroWidth), (cHeight - heroHeight)); //place hero
}

//******************** -- controls -- *********************//

//event listeners -- controls
window.addEventListener('keydown', keysPressed, false);
window.addEventListener('keyup', keysReleased, false);

function keysPressed(event) {
    "use strict";
    keys[event.keyCode] = true;
    if (keys[37]) {
        hero.rateX -= hero.speed;
    }
    if (keys[39]) {
        hero.rateX += hero.speed;
    }
    if (keys[38]) {
        hero.rateY -= hero.speed;
    }
    if (keys[40]) {
        hero.rateY += hero.speed;
    }
    event.preventDefault();
    // console.log("rate x: " + hero.rateX + " rate y: " + hero.rateY + " x: " + hero.x + " y: " + hero.y);
    hero.despawn(hero.x, hero.y);
    //check if out of bounds
            if (hero.x > (cWidth - hero.width)) { hero.x = (cWidth - hero.width); }
            else if (hero.x <= 0) { hero.x = 0; }
            if (hero.y > (cHeight - hero.height)) { hero.y = (cHeight - hero.height); }
            else if (hero.y <= 0) { hero.y = 0; }
    hero.draw((hero.x += hero.rateX), (hero.y += hero.rateY));
    hero.rateX = 0;    //annul previous momentum so speed doesn't keep building
    hero.rateY = 0;
}

function keysReleased(event) {
    "use strict";
    keys[event.keyCode] = false;
}