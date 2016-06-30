<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
{
    public function run()
    {
        User::create([
            'firstname' => 'Ravuth',
            'lastname' => 'Yo',
            'email' => 'ravuthz@gmail.com',
            'phone' => '0964577770',
            'username' => 'ravuthz',
            'password' => '123123',
            'address' => 'Phnom Penh, Cambodia',
            'id_card' => '010123123',
            'role_id' => 1
        ]);
    }
}
