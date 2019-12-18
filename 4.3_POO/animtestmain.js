import { Familiar } from "./familiar.js";
import { FamiliarList } from "./familiarList.js";

//need to specify frame number or calculate it somehow
const scale = 1;
const famNum = 457; //number of familiars that exist

//list of familiars and their respective data
let arr = [];
var famList = new FamiliarList(arr);


//eventlistener
document.getElementById("button").addEventListener("click", go)

let jsonloaded = JSONget();
jsonloaded.then(function () {    //create the options
    let select = document.createElement("select");
    select.setAttribute("id", "select");
    for (let i = 0; i < (famNum - 1); i++) {
        let option = document.createElement("option");
        option.setAttribute("value", i);
        if (famList.getFamById(i).name != "") {
            option.innerHTML = famList.getFamById(i).name;
        } else {
            let j = i + 1;
            option.innerHTML = j;
        }
        select.appendChild(option);
    }
    document.getElementById("target").appendChild(select); //add to body
}); //after the json is loaded

//read the familiar list and store the data in objects
function JSONget() {
    return new Promise(function (resolve) {
        $.getJSON("spritesheet.json", function (data) {
            for (let i = 1; i < data.length; i++) {
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
                let fam = new Familiar(id, name, frames, width, height, scale);
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

    //delete old canvas, make new one
    document.querySelector('canvas').remove();
    let canv = document.createElement('canvas');
    canv.setAttribute("height", 500);
    canv.setAttribute("width", 500);
    document.body.appendChild(canv);

    let canvas = document.querySelector('canvas');
    let ctx = canvas.getContext('2d');

    //draw a frame
    function drawFrame(frameX, frameY) {
        ctx.drawImage(img,
            frameX * selectedFam.width, frameY * selectedFam.height, selectedFam.width, selectedFam.height,
            0, 0, selectedFam.scaledWidth, selectedFam.scaledHeight);
    }

    function init() {
        window.requestAnimationFrame(step);
    }

    window.requestAnimationFrame(step);
    var cycleLoop = selectedFam.getCycleLoop();
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