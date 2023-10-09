<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ReviewSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        // Voeg dummy recensie toe aan de 'reviews' tabel
        DB::table('recensies')->insert([
            [
                'Naam' => 'Restaurant XYZ',
                'Recensie' => 'Dit restaurant was geweldig!',
                'Beoordeling' => 5,
                'Id' => null,

            ],
        ]);
    }
}
