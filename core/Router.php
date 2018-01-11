<?php

namespace Core;

class Router

{

    public $routes = [

        'GET' => [],
        'POST' => []

    ];

    // looking for uri with get request

    public function get($uri, $controller)
    {

        $this->routes ['GET'][$uri] = $controller;

    }

    // looking for uri with post request

    public function post($uri, $controller)
    {

        $this->routes ['POST'][$uri] = $controller;

    }

    // looking if there is a match of requested method and uri and return route associated with it

    public function direct($uri, $requestType)
    {

        if (array_key_exists($uri, $this->routes [$requestType])) {

            // separate the url string on '@' sign and ' ... ' operator take the separated strings and puts them into array but with different index

            return $this->callAction(...explode('@', $this->routes [$requestType][$uri]));

        }

        echo 'Error';

    }

    // looking into a controller and returns a matching method if exists

    protected function callAction($controller, $action)
    {

        $controller = new $controller;

        if (method_exists($controller, $action)) {

            return $controller->$action ();
        }

        echo 'Error';
    }


    // take the file from index.php and return class instance

    public static function load($file)
    {

        $router = new static();

        require $file;

        return $router;

    }

}