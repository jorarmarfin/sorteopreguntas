<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pregunta extends Model
{
    protected $table = 'pregunta';
    protected $fillable = ['nombre', 'descripcion', 'sorteado','orden','idcategoria'];
    /**
	* Atributos Categoria
	*/
	public function getCategoriaAttribute()
	{
		$categoria = Catalogo::find($this->idcategoria);
		return $categoria->nombre;
	}
	/**
	* Atributos Sorteado
	*/
	public function getEsSorteadoAttribute()
	{
		if($this->sorteado)return '<span class="label label-sm label-success"> SI </span>';
		else return '<span class="label label-sm label-danger"> NO </span>';
	}
}
