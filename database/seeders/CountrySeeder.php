<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CountrySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('countries')->insert([
            'name' => 'Россия',
            'capital' => 'Москва',
            'population' => '146447424',
            'area' => '17125191'
        ]);

        DB::table('countries')->insert([
            'name' => 'Беларусь',
            'capital' => 'Минск',
            'population' => '9200617',
            'area' => '207595'
        ]);
    }
}


//Всемирный Фестиваль Молодежи 2024-03-01
//Дух Oгня - Международный фестиваль кинодебютов 2024-03-23
//Продажа картошки 2024-02-29


