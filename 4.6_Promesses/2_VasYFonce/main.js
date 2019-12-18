import { Auteur } from "./auteur.js";

let nom;
let promesse;
let jsonUrl;
let description;
let wikiUrl;

var people = [];

makePerson("promesses.json"); //would repeat this for each person with each url
    // .then(() => {
    //     people.forEach(element =>
    //         console.log("element: " + element))
    // });

//loads 2 jsons, stores data in object, pushes object to people[]
function makePerson(url) {
    //get the personal info first
    let promArr = JSONget(url);
    promArr.then(function (value) {
        nom = value.auteur;
        promesse = value.promesse;
        jsonUrl = value.url;
        //then get the other info
    }).then(function () {
        let anatArr = JSONget(jsonUrl);
        anatArr.then(function (value) {
            description = value.description;
            wikiUrl = value.url;
            //once we have all the info, we make it an object
        }).then(function () {
            let anatole = new Auteur(nom, promesse, jsonUrl, description, wikiUrl);
            //now we push the object onto the array
            people.push(anatole);
            document.write("updating array: <br> see console");
            console.log(people);
        });
    });
}

//load a json using a promise, return the contents
function JSONget(url) {
    return new Promise(function (resolve, reject) {
        let xmlhttp = new XMLHttpRequest();
        xmlhttp.open("GET", url, true);
        xmlhttp.send();
        xmlhttp.onreadystatechange = function () {
            if (this.readyState == 4 && this.status == 200) {
                let arr = JSON.parse(this.responseText);
                //resolves when recieves json, returns data
                resolve(arr);
            }
        }
    });
}

// (async () => {
//     try {
//         await JSONget();
//         console.log(anatArr);
//     } catch (e) {
//         console.log("caught");
//         console.log(e);
//     }
// })();
