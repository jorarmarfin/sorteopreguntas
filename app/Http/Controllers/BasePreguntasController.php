<?php

namespace App\Http\Controllers;

use App\Models\BasePreguntas;
use App\Models\Pregunta;
use Illuminate\Http\Request;
use Styde\Html\Facades\Alert;

class BasePreguntasController extends Controller
{
    public function base()
    {
    	$Lista = BasePreguntas::all();
    	return view('sorteo.base',compact('Lista'));
    }

    public function store(Request $request)
    {
    	BasePreguntas::create($request->all());
    	Alert::success('Se Registró con exito');
    	return redirect()->route('sorteo.base.index');
    }

    public function delete($id)
    {
    	BasePreguntas::destroy($id);
    	Alert::success('Se eliminó con exito');
    	return redirect()->route('sorteo.base.index');
    }

    public function genera()
    {
        $base = BasePreguntas::all();
        $base = $base->each(function ($item, $key) {
            for ($i=1; $i <= $item->cantidad; $i++) {
                Pregunta::create([
                    'nombre'=>"PREGUNTA $i",
                    'idcategoria'=>$item->idcategoria,
                    ]);
            }
        });
        Alert::success('Se genero las preguntas');
        return redirect()->route('sorteo.base.index');
    }
}
