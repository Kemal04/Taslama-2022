<?php

namespace Database\Seeders;

use App\Models\Contact;
use Illuminate\Database\Seeder;

class ContactSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $obj = new Contact;
        $obj->name = 'Kemal';
        $obj->email = 'kemalhojayew04@gmail.com';
        $obj->subject = 'Salam bu menin ilkinji yazgym';
        $obj->comment = 'Salam bu menin ilkinji yazgym.Salam bu menin ilkinji yazgym.Salam bu menin ilkinji yazgym.Salam bu menin ilkinji yazgym';
        $obj->save();
    }
}
