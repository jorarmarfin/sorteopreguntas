<?php

namespace App\Http\Controllers;

use App\Models\Estructura;
use App\Models\EstructuraDetalle;
use Illuminate\Http\Request;
use Styde\Html\Facades\Alert;

class EstructuraSorteoController extends Controller
{
	/**
	 * index
	 * @return [type] [description]
	 */
    public function estructura()
    {
    	$Lista = Estructura::with('detalles')->get();
    	return view('sorteo.estructura',compact('Lista'));
    }
    /**
     * store
     */
    public function store(Request $request)
    {
    	$data  = $request->all();
    	$estructura = Estructura::create($data);
    	$detalle = [];
    	if ($estructura->id > 0) {
    		foreach ($data['categoria'] as $key => $value) {
    			$detalle[$key]['idestructura'] = $estructura->id;
    			$detalle[$key]['idcategoria'] = $value;
    		}
    		if(EstructuraDetalle::insert($detalle)){
    			Alert::success('Se registró con exito');
    			return redirect()->route('sorteo.estructura.index');
    		}
    	}
    }
    public function delete($id)
    {
    	EstructuraDetalle::where('idestructura',$id)->delete();
    	Estructura::destroy($id);
    	Alert::success('Se eliminó con exito');
    	return redirect()->route('sorteo.estructura.index');
    }
}
