<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UserData extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = [
            [
                'name' => 'Admin',
                'password' => bcrypt('123456'),
                'email' => 'admin@kuechris.com'
            ],

            [
                'name' => 'Owner',
                'password' => bcrypt('123456'),
                'email' => 'owner@kuechris.com'
            ],
        ];

        foreach($user as $key => $value){
            User::create($value);
        }
    }
}
