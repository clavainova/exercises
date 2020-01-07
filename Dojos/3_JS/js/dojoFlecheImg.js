//round corners

let img = document.getElementsByTagName("div")[0];
img.setAttribute("onmouseover", "squareImg(img)");
img.setAttribute("onmouseleave", "circleImg(img)");
console.log(img);

function squareImg(img) {
    console.log("change activated + " + img);
    img.style.borderRadius = 0 + "%";
}

function circleImg(img) {
    console.log("revert activated + " + img);
    img.style.borderRadius = 50 + "%";
}

// function changeImg(img, goal, current) {
//     // console.log("first: " + img.style.borderRadius);
//     // let current = img.style.borderRadius.substring(0, img.style.borderRadius.length);
//     // parseInt(current, 10);
//     console.log("border radius = " + current);

//     if (Math.sign(goal - current)) {
//             img.style.borderRadius = goal + "%";
//     }
//     else {
//         //while (current != goal) {
//             console.log("looping");
//             current--;
//             img.style.borderRadius = current + "%";
//         //}
//     }

// }


//fleches

let arr = document.getElementsByTagName("article");
for (let i = 0; i < arr.length; i++) {
    arr[i].setAttribute("onclick", "show(this)");
}
var numArticle = arr.length;

function show(element) {
    let children = element.children;
    console.log("current visibimity " + children[1].style.visibility);
    if (children[1].style.visibility != "visible") {
        // hideAll();  -- for only one open at one time
        for (let i = 0; i < children.length; i++) {
            children[i].style.visibility = "visible";
            children[i].style.height = "auto";
        }
    }
    else {
        console.log("should hide");
        hideElem(element);
    }

}

function hideAll() {
    let arr = document.getElementsByTagName("article");
    for (i = 0; i < arr.length; i++) {
        hideElem(arr[i]);
    }
}

function hideElem(elem) {
    console.log("hiding children of " + elem);
    let childList = elem.children;
    for (let i = 1; i < childList.length; i++) {
        childList[i].style.visibility = "hidden";
        childList[i].style.height = "0";
    }
}

function showMenus() {
    if (document.getElementsByTagName("a")[2].style.display != "block") {
        document.getElementsByTagName("a")[2].style.display = "block";
        document.getElementsByTagName("a")[3].style.display = "block";
    } else {
        document.getElementsByTagName("a")[2].style.display = "none";
        document.getElementsByTagName("a")[3].style.display = "none";
    }
}
