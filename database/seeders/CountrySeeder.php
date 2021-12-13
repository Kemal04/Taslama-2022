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
        $obj->img = ('img/foreign/main/usa.jpg');
        $obj->name = 'ABŞ';
        $obj->save();

        $obj = new Country;
        $obj->img = ('img/foreign/main/england.jpg');
        $obj->name = 'Angliýa';
        $obj->save();
        
        $obj = new Country;
        $obj->img = ('img/foreign/main/russia.jpg');
        $obj->name = 'Russiýa';
        $obj->save();
        
        $obj = new Country;
        $obj->img = ('img/foreign/main/turkiye.jpg');
        $obj->name = 'Türkiýe';
        $obj->save();
        
        $obj = new Country;
        $obj->img = ('img/foreign/main/china.jpg');
        $obj->name = 'Hytaý';
        $obj->save();
    }
}
