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
        DB::table('countries')->insert([
            'name' => 'США',
             'capital' => 'Вашингтон',
             'population' => '301693000',
             'area' => '9826675'
        ]);
        DB::table('countries')->insert([
            'name' => 'Мексика',
             'capital' => 'Мехико',
             'population' => '133649565',
             'area' => '1972550'
        ]);
        DB::table('countries')->insert([
            'name' => 'Польша',
             'capital' => 'Варшава',
             'population' => '37967209',
             'area' => '312685'
        ]);
        DB::table('countries')->insert([
            'name' => 'Румыния',
             'capital' => 'Бухарест',
             'population' => '19053815',
             'area' => '237500'
        ]);
        DB::table('countries')->insert([
            'name' => 'Португалия',
             'capital' => 'Лиссабон',
             'population' => '10347892',
             'area' => '92082'
        ]);
        DB::table('countries')->insert([
            'name' => 'Сербия',
             'capital' => 'Белград',
             'population' => '9846582',
             'area' => '88361'
        ]);
        DB::table('countries')->insert([
            'name' => 'КНДР',
             'capital' => 'Пхеньян',
             'population' => '25281000',
             'area' => '120540'
        ]);
        DB::table('countries')->insert([
            'name' => 'Лихтенштейн',
             'capital' => 'Вадуц',
             'population' => '37662',
             'area' => '160'
        ]);
        DB::table('countries')->insert([
            'name' => 'Турция',
             'capital' => 'Анкара',
             'population' => '78741053',
             'area' => '780580'
        ]);
        DB::table('countries')->insert([
            'name' => 'Швейцария',
             'capital' => 'Берн',
             'population' => '8325194',
             'area' => '41290'
        ]);
        DB::table('countries')->insert([
            'name' => 'Япония',
             'capital' => 'Токио',
             'population' => '127103388',
             'area' => '377944'
        ]);
        DB::table('countries')->insert([
            'name' => 'Нигерия',
             'capital' => 'Абуджа',
             'population' => '186988000',
             'area' => '923768'
        ]);
        DB::table('countries')->insert([
            'name' => 'Китай',
             'capital' => 'Пекин',
             'population' => '1411778724',
             'area' => '9640821'
        ]);
        DB::table('countries')->insert([
            'name' => 'Канада',
             'capital' => 'Оттава',
             'population' => '36286425',
             'area' => '9976139'
        ]);
        DB::table('countries')->insert([
            'name' => 'Бразилия',
             'capital' => 'Бразилиа',
             'population' => '206081432',
             'area' => '8511965'
        ]);
        DB::table('countries')->insert([
            'name' => 'Бельгия',
             'capital' => 'Брюссель',
             'population' => '11250585',
             'area' => '30528'
        ]);
        DB::table('countries')->insert([
            'name' => 'Исландия',
             'capital' => 'Рейкьявик',
             'population' => '332529',
             'area' => '103000'
        ]);
    }
}


//Всемирный Фестиваль Молодежи 2024-03-01
//Дух Oгня - Международный фестиваль кинодебютов 2024-03-23
//Продажа картошки 2024-02-29


