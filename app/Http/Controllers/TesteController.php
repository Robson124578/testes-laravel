<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TesteController extends Controller
{
    public function exibeView(string $nome = 'Nome não informado', int $idade = null){

        $inscritos = array(
                 ['nome'=> 'Robson',   'idade'=> 35, 'sexo'=>'M'],
                 ['nome'=> 'Paula',    'idade'=> 36, 'sexo'=>'F'],
                 ['nome'=> 'Isaac',    'idade'=> 06, 'sexo'=>'M'],
                 ['nome'=> 'Clarinha', 'idade'=> 14, 'sexo'=>'F']
        );

        return view('home', compact('inscritos', 'nome', 'idade'));
    }
}
