import { Hero } from "./Heros";
import { Monstre } from "./Monstre";

//canvas variables
const cWidth = 1000;
const cHeight = 800;
const cUrl = "../img/CastleExample_3.png";

var plateau = new Plateau(cWidth, cHeight, cUrl);
var player = new Hero();
var monster = new Monstre();