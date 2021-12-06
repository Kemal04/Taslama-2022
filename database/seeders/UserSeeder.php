<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $obj = new User;
        $obj->name = 'Administrasiya';
        $obj->email = 'admin@gmail.com';
        $obj->password = Hash::make('12345678');
        $obj->is_admin = 1;
        $obj->save();
    }
}
