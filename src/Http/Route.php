<?php
namespace App\Http;

use http\Env\Request;

class Route {
    public static $routes = [];
    protected $request;
    protected $response;

    public  function  __cunstruct($request ,$response){

        $this->request = $request;
        $this->response = $response;

    }

    public static function get($route , $action){

        self::$routes['get'][$route] = $action;

    }

    public static function post($route , $action)  {

        self::$routes['post'][$route] = $action;

    }
}
