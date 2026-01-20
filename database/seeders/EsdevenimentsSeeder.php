<?php

namespace Database\Seeders;

use App\Models\Centro;
use App\Models\Esdeveniment;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EsdevenimentsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Esdeveniment::truncate();

        $esdeveniments = [
            [
                "nom" => "Esdeveniment-01",
                "descripcio" => "Lorem ipsum dolor sit amet, esdeveniment-01.",
                "data" => "2026-01-01",
            ],
            [
                "nom" => "Esdeveniment-02",
                "descripcio" => "Lorem ipsum dolor sit amet, esdeveniment-02.",
                "data" => "2026-01-02",
            ],
            [
                "nom" => "Esdeveniment-03",
                "descripcio" => "Lorem ipsum dolor sit amet, esdeveniment-03.",
                "data" => "2026-01-03",
            ],
            [
                "nom" => "Esdeveniment-04",
                "descripcio" => "Lorem ipsum dolor sit amet, esdeveniment-04.",
                "data" => "2026-01-04",
            ],
            [
                "nom" => "Esdeveniment-05",
                "descripcio" => "Lorem ipsum dolor sit amet, esdeveniment-05.",
                "data" => "2026-01-05",
            ],
        ];

        foreach ($esdeveniments as $esdeveniment) {
            Esdeveniment::create($esdeveniment);
        }
    }
}
