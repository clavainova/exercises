//normal js
var spans = document.querySelectorAll("#selecteurJS p span");
spans[0].style = "color: red;font-style:oblique; font-weight: 600";
spans[1].style = "color: grey;font-style:oblique; font-weight: 600";

//jquery
$(document).ready(function () {
    $('#selecteurJQ p span').css("color", "red");
    $('#selecteurJQ p span').css("font-style", "oblique");
    $('#selecteurJQ p span').css("font-weight", "600");
    //second
    $('#selecteurJQ p span:first').css("color", "grey");
    $('#selecteurJQ p span:first').css("font-style", "oblique");
    $('#selecteurJQ p span:first').css("font-weight", "600");
});