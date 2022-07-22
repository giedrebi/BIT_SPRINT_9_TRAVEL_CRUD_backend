<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TownsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Town::create([ 
            'town_title' => 'Paris', 
            'distance' => '1696', 
            'days' => '5', 
            'price' => '399.00', 
            'country_id' => '1', 
        ]);
        \App\Models\Town::create([ 
            'town_title' => 'Barcelona', 
            'distance' => '2262', 
            'days' => '4', 
            'price' => '319.00', 
            'country_id' => '2', 
        ]);
        \App\Models\Town::create([ 
            'town_title' => 'Milan', 
            'distance' => '1533', 
            'days' => '3', 
            'price' => '289.00', 
            'country_id' => '3', 
        ]);
    }
}
