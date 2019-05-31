<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeControlador extends Controller
{
    public function getWelcome(){
        return view('Welcome');
    }
}
