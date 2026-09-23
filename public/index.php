<?php


//Charge les classes automatique sans avoir utilisé la require ou include

// use Database\Database;

require '../vendor/autoload.php';

define('PATH', dirname(__DIR__));



require_once PATH . "/templates/utils/errors/input_error.php";
require_once PATH . '/routes/web.php';

// $homeController = new HomeController();
// var_dump($homeController);
// $db = new Database();
// $db->instance();
