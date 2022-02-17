<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Welayat;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UserSeeder::class);

        $this->call(ThreemainSeeder::class);

        $this->call(GallerySeeder::class);

        $this->call(CountrySeeder::class);

        $this->call(ForeignSeeder::class);

        $this->call(ContactSeeder::class);

        $this->call(WelayatSeeder::class);

        $this->call(CitySeeder::class);

        $this->call(HistoryActionSeeder::class);
    }
}
