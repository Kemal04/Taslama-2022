<?php

namespace Database\Seeders;

use App\Models\Foreign;
use Illuminate\Database\Seeder;

class ForeignSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $obj = new Foreign;
        $obj->country_id = '1';
        $obj->img = ('img/about/foreign/usa/usa-1.jpg');
        $obj->name = 'How Did van Gogh’s Turbulent Mind Depict One of the Most';
        $obj->title = 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Laborum dolor tenetur perferendis modi dignissimos adipisci sunt nulla, enim eaque tempore consectetur? Voluptatibus saepe repellat nam, quidem dolorum tempora eveniet odit.';
        $obj->save();

        $obj = new Foreign;
        $obj->country_id = '1';
        $obj->img = ('img/about/foreign/usa/usa-3.jpg');
        $obj->name = 'ucinji';
        $obj->title = 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Laborum dolor tenetur perferendis modi dignissimos adipisci sunt nulla, enim eaque tempore consectetur? Voluptatibus saepe repellat nam, quidem dolorum tempora eveniet odit.';
        $obj->save();

        $obj = new Foreign;
        $obj->country_id = '2';
        $obj->img = ('img/about/foreign/england/england-1.jpg');
        $obj->name = 'England';
        $obj->title = 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Laborum dolor tenetur perferendis modi dignissimos adipisci sunt nulla, enim eaque tempore consectetur? Voluptatibus saepe repellat nam, quidem dolorum tempora eveniet odit.';
        $obj->save();

        $obj = new Foreign;
        $obj->country_id = '3';
        $obj->img = ('img/about/foreign/cards/england-1.jpg');
        $obj->name = 'England';
        $obj->title = 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Laborum dolor tenetur perferendis modi dignissimos adipisci sunt nulla, enim eaque tempore consectetur? Voluptatibus saepe repellat nam, quidem dolorum tempora eveniet odit.';
        $obj->save();

        $obj = new Foreign;
        $obj->country_id = '4';
        $obj->img = ('img/about/foreign/cards/england-1.jpg');
        $obj->name = 'England';
        $obj->title = 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Laborum dolor tenetur perferendis modi dignissimos adipisci sunt nulla, enim eaque tempore consectetur? Voluptatibus saepe repellat nam, quidem dolorum tempora eveniet odit.';
        $obj->save();

        $obj = new Foreign;
        $obj->country_id = '5';
        $obj->img = ('img/about/foreign/cards/england-1.jpg');
        $obj->name = 'England';
        $obj->title = 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Laborum dolor tenetur perferendis modi dignissimos adipisci sunt nulla, enim eaque tempore consectetur? Voluptatibus saepe repellat nam, quidem dolorum tempora eveniet odit.';
        $obj->save();
    }
}
 