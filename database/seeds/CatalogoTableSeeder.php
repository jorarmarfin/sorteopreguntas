<?php

use Illuminate\Database\Seeder;
use App\Models\Catalogo;

class CatalogoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Catalogo::create(['idtable' => 0,'iditem' => 0, 'codigo' => 'MAE','nombre'=>'MAESTRO','descripcion'=>'MAESTRO DE TABLAS','valor'=> null,'activo'=>true]);
        Catalogo::create(['idtable' => 0,'iditem' => 1, 'codigo' => 'ROLES','nombre' => 'ROLES','descripcion'=>'Rol de lo su suarios al sistema','valor'=> null,'activo'=>true]);
        Catalogo::create(['idtable' => 0,'iditem' => 2, 'codigo' => 'CATEGORIA','nombre' => 'CATEGORIA','descripcion'=>'CATEGORIA DE LA PREGUNTA','valor'=> null,'activo'=>true]);
        /**
         * sub tablas
         */
        Catalogo::create(['idtable' => 1,'iditem' => 1, 'codigo' => 'root','nombre' => 'root','descripcion'=>'Administrador del sistema','valor'=> null,'activo'=>true]);
        Catalogo::create(['idtable' => 1,'iditem' => 2, 'codigo' => 'adm','nombre' => 'Administrador','descripcion'=>'Administrador la Institucion educativa ','valor'=> null,'activo'=>true]);
        /**
         * Categoria de prguntas
         */
        Catalogo::create(['idtable' => 2,'iditem' => 1, 'codigo' => 'RV','nombre' => 'Razonamiento Verbal','descripcion'=>'Razonamiento verbal','valor'=> null,'activo'=>true]);
        Catalogo::create(['idtable' => 2,'iditem' => 2, 'codigo' => 'RM','nombre' => 'Razonamiento Matemático','descripcion'=>'Razonamiento Matemático','valor'=> null,'activo'=>true]);
        Catalogo::create(['idtable' => 2,'iditem' => 3, 'codigo' => 'PE','nombre' => 'Procedimiento Electoral','descripcion'=>'Procedimiento Electoral','valor'=> null,'activo'=>true]);
        Catalogo::create(['idtable' => 2,'iditem' => 4, 'codigo' => 'PO','nombre' => 'Planes Operativos','descripcion'=>'Planes operativos','valor'=> null,'activo'=>true]);
        Catalogo::create(['idtable' => 2,'iditem' => 5, 'codigo' => 'CP','nombre' => 'Contratación Personal','descripcion'=>'Contratación Personal','valor'=> null,'activo'=>true]);
        Catalogo::create(['idtable' => 2,'iditem' => 6, 'codigo' => 'GP','nombre' => 'Gestión Pública','descripcion'=>'Gestión Pública','valor'=> null,'activo'=>true]);
        Catalogo::create(['idtable' => 2,'iditem' => 7, 'codigo' => 'GPO','nombre' => 'Gestión de Procesos','descripcion'=>'Gestión de Procesos','valor'=> null,'activo'=>true]);
        Catalogo::create(['idtable' => 2,'iditem' => 8, 'codigo' => 'CE','nombre' => 'Contratación del Estado','descripcion'=>'Contratación del Estado','valor'=> null,'activo'=>true]);
        Catalogo::create(['idtable' => 2,'iditem' => 9, 'codigo' => 'LOE','nombre' => 'Ley Orgánica de Elecciones','descripcion'=>'Ley Orgánica de Elecciones','valor'=> null,'activo'=>true]);


    }
}
