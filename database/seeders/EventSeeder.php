<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EventSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('events')->insert([
            'id' => '1',
            'country_id' => '1',
            'description' => 'Всемирный Фестиваль Молодежи',
            'date' => '2024-03-01',
        ]);
        DB::table('events')->insert([
            'country_id' => '1',
            'description' => 'Дух Oгня - Международный фестиваль кинодебютов',
            'date' => '2024-03-23'
        ]);
        DB::table('events')->insert([
            'country_id' => '2',
            'description' => 'Продажа картошки',
            'date' => '2024-02-29'
        ]);
        DB::table('events')->insert([
            'country_id' => '1',
            'description' => 'Международный женский день',
            'date' => '2024-03-08'
        ]);
        DB::table('events')->insert([
            'country_id' => '2',
            'description' => 'День ВДВ',
            'date' => '2024-08-02'
        ]);
        DB::table('events')->insert([
            'country_id' => '1',
            'description' => 'Праздник',
            'date' => '2024-03-27'
        ]);
        DB::table('events')->insert([
            'country_id' => '13',
            'description' => 'Фестиваль цветов',
            'date' => '2024-04-08'
        ]);

    }
}
