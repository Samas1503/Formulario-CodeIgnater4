<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        $data = [
            'titulo' => 'Inicio'
        ];
        return view('Templates/header', $data)
            .   view('inicio')
            .   view('Templates/footer');
    }
}
