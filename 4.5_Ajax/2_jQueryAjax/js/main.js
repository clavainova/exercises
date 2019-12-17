function getText() {
    console.log("getText called");
    $.getJSON("../1_fromages.json", function (data) {
        //console.log(data);
        //import the text

        for (let i = 0; i < data.length; i++) {

            let $div = $("<div>");
            let $h2 = $("<h2>");
            $h2.append(document.createTextNode(data[i].nom));
            $div.append($h2);

            let $p = $("<p>");
            $p.append(document.createTextNode(("Type : " + data[i].type + " / Pays : " + data[i].pays)));
            $div.append($p);

            let $span = $("<span>");
            let str = "";
            for (let j = 0; j < data[i].classement; j++) {
                str += "⭐";
            }
            $span.append(document.createTextNode(str));
            $div.append($span);

            console.log("div: " + $div.html());
            document.getElementById("target").append($div);
        }
    });
}