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
        // User::truncate();

        $users = [
            [
                "name" => "Juan Perez García",
                "email" => "admin@admin.com",
                "password" => "admin",
            ],
        ];

        foreach ($users as $user) {
            User::create($user);
        }
    }
}
