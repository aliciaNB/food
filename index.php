<?php

//Turn on error reporting
ini_set('display_errors', 1);
error_reporting(E_ALL);

//Require autoload file
require_once('vendor/autoload.php');

//Create an instance of the Base class (instantiate)
$f3 = Base::instance();

//Turn on Fat-Free error reporting
$f3->set('DEBUG', 3);

//Define a default route
$f3->route('GET /', function() {

    //Display a view
    $view = new Template();
    echo $view->render('views/home.html');
});

//Define a breakfast route
$f3->route('GET /breakfast', function() {

    //Display breakfast view
    $view = new Template();
    echo $view->render('views/breakfast.html');
});

//Define a  continental breakfast route
$f3->route('GET /breakfast/continental', function() {

    //Display breakfast view
    $view = new Template();
    echo $view->render('views/bfast-cont.html');
});


$f3->route('GET /lunch', function() {

    //Display lunch view
    $view = new Template();
    echo $view->render('views/lunch.html');
});

$f3->route('GET /lunch/brunch/buffet', function() {

    //Display lunch view
    $view = new Template();
    echo $view->render('views/buffet.html');
});


//Run Fat-free
$f3->run();
