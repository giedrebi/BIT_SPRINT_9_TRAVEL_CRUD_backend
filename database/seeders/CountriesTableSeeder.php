<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CountriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Country::create([ 
            'title' => 'France', 
            'season_weather' => 'Winter 8°C, Spring 17°C, Summer 23°C, Autumn 11°C', 
        ]);
        \App\Models\Country::create([ 
            'title' => 'Spain', 
            'season_weather' => 'Winter 11°C, Spring 18°C, Summer 25°C, Autumn 14°C', 
        ]);
        \App\Models\Country::create([ 
            'title' => 'Italy', 
            'season_weather' => 'Winter 13°C, Spring 18°C, Summer 25°C, Autumn 16°C', 
        ]);
    }
}
