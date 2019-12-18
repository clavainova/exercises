import { Familiar } from "./familiar.js";

//need to specify frame number or calculate it somehow
var bossIds = ["399", "398", "365", "364", "327", "326", "289", "288", "269", "268", "263", "262", "261", "260", "215", "214", "197", "196", "185", "184", "175", "174", "161", "162"]; //boss ids - bigger
const upperLimit = 457; //range of images available - updated 18.12.2019
const lowerLimit = 150;
const scale = 1;
//dimensions
const width = 125;
const height = 130;
const scaledWidth = scale * width;
const scaledHeight = scale * height;
//boss dimensions
const bossWidth = 215;
const bossHeight = 215;
const bossScaledWidth = scale * bossWidth;
const bossScaledHeight = scale * bossHeight;

//create the canvas and options
let select = document.createElement("select");
select.setAttribute("id", "select");
for (let i = lowerLimit; i < upperLimit; i++) {
    let option = document.createElement("option");
    option.setAttribute("value", i);
    option.innerHTML = i;
    select.appendChild(option);
}
document.getElementById("target").appendChild(select);
//add to body

/*for animations*/

function go() {
    var id = document.getElementById("select").value;
    let img = new Image();
    str = "spritesheet/" + id + ".png";
    img.src = str;
    img.onload = function () {
        init();
    };

    document.querySelector('canvas').remove();
    let canv = document.createElement('canvas');
    canv.setAttribute("height", 500);
    canv.setAttribute("width", 500);
    document.body.appendChild(canv);

    let canvas = document.querySelector('canvas');
    let ctx = canvas.getContext('2d');

    function drawFrame(frameX, frameY) {
        if (bossIds.includes(id)) {
            ctx.drawImage(img,
                frameX * bossWidth, frameY * bossHeight, bossWidth, bossHeight,
                0, 0, bossScaledWidth, bossScaledHeight);
        }
        else {
            ctx.drawImage(img,
                frameX * width, frameY * height, width, height,
                0, 0, scaledWidth, scaledHeight);
        }
    }

    function init() {
        window.requestAnimationFrame(step);
    }

    window.requestAnimationFrame(step);
    const cycleLoop = [0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 11, 10, 9, 8, 7, 6, 5, 4, 3, 2, 1];
    let currentLoopIndex = 0;
    let frameCount = 0;

    function step() {
        frameCount++;
        if (frameCount < 20) {
            window.requestAnimationFrame(step);
            return;
        }
        frameCount = 0;
        ctx.clearRect(0, 0, canvas.width, canvas.height);
        drawFrame(cycleLoop[currentLoopIndex], 0, 0, 0);
        currentLoopIndex++;
        if (currentLoopIndex >= cycleLoop.length) {
            currentLoopIndex = 0;
        }
        window.requestAnimationFrame(step);
    }
}