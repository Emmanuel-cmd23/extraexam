<?php

namespace Database\Seeders;

use App\Models\marca;

use Illuminate\Database\Seeder;


class MarcaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $marca = new marca();

        $marca->id = 1;
        $marca->nombre = "ferrari";

        $marca->save();

    

        $marca2 = new marca();

        $marca2->id = 2;
        $marca2->nombre = "ferrari";

        $marca2->save();



        $marca3 = new marca();

        $marca3->id = 3;
        $marca3->nombre = "ferrari";

        $marca3->save();



        $marca4 = new marca();

        $marca4->id = 4;
        $marca4->nombre = "ferrari";

        $marca4->save();



        $marca5 = new marca();

        $marca5->id = 5;
        $marca5->nombre = "ferrari";

        $marca5->save();



        $marca6 = new marca();

        $marca6->id = 6;
        $marca6->nombre = "ferrari";

        $marca6->save();



        $marca7 = new marca();

        $marca7->id = 7;
        $marca7->nombre = "ferrari";

        $marca7->save();



        $marca8 = new marca();

        $marca8->id = 8;
        $marca8->nombre = "ferrari";

        $marca8->save();



        $marca9 = new marca();

        $marca9->id = 9;
        $marca9->nombre = "ferrari";

        $marca9->save();



        $marca10 = new marca();

        $marca10->id = 10;
        $marca10->nombre = "ferrari";

        $marca10->save();

    }
}
