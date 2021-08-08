<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' =>'Wilfredo Fermin',
            'phone' =>'8095037233',
            'email' =>'wilfredofermin@hotmail.com',
            'profile' =>'Admin',
            'password' =>bcrypt('Fermin2222')

        ]);

        User::create([
            'name' =>'Elineth Fermin R',
            'phone' =>'8095037238',
            'email' =>'efermin@hotmail.com',
            'profile' =>'Employee',
            'password' =>bcrypt('Fermin2222')

        ]);


    }
}
