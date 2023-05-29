<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class PersonaController extends Controller
{
        
    public function datos(){
        $nombre = 'Nixon Bravo';
        $users = User::all();
        
        return view('persona', compact('nombre', 'users'));
    }

}
