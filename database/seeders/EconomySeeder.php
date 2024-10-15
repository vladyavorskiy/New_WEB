<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EconomySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('economies')->insert([
            'country_id' => '2',
            'year' => '2019',
            'GDP' => '189',
            'GDP_person' => '21348'
        ]);
        DB::table('economies')->insert([
            'country_id' => '1',
            'year' => '2020',
            'GDP' => '4119',
            'GDP_person' => '28181'
        ]);
        DB::table('economies')->insert([
            'country_id' => '1',
            'year' => '2019',
            'GDP' => '4181',
            'GDP_person' => '28495'
        ]);
        DB::table('economies')->insert([
            'country_id' => '10',
            'year' => '2012',
            'GDP' => '6',
            'GDP_person' => '165304'
        ]);
    }
}
