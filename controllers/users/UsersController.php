<?php



namespace Controllers\Users ;


class UsersController {

    public function index(){

        $users =  array(
            'class name' => __CLASS__,
            'URL'=> $_SERVER['REQUEST_URI'],
            'method'=> $_SERVER['REQUEST_METHOD']
        );

       var_dump(json_encode($users));

    }

    public function store(){

        $users_store =  array(
            'class name' => __CLASS__,
            'URL'=> $_SERVER['REQUEST_URI'],
            'method'=> $_SERVER['REQUEST_METHOD']
        );

        var_dump(json_encode($users_store));

    }
}