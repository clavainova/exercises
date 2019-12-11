import { Hero } from "./Heros.js";
import { Monstre } from "./Monstre.js";
import { Plateau } from "./Plateau.js";

"use strict";

//canvas dimensions
const cWidth = 1000;
const cHeight = 800;

//urls
const cUrl = "img/background.jpg";
const heroUrl = "img/hero.png";
const monstUrl = "img/monster.png";
const bombUrl = "img/pixel-bomb-bombe-explosion.png";
const explUrl = "img/ground-explode.gif";
const lose = "img/you-lose.gif";

//time
const timeLimit = 15;
var countdown;

//score
var score;
var highScore;

//objects
var hero = new Hero(10, 10, heroUrl, 0, 0); //(width, height, x, y, url, speedX, speedY)
var monster = new Monstre(monstUrl);

//draw canvas
var canvas = drawCanvas();
var ctx = canvas.getContext('2d');

//plateau
var plateau = new Plateau(cWidth, cHeight, cUrl, ctx);


//populate canvas
plateau.drawBg(ctx);

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

hero.init(ctx);


//functions

function drawCanvas() {
    let canvas2 = document.createElement('canvas');
    canvas2.width = cWidth;
    canvas2.height = cHeight;

    document.body.appendChild(canvas2);
    return canvas2;
}

function winCondition() {

}