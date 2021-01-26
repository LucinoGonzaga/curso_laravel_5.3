<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class  ContatoController  extends Controller
{
    public function index(){
        $contatos = [
           (object) ["nome"=>"Maria","celular"=>"86323387"],
           (object) ["nome"=>"Pedro","celular"=>"34154784"],
        ];
        return view('contato.index', compact('contatos'));
    }
        
    public function editar(){
        $req[nome];
        return "Esse é o editar do contato controller - Nome: ".$req." viu?";
    }
}
