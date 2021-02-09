var express = require('express');
var router = express.Router();

/* GET home page. */
router.get('/', function (req, res, next) {
  res.render('index', { title: 'Index' });
});

router.get('/about', function (req, res, next) {
  //res.render('about', { title: 'About' });
  res.sendFile("/var/www/html/progression/4.7_Node_JS/2_bases_etendues/myapp/public/mythique.html");

  // res.writeHead(200, {"Content-Type": "text/html"});
  // var mythiqueParent = "/public/mythique_files/";
  // var mythiqueDirectory = {
  //   "css": (mythiqueParent + "restaurant.css"),
  //   "": ""
  // };
});

module.exports = router;
