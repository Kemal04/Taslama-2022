<?php

namespace Database\Seeders;

use App\Models\Gallery;
use Illuminate\Database\Seeder;

class GallerySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $obj = new Gallery;
        $obj->img = ('img/gallery/1.jpg');
        $obj->save();

        $obj = new Gallery;
        $obj->img = ('img/gallery/2.jpg');
        $obj->save();

        $obj = new Gallery;
        $obj->img = ('img/gallery/3.jpg');
        $obj->save();

        $obj = new Gallery;
        $obj->img = ('img/gallery/4.jpg');
        $obj->save();

        $obj = new Gallery;
        $obj->img = ('img/gallery/5.jpg');
        $obj->save();
    }
}
