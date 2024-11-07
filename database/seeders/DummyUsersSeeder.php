<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DummyUsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $userData = [
            [
                'name'=>'User Survey',
                'email'=>'userrsurvey@gmail.com',
                'role'=>'user',
                'password'=>bcrypt('1234567')
            ],
            [
                'name'=>'Admin',
                'email'=>'adminsurvey@gmail.com',
                'role'=>'admin',
                'password'=>bcrypt('admin123')
            ],
        ];

        foreach ($userData as $key => $val) {
            User::create($val);
        }
    }
}
