<?php

namespace Database\Seeders;

use App\Models\Welayat;
use Illuminate\Database\Seeder;

class WelayatSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $obj = new Welayat;
        $obj->name = 'Aşgabat';
        $obj->save();

        $obj = new Welayat;
        $obj->name = 'Ahal';
        $obj->save();

        $obj = new Welayat;
        $obj->name = 'Balkan';
        $obj->save();

        $obj = new Welayat;
        $obj->name = 'Daşaguz';
        $obj->save();

        $obj = new Welayat;
        $obj->name = 'Mary';
        $obj->save();

        $obj = new Welayat;
        $obj->name = 'Lebap';
        $obj->save();
    }
}
