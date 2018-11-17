<?php

Route::get('/', ['as' => 'home', function() {
        return view('home');
    }]);

Route::get('contactame', ['as' => 'contactos', function() {
        return view('contactos');
    }]);

Route::get('saludo/{nombre?}', ['as' => 'saludo', function($nombre = "invitado") {
        $html = "<h1>CONTENIDO HTML</h1>";
        $script = "<script>alert('CODIGO DESDE JAVASCRIPT');</script>";
        $consolas = [
            "play 2",
            "play 3",
            "play 4",
            "x box"
        ];
        return view('saludo', compact('nombre', 'html', 'script', 'consolas'));
    }])->where('nombre', "[A-Za-z]+");


