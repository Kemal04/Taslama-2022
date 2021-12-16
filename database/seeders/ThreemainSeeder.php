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
        $obj->name = 'Agaç ekmek';
        $obj->title = 'Agaç ösdürip ýetişdirmek hakykatdanam agyr iş. Biraz sabyr we birneme çeperçilik gerek. Bonsaýdaky ýaly agajy şekillendirmek näçe kyn bolsa, agajy emele getirmek üçin sabyrlylyk, çaltlyk we bilim gerek.';
        $obj->img = ('img/threemain/tree.jpg');
        $obj->save();

        $obj = new Threemain;
        $obj->name = 'Suw arassaçylygy';
        $obj->title = 'Suwdaky zyýanly mikroorganizmleri arassalamagyň ýene bir usuly, suwy gaýnatmakdyr. Suwdaky bakteriýalary we mikroorganizmleri 2 ýa-da 3 minut gaýnadyp öldürmek bolýar.';
        $obj->img = ('img/threemain/water.jpg');
        $obj->save();

        $obj = new Threemain;
        $obj->name = 'Agaclary cogaltmak :)';
        $obj->title = 'NASA released a list of 219 new planet candidates discovered by the Kepler space telescope, 10 of which are similar to Earth’s size and may be habitable by other life forms.';
        $obj->img = ('img/threemain/jungle.jpg');
        $obj->save();
    }
}
