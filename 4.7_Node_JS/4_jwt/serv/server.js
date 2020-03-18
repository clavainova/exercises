// On importe express dans notre application
// Node utilise require pour cette opération (comme les imports de la programmation en modules par exemple)
const express = require("express");
// On crée notre application express
const app = express();
// App.get permet de déterminer nos routes une à une
app.get('/', function (req, res) {
    res.sendFile("/var/www/html/progression/4.7_Node_JS/4_jwt/app/index.html")
});

app.get('/cris', function (req, res) {
    res.send("<a href='https://www.youtube.com/watch?v=dg6Boku_bQc' target='_blank'>Tous les cris les SOS</a>")
});
// Ici nous utilisons une wildcard * pour capter les routes qui ne sont pas encore définies et renvoyer une erreur 404
app.get('*', function (req, res) {
    res.status(404).send("Il n'y a rien ici mais <a href='<a href='https://www.youtube.com/watch?v=y_wlAn8L9_E' target='_blank'>je t'aime quand même tu sais</a>");
});

app.listen(3000, () => {
    console.log('Serveur en écoute sur le port 3000');
});


//body parser test
var bodyParser = require('body-parser')
app.use(bodyParser.urlencoded({ extended: false }))
app.use(bodyParser.json())

app.use(function (req, res) {
    res.setHeader('Content-Type', 'text/plain')
    res.write('you posted:\n')
    res.end(JSON.stringify(req.body, null, 2))
})

//handlebars??