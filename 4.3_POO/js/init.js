import { Hero } from "./Heros.js";
import { Monstre } from "./Monstre.js";
import { Plateau } from "./Plateau.js";

"use strict";

//urls
const cUrl = "img/background.jpg";
const heroUrl = "img/hero.png";
const monstUrl = "img/monster.png";
const bombUrl = "img/pixel-bomb-bombe-explosion.png";
const explUrl = "img/ground-explode.gif";
const loseUrl = "img/you-lose.gif";

//dimensions
const heroHeight = 32; //hero
const heroWidth = 32;
const heroSpeed = 10;
const monstHeight = 32; //monstre
const monstWidth = 30;
const cWidth = 1000; //canvas
const cHeight = 800;

//time + score
const timeLimit = 15;
var countdown;
var score;
var highScore;

//objects
var hero = new Hero(0, 0, heroWidth, heroHeight, heroUrl, 0, 0, heroSpeed);
var monster = new Monstre(monstWidth, monstHeight, monstUrl);
var plateau = new Plateau(cWidth, cHeight, cUrl, ctx);

//draw canvas
var canvas = drawCanvas();
var ctx = canvas.getContext('2d');

//event listeners
window.addEventListener('keydown', function (e) {
    ctx.key = e.keyCode;
    hero.updateMove(ctx);
    // this.console.log("keydown detected: " + e.keyCode)
})
window.addEventListener('keyup', function (e) {
    ctx.key = false;
})


//body
plateau.drawBg("board"); //set bg in css to avoid layering problems
hero.draw(ctx, hero.x, hero.y);


//functions
//create canvas object
function drawCanvas() {
    let canvas2 = document.createElement('canvas');
    canvas2.setAttribute("id", "board");
    canvas2.width = cWidth;
    canvas2.height = cHeight;

    document.body.appendChild(canvas2);
    return canvas2;
}

//check win condition/score
function winCondition() {

}