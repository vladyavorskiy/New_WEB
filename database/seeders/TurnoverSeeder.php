<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TurnoverSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('turnovers')->insert([
            'country1_id' => '1',
            'country2_id' => '2',
            'year' => '2022',
            'export_from1_to2' => '21',
            'export_from2_to1' => '22'
        ]);
        DB::table('turnovers')->insert([
            'country1_id' => '1',
            'country2_id' => '2',
            'year' => '2016',
            'export_from1_to2' => '16',
            'export_from2_to1' => '13'
        ]);
        DB::table('turnovers')->insert([
            'country1_id' => '4',
            'country2_id' => '8',
            'year' => '2023',
            'export_from1_to2' => '100',
            'export_from2_to1' => '100'
        ]);
        DB::table('turnovers')->insert([
            'country1_id' => '3',
            'country2_id' => '15',
            'year' => '2022',
            'export_from1_to2' => '153',
            'export_from2_to1' => '536'
        ]);
    }
}
