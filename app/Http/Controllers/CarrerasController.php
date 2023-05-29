<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CarrerasController extends Controller
{
    public function show(){
        return view('turismo');
    }

    public function mostrar(){
        return view('computacion');
    }
}
