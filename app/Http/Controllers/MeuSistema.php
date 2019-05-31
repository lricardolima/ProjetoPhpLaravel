<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MeuSistema extends Controller
{
    public function getNome(){
        return "<h1>Luis Ricardo<h1>";
    }

    public function getIdade(){
        return "<h1>33 anos</h1>";
    }
}
