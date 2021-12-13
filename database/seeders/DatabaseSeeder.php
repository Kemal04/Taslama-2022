<?php

namespace Database\Seeders;

use App\Models\User;
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
        User::factory()->count(10)->create();

        $this->call(ThreemainSeeder::class);

        $this->call(GallerySeeder::class);

        $this->call(CountrySeeder::class);

        $this->call(ForeignSeeder::class);
    }
}
