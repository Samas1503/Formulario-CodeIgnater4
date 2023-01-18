<?php

namespace App\Controllers;

class FormularioController extends BaseController
{
    public function index()
    {
        $data = [
            'titulo' => 'Formulario'
        ];
        return view('Templates/header',$data)
            .   view('Formulario/formulario')
            .   view('Templates/footer');
    }

    public function enviarPost(){
        $valor1 = $_POST['username'];
        $valor2 = $_POST["recipient'sUsername"];
        $valor3 = $_POST['url'];
        $valor4 = $_POST['value'];
        $valor5 = $_POST['server'];
        $valor6 = $_POST['messagge'];
        echo $valor1;
        echo $valor2;
        echo $valor3;
        echo $valor4;
        echo $valor5;
        echo $valor6;
    }
}
