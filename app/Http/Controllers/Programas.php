<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\ModelPrograma;

class Programas extends Controller
{
    public function index(){
        $programas = DB::table('programa')
        ->join('facultad', 'facultad', '=', 'cod_facultad')
        ->get();
        return view('programas.programas', ['programas' => $programas]);
    }

    public function eliminar($id){
        // Busca el registro en la tabla con el respectivo codigo
        $facultad = ModelPrograma::findOrFail($id);
        $facultad->delete();
        return redirect()->route('listadoProgramas');
    }

    public function viewRegistrar(){
        return view('programas.registroPrograma');
    }

    public function registrar(Request $request){
        $programa = new ModelPrograma();
        $programa->cod_programa = $request->input('codPrograma');
        $programa->nom_programa = $request->input('nomPrograma');
        $programa->facultad = $request->input('facultad');
        $programa->save();
        
        return redirect()->route('listadoProgramas');
    }
}
