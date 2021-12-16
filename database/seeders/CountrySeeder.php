<?php

namespace Database\Seeders;

use App\Models\Country;
use Illuminate\Database\Seeder;

class CountrySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $obj = new Country;
        $obj->name = 'ABŞ';
        $obj->save();

        $obj = new Country;
        $obj->name = 'Angliýa';
        $obj->save();
        
        $obj = new Country;
        $obj->name = 'Russiýa';
        $obj->save();
        
        $obj = new Country;
        $obj->name = 'Türkiýe';
        $obj->save();
        
        $obj = new Country;
        $obj->name = 'Hytaý';
        $obj->save();
    }
}
