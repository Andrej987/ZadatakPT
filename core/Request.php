<?php

namespace Core ;

class Request
{
    // take url and return only url path part, also remove '/' from beginning and on the end

    public static function uri() {

        return trim (parse_url($_SERVER['REQUEST_URI'],PHP_URL_PATH), '/');

    }

    // return type of request ( get, post )

    public static function method() {

        return $_SERVER ['REQUEST_METHOD'];

    }

}