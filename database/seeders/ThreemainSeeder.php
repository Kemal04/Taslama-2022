<?php

namespace Database\Seeders;

use App\Models\Threemain;
use Illuminate\Database\Seeder;

class ThreemainSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $obj = new Threemain;
        $obj->name = 'Agac ekmek';
        $obj->title = 'NASA released a list of 219 new planet candidates discovered by the Kepler space telescope, 10 of which are similar to Earth’s size and may be habitable by other life forms.';
        $obj->img = ('img/cards/tree.jpg');
        $obj->save();

        $obj = new Threemain;
        $obj->name = 'Suw arassacylygy';
        $obj->title = 'NASA released a list of 219 new planet candidates discovered by the Kepler space telescope, 10 of which are similar to Earth’s size and may be habitable by other life forms.';
        $obj->img = ('img/cards/water.jpg');
        $obj->save();

        $obj = new Threemain;
        $obj->name = 'Agaclary cogaltmak :)';
        $obj->title = 'NASA released a list of 219 new planet candidates discovered by the Kepler space telescope, 10 of which are similar to Earth’s size and may be habitable by other life forms.';
        $obj->img = ('img/cards/jungle.jpg');
        $obj->save();
    }
}
