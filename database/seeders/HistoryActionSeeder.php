<?php

namespace Database\Seeders;

use App\Models\HistoryAction;
use Illuminate\Database\Seeder;

class HistoryActionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $obj = new HistoryAction;
        $obj->name = 'Mekdep';
        $obj->address = 'Anew, Azatlyk kocesi, 27-nji mekdep';
        $obj->misson = 'Agaclary suwarmak';
        $obj->misson_amount = '100 litr';
        $obj->time = 1;
        $obj->time_start = '09:00';
        $obj->save();

        $obj = new HistoryAction;
        $obj->name = 'Saglyk yol';
        $obj->address = 'Asgabat saheri, saglyk yoly';
        $obj->misson = 'Agaclary ekmek';
        $obj->misson_amount = '10000 agac';
        $obj->time = 2;
        $obj->time_start = '10:00';
        $obj->save();
    }
}
