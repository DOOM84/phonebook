<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PhonebooksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /*DB::table('phonebooks')->insert([
            'name' => str_random(10),
            'phone' => rand(100000,999999),
            'email' => str_random(10).'@gmail.com',

        ]);*/

        factory(App\Phonebook::class, 50)->create();
    }
}
