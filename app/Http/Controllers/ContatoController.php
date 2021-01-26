<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class  ContatoController  extends Controller
{
    public function index(){
        return "Esse é o Index do contato controller.";
    }
    public function criar(Request $req){
        dd($req->all());
        return "Esse é o Criar do contato controller.";
    }
    public function editar(){
        $req[nome];
        return "Esse é o editar do contato controller - Nome: ".$req." viu?";
    }
}
