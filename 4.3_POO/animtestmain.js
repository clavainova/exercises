import { Familiar } from "./familiar.js";
import { FamiliarList } from "./familiarList.js";

//make still ones function without animation

const famNum = 457; //number of familiars that exist

//these two are customizable
var scale = 1;
var speed = 15;

//list of familiars and their respective data
let arr = [];
var famList = new FamiliarList(arr);

let jsonloaded = JSONget();
jsonloaded.then(function () {    //create the options
    let select = document.createElement("select");
    select.setAttribute("id", "select");
    for (let i = 0; i < famNum; i++) {
        let option = document.createElement("option");
        option.setAttribute("value", i);
        try {
            if (famList.getFamById(i).name != "") {
                option.innerHTML = famList.getFamById(i).name;
            } else {
                let j = i + 1;
                option.innerHTML = j;
            }
        }
        catch (e) {
            break;
        }
        select.appendChild(option);
    }
    document.getElementById("target").appendChild(select); //add to body
    //create button after that is loaded so ppl can't choose stuff too early
    let button = document.createElement("button");
    button.setAttribute("id", "button");
    button.innerHTML = "submit";
    document.getElementById("target").appendChild(button); //add to body

    //eventlistener
    document.getElementById("button").addEventListener("click", go)
}); //after the json is loaded

//read the familiar list and store the data in objects
function JSONget() {
    return new Promise(function (resolve) {
        $.getJSON("spritesheet.json", function (data) {
            for (let i = 0; i < data.length; i++) {
                let id = data[i].id;
                let name = data[i].name;
                let frames = data[i].frames;
                let width;
                let height;
                if (data[i].size == "normal") {
                    width = 125;
                    height = 130;
                }
                else {
                    width = 215;
                    height = 215;
                }
                let fam = new Familiar(id, name, frames, width, height);
                famList.push(fam);
            }
            resolve();
        });
    });
}

function go() {
    //get the selected familiar and produce the relevant image
    var index = document.getElementById("select").value;
    var selectedFam = famList.getFamById(index);
    let img = new Image();
    let str = selectedFam.getImgUrl();
    img.src = str;
    img.onload = function () {
        init();
    };

    //set scale and speed
    scale = document.getElementById("scale").value;
    speed = document.getElementById("speed").value;

    //get the settings

    //delete old canvas, make new one
    document.querySelector('canvas').remove();
    let canv = document.createElement('canvas');
    canv.setAttribute("height", 500);
    canv.setAttribute("width", 500);
    document.body.appendChild(canv);
    let canvas = document.querySelector('canvas');
    var ctx = canvas.getContext('2d');


    //draw a frame
    if (selectedFam.frames > 1) {
        window.requestAnimationFrame(step);
    }

    var cycleLoop = selectedFam.getCycleLoop();
    var currentLoopIndex = 0;
    var frameCount = 0;

    function init() {
        if (selectedFam.frames > 1) {
            console.log("animating");
            window.requestAnimationFrame(step);
        }
        else {
            console.log("drawing still");
            ctx.drawImage(img,
                0, 0, selectedFam.width, selectedFam.height,
                0, 0, selectedFam.width * scale, selectedFam.height * scale);
        }
    }

    function drawFrame(frameX, frameY) {
        ctx.drawImage(img,
            frameX * selectedFam.width, frameY * selectedFam.height, selectedFam.width, selectedFam.height,
            0, 0, selectedFam.width * scale, selectedFam.height * scale);
    }

    function step() {
        frameCount++;
        if (frameCount < speed) {
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