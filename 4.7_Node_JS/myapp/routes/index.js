var express = require('express');
var router = express.Router();
var template = ""; //require('index.html');

/* GET home page. */
router.get('/', function(req, res, next) {
  res.render('index', { title: 'Express' }, template.render);
});

module.exports = router;