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
        $userData = [
            [
                'name' => 'Mbak Riska',
                'email' => 'riska@gmail.com',
                'nomer_telp' => '081231816058',
                'foto' => 'keren.jpg',
                'role' => 'Admin',
                'password' => bcrypt('123456'),
            ],
            [
                'name' => 'Mas Rudi',
                'email' => 'rudi@gmail.com',
                'nomer_telp' => '083857726588',
                'foto' => 'kunyuk.jpg',
                'role' => 'Marketing',
                'password' => bcrypt('123456'),
            ],
        ];

        foreach ($userData as $key => $val) {
            User::create($val);
        }
    }
}
