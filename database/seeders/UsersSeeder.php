<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::truncate();

        $users = [
            [
                "name" => "Usuario01 Apellido01 Apellido02",
                "email" => "usuario01@examen.com",
                "password" => "admin",
            ],
            [
                "name" => "Usuario02 Apellido01 Apellido02",
                "email" => "usuario02@examen.com",
                "password" => "admin",
            ],
            [
                "name" => "Usuario03 Apellido01 Apellido02",
                "email" => "usuario03@examen.com",
                "password" => "admin",
            ],
        ];

        foreach ($users as $user) {
            User::create($user);
        }
    }
}
