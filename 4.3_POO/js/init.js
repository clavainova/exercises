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

//controls
var keys = [];

//objects
var hero = new Hero(0, 0, heroWidth, heroHeight, heroUrl, 0, 0, heroSpeed);
var monster = new Monstre(monstWidth, monstHeight, monstUrl);
var plateau = new Plateau(cWidth, cHeight, cUrl, ctx);

//draw canvas
var canvas = drawCanvas();
var ctx = canvas.getContext('2d');

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

//event listeners -- controls
window.addEventListener('keydown', keysPressed, false);
window.addEventListener('keyup', keysReleased, false);

function keysPressed(event) {
    //movement very shaky rn, bad fps, bad turning
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
    hero.despawn(hero.x, hero.y, ctx);
    hero.draw(ctx, (hero.x += hero.rateX), (hero.y += hero.rateY));
    hero.rateX = 0;    //annul previous momentum so speed doesn't keep building
    hero.rateY = 0;
}

function keysReleased(event) {
    keys[event.keyCode] = false;

}