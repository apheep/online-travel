<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class loginSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $userData = [
            [
                'name' => 'Leo',
                'email' => 'leo@user.com',
                'password' => bcrypt('leo123'),
                'role' => 'user',
            ],
            [
                'name' => 'Rey',
                'email' => 'rey@ticketing.com',
                'password' => bcrypt('rey123'),
                'role' => 'ticketing',
            ],
            [
                'name' => 'Xio',
                'email' => 'xio@checking.com',
                'password' => bcrypt('xio123'),
                'role' => 'checking',
            ]
        ];

        foreach ($userData as $key => $val) {
            User::create($val);
        }
    }
}
