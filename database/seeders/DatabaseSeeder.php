<?php

namespace Database\Seeders;

use App\Models\cliente;
//use App\Models\automovil;
//use App\Models\marca;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $cliente = new cliente();

        $cliente->id = 1;
        $cliente->nombre = "Juan";
        $cliente->primer_apellido = "Ramirez";
        $cliente->segundo_apellido = "Gomez";
        $cliente->numero_celular = "1234567";
        $cliente->correo_electronico = "juan@gmail.com";
        $cliente->sexo = "Hombre";
        $cliente->fecha_nacimiento = "2001-12-23";

        $cliente->save();



        $cliente2 = new cliente();

        $cliente2->id = 2;
        $cliente2->nombre = "Juan";
        $cliente2->primer_apellido = "Ramirez";
        $cliente2->segundo_apellido = "Gomez";
        $cliente2->numero_celular = "1234567";
        $cliente2->correo_electronico = "juan@gmail.com";
        $cliente2->sexo = "Hombre";
        $cliente2->fecha_nacimiento = "2001-12-23";

        $cliente2->save();



        $cliente3 = new cliente();

        $cliente3->id = 3;
        $cliente3->nombre = "Juan";
        $cliente3->primer_apellido = "Ramirez";
        $cliente3->segundo_apellido = "Gomez";
        $cliente3->numero_celular = "1234567";
        $cliente3->correo_electronico = "juan@gmail.com";
        $cliente3->sexo = "Hombre";
        $cliente3->fecha_nacimiento = "2001-12-23";

        $cliente3->save();

// +++++Seeder tabla automovil (quitar comentario de "USE")+++++


        // $automovil = new automovil();

        // $automovil->id = 1;
        // $automovil->cliente_id = 1;
        // $automovil->marca_id = 1;
        // $automovil->placas = "1234";
        // $automovil->numero_cilindros = 4;
        // $automovil->numero_rin = 4;
        // $automovil->kilometraje = 100;
        // $automovil->ano = 2001;

        // $automovil->save();



        // $automovil2 = new automovil();

        // $automovil2->id = 2;
        // $automovil2->cliente_id = 2;
        // $automovil2->marca_id = 2;
        // $automovil2->placas = "1234";
        // $automovil2->numero_cilindros = 4;
        // $automovil2->numero_rin = 4;
        // $automovil2->kilometraje = 100;
        // $automovil2->ano = 2001;

        // $automovil2->save();



        // $automovil3 = new automovil();

        // $automovil3->id = 3;
        // $automovil3->cliente_id = 3;
        // $automovil3->marca_id = 3;
        // $automovil3->placas = "1234";
        // $automovil3->numero_cilindros = 4;
        // $automovil3->numero_rin = 4;
        // $automovil3->kilometraje = 100;
        // $automovil3->ano = 2001;

        // $automovil3->save();


// +++++Seeder tabla marca (quitar comentario de "USE")+++++


        // $marca = new marca();

        // $marca->id = 1;
        // $marca->nombre = "ferrari";

        // $marca->save();

    

        // $marca2 = new marca();

        // $marca2->id = 2;
        // $marca2->nombre = "ferrari";

        // $marca2->save();



        // $marca3 = new marca();

        // $marca3->id = 3;
        // $marca3->nombre = "ferrari";

        // $marca3->save();
    }
}
