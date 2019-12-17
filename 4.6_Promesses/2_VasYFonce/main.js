import { Auteur } from "./auteur.js";
"use strict";

var url = "anatole.json";
var anatArr = JSONget();

url = "promesses.json";
var promArr = JSONget();

function JSONget() {
    return new Promise(function (resolve, reject) {
        let xmlhttp = new XMLHttpRequest();
        xmlhttp.open("GET", url, true);
        xmlhttp.send();
        xmlhttp.onreadystatechange = function () {
            if (this.readyState == 4 && this.status == 200) {
                let arr = JSON.parse(this.responseText);
                resolve(arr);
            }
        }
    });
}

(async () => {
    try {
        await JSONget();
        console.log(anatArr);
    } catch (e) {
        console.log(e);
    }
})();
