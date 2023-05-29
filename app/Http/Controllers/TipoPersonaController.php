<?php

namespace App\Http\Controllers;

use App\Models\TipoPersona;
use Illuminate\Http\Request;

class TipoPersonaController extends Controller
{
    public function getTipo(){
        $tipos = TipoPersona::where('estado', true)->get();
        return view('index', compact('tipos'));
    }

    public function store(Request $request){
        $tipos = new TipoPersona();
        $tipos->tipo = $request->tipo;
        $tipos->save();
        //return redirect('/tipo/persona');
        return back();
    }

    public function delete($id){
        $tipo = TipoPersona::find($id);
        if($tipo){
            $tipo->estado = false;
            $tipo->save();
        }
        return back();
    }

    public function update($id, Request $request){
        $tipo = TipoPersona::find($id);
        if($tipo){
            $tipo->tipo = $request->tipo;
            $tipo->save();
        }
        return back();
    }

    public function datosEditar($id){
        $tipo = TipoPersona::find($id);
        return view('tipoPersona.edit', compact('tipo'));
    }
}
