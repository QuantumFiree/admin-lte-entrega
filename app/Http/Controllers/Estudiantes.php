<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\ModelEstudiante;

class Estudiantes extends Controller
{
    public function index(){
        $estudiantes = DB::table('estudiante')
        ->join('facultad', 'facultad', '=', 'cod_facultad')
        ->join('programa', 'programa', '=', 'cod_programa')
        ->get();
        return view('estudiantes.estudiantes', ['estudiantes' => $estudiantes]);
    }

    public function viewRegistrar() {
        return view('estudiantes.registroEstudiante');
    }

    public function registrar(Request $request) {
        $estudiante = new ModelEstudiante;
        $estudiante->cod_estudiante = $request->input('codEstudiante');
        $estudiante->nom_estudiante = $request->input('nomEstudiante');
        $estudiante->programa = $request->input('programa');
        $estudiante->facultad = $request->input('facultad');
        $estudiante->save();

        return redirect()->route('listadoEstudiantes');
    }

    public function eliminar($id) {
        $estudiante = ModelEstudiante::findOrFail($id);
        $estudiante->delete();

        return redirect()->route('listadoEstudiantes');
    }
}
