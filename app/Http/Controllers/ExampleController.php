<?php

namespace App\Http\Controllers;

class ExampleController extends Controller
{
    public function home()
    {
        return view('welcome');
    }

    public function nombre()
    {
        echo "Url Nombre";
    }

    public function saludar($nombre = "invitado")
    {
        $consolas = ['PS4', 'XOne'];
        return view('saludo', compact('nombre', 'consolas'));
    }
}
