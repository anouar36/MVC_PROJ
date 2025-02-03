<?php
require_once __DIR__.'/../vendor/autoload.php';
require_once __DIR__.'/../routes/web.php';

use App\Http\Route;
use App\Config\db;

var_dump(Route::$routes['get']['/']());
var_dump(Route::$routes['get']['/anouar']());


function get($hh){
    echo'hello';
    $hh();
}
get(function (){
    echo'worlds';
});

