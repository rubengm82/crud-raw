<?php

namespace Database\Seeders;

use App\Models\Centro;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CentrosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Centro::truncate();

        $centros = [
            [
                "name" => "Centro-01",
                "address" => "Address 01",
            ],
            [
                "name" => "Centro-02",
                "address" => "Address 02",
            ],
            [
                "name" => "Centro-03",
                "address" => "Address 03",
            ],
            [
                "name" => "Centro-04",
                "address" => "Address 04",
            ],
            [
                "name" => "Centro-05",
                "address" => "Address 05",
            ],
        ];

        foreach ($centros as $centro) {
            Centro::create($centro);
        }
    }
}
