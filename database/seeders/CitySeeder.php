<?php

namespace Database\Seeders;

use App\Models\City;
use Illuminate\Database\Seeder;

class CitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $obj = new City;
        $obj->welayat_id = '1';
        $obj->img = ('img/about/ourcountry/card.jpg');
        $obj->name = 'How Did van Gogh’s Turbulent Mind Depict One of the Most';
        $obj->title = 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Laborum dolor tenetur perferendis modi dignissimos adipisci sunt nulla, enim eaque tempore consectetur? Voluptatibus saepe repellat nam, quidem dolorum tempora eveniet odit.';
        $obj->save();

        $obj = new City;
        $obj->welayat_id = '1';
        $obj->img = ('img/about/ourcountry/card.jpg');
        $obj->name = 'Ashgabat';
        $obj->title = 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Laborum dolor tenetur perferendis modi dignissimos adipisci sunt nulla, enim eaque tempore consectetur? Voluptatibus saepe repellat nam, quidem dolorum tempora eveniet odit.';
        $obj->save();

        $obj = new City;
        $obj->welayat_id = '2';
        $obj->img = ('img/about/ourcountry/card.jpg');
        $obj->name = 'Ahal';
        $obj->title = 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Laborum dolor tenetur perferendis modi dignissimos adipisci sunt nulla, enim eaque tempore consectetur? Voluptatibus saepe repellat nam, quidem dolorum tempora eveniet odit.';
        $obj->save();

        $obj = new City;
        $obj->welayat_id = '3';
        $obj->img = ('img/about/ourcountry/card.jpg');
        $obj->name = 'Balkan';
        $obj->title = 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Laborum dolor tenetur perferendis modi dignissimos adipisci sunt nulla, enim eaque tempore consectetur? Voluptatibus saepe repellat nam, quidem dolorum tempora eveniet odit.';
        $obj->save();

        $obj = new City;
        $obj->welayat_id = '4';
        $obj->img = ('img/about/ourcountry/card.jpg');
        $obj->name = 'Dashoguz';
        $obj->title = 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Laborum dolor tenetur perferendis modi dignissimos adipisci sunt nulla, enim eaque tempore consectetur? Voluptatibus saepe repellat nam, quidem dolorum tempora eveniet odit.';
        $obj->save();

        $obj = new City;
        $obj->welayat_id = '5';
        $obj->img = ('img/about/ourcountry/card.jpg');
        $obj->name = 'Mary';
        $obj->title = 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Laborum dolor tenetur perferendis modi dignissimos adipisci sunt nulla, enim eaque tempore consectetur? Voluptatibus saepe repellat nam, quidem dolorum tempora eveniet odit.';
        $obj->save();

        $obj = new City;
        $obj->welayat_id = '6';
        $obj->img = ('img/about/ourcountry/card.jpg');
        $obj->name = 'Lebap';
        $obj->title = 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Laborum dolor tenetur perferendis modi dignissimos adipisci sunt nulla, enim eaque tempore consectetur? Voluptatibus saepe repellat nam, quidem dolorum tempora eveniet odit.';
        $obj->save();
    }
}
