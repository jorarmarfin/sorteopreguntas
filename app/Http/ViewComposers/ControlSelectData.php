<?php
namespace App\Http\ViewComposers;

use App\Models\BasePreguntas;
use App\Models\Catalogo;
use App\Models\EstructuraDetalle;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Request;
/**
 * Primero Creas la clase objeto+el modelo+formulario a tu gusto
 * dentro de la carpeta creada en http/ViewComposers
 * 2) php artisan make:provider ViewServiceProviders o en AppServiceProvider
 * 3) si creas un providder registralo en conf/app
 * 4)
 */
class ControlSelectData
{
	public function compose(View $view)
	{
		$roles = ['-1' => 'Seleccionar Rol']+Catalogo::Combo('ROLES')->pluck('nombre','id')->toarray();
		$base = BasePreguntas::select('idcategoria')->get();
		$categoria = Catalogo::Combo('CATEGORIA')
								->whereNotIn('id',$base)
								->orderBy('id','asc')
								->pluck('nombre','id')
								->toarray();
		$categorias = EstructuraDetalle::select('idcategoria')->get();
		$categoria_all = Catalogo::Combo('CATEGORIA')
								->whereNotIn('id',$categorias)
								->whereIn('id',$base)
								->orderBy('id','asc')
								->pluck('nombre','id')
								->toarray();



		$view->with(compact('roles','categoria','categoria_all'));
	}
}