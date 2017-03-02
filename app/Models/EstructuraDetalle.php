<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class EstructuraDetalle extends Model
{
    protected $table = 'estructura_detalle';
    protected $fillable = ['idestructura', 'idcategoria'];
    public $timestamps = false;
    /**
	* Atributos Categoria
	*/
	public function getCategoriaAttribute()
	{
		$categoria = Catalogo::find($this->idcategoria);
		return $categoria->nombre;
	}
}
