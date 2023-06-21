<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Facultad;

class Facultades extends Controller
{
    public function index(){
        $facultad = DB::table('facultad')->get();
        return view('facultades.listado', ['facultades' => $facultad]);
    }

    public function form_registro(){
        return view('facultades.form_registro');
    }

    public function registrar(Request $request){
        $facultad = new Facultad();
        $facultad->cod_facultad = $request->input('codfacultad');
        $facultad->nom_facultad = $request->input('nomfacultad');
        $facultad->save();
        return redirect()->route('listadoFacultades');
    }

    public function eliminar($id){
        // Busca el registro en la tabla con el respectivo codigo
        $facultad = Facultad::findOrFail($id);
        $facultad->delete();
        return redirect()->route('listadoFacultades');
    }

    public function viewEditar($id) {
        $facultad = DB::table('facultad')->where('cod_facultad', $id)->first();
        return view('facultades.formEditar', ['facultad' => $facultad]);
    }

    public function editar(Request $request) {
        DB::table('facultad')
        ->where('cod_facultad', $request->input('codfacultad'))
        ->update(['nom_facultad' => $request->input('nomfacultad')]);

        return redirect()->route('listadoFacultades');
    }
}
