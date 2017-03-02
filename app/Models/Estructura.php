<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Estructura extends Model
{
    protected $table = 'estructura';
    protected $fillable = ['cantidad'];
    /**
     * Relacion de one to many
     * Obtener la dependencia que tiene esta persona
     */
    public function detalles()
    {
        return $this->hasmany(EstructuraDetalle::class, 'idestructura', 'id');
    }
}
