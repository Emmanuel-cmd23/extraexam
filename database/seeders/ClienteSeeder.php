<?php

namespace Database\Seeders;

use App\Models\cliente;

use Illuminate\Database\Seeder;

class ClienteSeeder extends Seeder
{
    /**
     * Run the database seeds.
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



        $cliente4 = new cliente();

        $cliente4->id = 4;
        $cliente4->nombre = "Juan";
        $cliente4->primer_apellido = "Ramirez";
        $cliente4->segundo_apellido = "Gomez";
        $cliente4->numero_celular = "1234567";
        $cliente4->correo_electronico = "juan@gmail.com";
        $cliente4->sexo = "Hombre";
        $cliente4->fecha_nacimiento = "2001-12-23";

        $cliente4->save();



        $cliente5 = new cliente();

        $cliente5->id = 5;
        $cliente5->nombre = "Juan";
        $cliente5->primer_apellido = "Ramirez";
        $cliente5->segundo_apellido = "Gomez";
        $cliente5->numero_celular = "1234567";
        $cliente5->correo_electronico = "juan@gmail.com";
        $cliente5->sexo = "Hombre";
        $cliente5->fecha_nacimiento = "2001-12-23";

        $cliente5->save();



        $cliente6 = new cliente();

        $cliente6->id = 6;
        $cliente6->nombre = "Juan";
        $cliente6->primer_apellido = "Ramirez";
        $cliente6->segundo_apellido = "Gomez";
        $cliente6->numero_celular = "1234567";
        $cliente6->correo_electronico = "juan@gmail.com";
        $cliente6->sexo = "Hombre";
        $cliente6->fecha_nacimiento = "2001-12-23";

        $cliente6->save();



        $cliente7 = new cliente();
        
        $cliente7->id = 7;
        $cliente7->nombre = "Juan";
        $cliente7->primer_apellido = "Ramirez";
        $cliente7->segundo_apellido = "Gomez";
        $cliente7->numero_celular = "1234567";
        $cliente7->correo_electronico = "juan@gmail.com";
        $cliente7->sexo = "Hombre";
        $cliente7->fecha_nacimiento = "2001-12-23";

        $cliente7->save();



        $cliente8 = new cliente();

        $cliente8->id = 8;
        $cliente8->nombre = "Juan";
        $cliente8->primer_apellido = "Ramirez";
        $cliente8->segundo_apellido = "Gomez";
        $cliente8->numero_celular = "1234567";
        $cliente8->correo_electronico = "juan@gmail.com";
        $cliente8->sexo = "Hombre";
        $cliente8->fecha_nacimiento = "2001-12-23";

        $cliente8->save();



        $cliente9 = new cliente();

        $cliente9->id = 9;
        $cliente9->nombre = "Juan";
        $cliente9->primer_apellido = "Ramirez";
        $cliente9->segundo_apellido = "Gomez";
        $cliente9->numero_celular = "1234567";
        $cliente9->correo_electronico = "juan@gmail.com";
        $cliente9->sexo = "Hombre";
        $cliente9->fecha_nacimiento = "2001-12-23";

        $cliente9->save();



        $cliente10 = new cliente();

        $cliente10->id = 10;
        $cliente10->nombre = "Juan";
        $cliente10->primer_apellido = "Ramirez";
        $cliente10->segundo_apellido = "Gomez";
        $cliente10->numero_celular = "1234567";
        $cliente10->correo_electronico = "juan@gmail.com";
        $cliente10->sexo = "Hombre";
        $cliente10->fecha_nacimiento = "2001-12-23";

        $cliente10->save();
    }
}
