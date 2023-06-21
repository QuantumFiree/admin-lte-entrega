<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\ModelProfesor;

class Profesores extends Controller
{
    public function index(){
        $profesores = DB::table('profesor')
        ->join('facultad', 'facultad', '=', 'cod_facultad')
        ->get();
        return view('profesores.profesores', ['profesores' => $profesores]);
    }

    public function viewRegistrar() {
        return view('profesores.registroProfesor');
    }

    public function registrar(Request $request) {
        $profesor = new ModelProfesor;
        $profesor->cod_profesor = $request->input('codProfesor');
        $profesor->nom_profesor = $request->input('nomProfesor');
        $profesor->facultad = $request->input('facultad');
        $profesor->save();

        return redirect()->route('listadoProfesores');
    }

    public function eliminar($id) {
        $profesor = ModelProfesor::findOrFail($id);
        $profesor->delete();

        return redirect()->route('listadoProfesores');
    }

}
