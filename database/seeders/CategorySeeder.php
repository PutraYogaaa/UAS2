<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        \App\Models\Category::insert([
            ['name' => 'Urea (mengandung unsur Nitrogen)'],
            ['name' => 'SP-36 (mengandung unsur Phosfor)'],
            ['name' => 'NPK (mengandung Nitrogen, Phosfor dan Kalium)'],
        ]);
    }
}