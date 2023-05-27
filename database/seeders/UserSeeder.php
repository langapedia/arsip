<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [[
            'id'                    => 1,
            'name'                  => 'Admin',
            'email'                 => 'admin@gmail.com',
            'email_verified_at'     => NULL,
            'password'              => bcrypt('1234'),
            'remember_token'        => null,
            'created_at'            => '2021-05-17 04:21:52',
            'updated_at'            => '2021-05-17 04:21:52',
        ]];

        User::insert($users);
    }
}
