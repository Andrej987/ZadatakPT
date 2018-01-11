<?php


namespace Controllers\Posts ;


class PostsController {

    public function index(){

        $posts =  array(
            'class name' => __CLASS__,
            'URL'=> $_SERVER['REQUEST_URI'],
            'method'=> $_SERVER['REQUEST_METHOD']
        );

        var_dump(json_encode($posts));
    }

    public function store()
    {
        $posts_store = array(
            'class name' => __CLASS__,
            'URL' => $_SERVER['REQUEST_URI'],
            'method' => $_SERVER['REQUEST_METHOD']
        );

        var_dump(json_encode($posts_store));

    }
}