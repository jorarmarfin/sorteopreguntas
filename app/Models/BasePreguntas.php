<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BasePreguntas extends Model
{
	protected $table = 'base_pregunta';
	protected $fillable = ['cantidad', 'idcategoria', 'orden','sorteado'];

	/**
	* Atributos Categoria
	*/
	public function getCategoriaAttribute()
	{
		$categoria = Catalogo::find($this->idcategoria);
		return $categoria->nombre;
	}

}
