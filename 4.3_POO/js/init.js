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
//                   - bomblist already has a list of coords for bombs
//                   - need to distinguish one position from another
//                   - 2D array for grid?
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
var monstre = new Monstre(monstWidth, monstHeight, monstUrl, 0, 0);
var bombeList = new List([]);
var plateau = new Plateau(cWidth, cHeight, cUrl);

//******************** -- body -- ***********************//

//initialize bomb array
for (let i = 0; i < bombNum; i++) {
    let bombe = new Bomb(bombWidth, bombHeight, bombUrl, i, 0, 0);
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

function collisionDetect() {
    "use strict";
    //if hero x and monstre x collide or hero y and monstre y collide
    // console.log("hero monstre x differential: " + (hero.x - monstre.x));
    // console.log("hero monstre y differential: " + (hero.y - monstre.y));
    if ((((hero.x - monstre.x) < 32) && ((hero.x - monstre.x) > -32))
        && (((hero.y - monstre.y) < 32) && ((hero.y - monstre.y) > -32))) {
        monstre.despawn(); //despawn this monstre
        monstre.place(cWidth, cHeight); //get a new monstre
        score++; //increase score
    }
    for (let i = 0; i < bombNum; i++) {
        //for each bomb, is it colliding with the player?
        if ((((hero.x - bombeList.get(i).x) < 32) && ((hero.x - bombeList.get(i).x) > -32))
            && (((hero.y - bombeList.get(i).y) < 32) && ((hero.y - bombeList.get(i).y) > -32))) {
            //explode
            //reset game
            console.log("you lose");
            break;
        }
    }

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

    //update coords in preparation to move
    hero.updateCoords(cWidth, cHeight);
    //collision detection would be here
    collisionDetect();
    //move the hero
    hero.move();
}

function keysReleased(event) {
    "use strict";
    keys[event.keyCode] = false;
}