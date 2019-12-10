import { Hero } from "./Heros.js";
import { Monstre } from "./Monstre.js";
import { Plateau } from "./Plateau.js";

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
var plateau = new Plateau(cWidth, cHeight, cUrl);
var player = new Hero(heroUrl);
var monster = new Monstre(monstUrl);

//draw canvas
var canvas = drawCanvas();
var ctx = canvas.getContext('2d');

//populate canvas
plateau.drawBg(ctx);

//functions

function drawCanvas() {
    let canvas2 = document.createElement('canvas');
    canvas2.width = cWidth;
    canvas2.height = cHeight;

    document.body.appendChild(canvas2);
    return canvas2;
}

function winCondition(){

}