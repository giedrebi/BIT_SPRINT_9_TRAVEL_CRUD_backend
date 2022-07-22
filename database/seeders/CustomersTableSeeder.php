<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CustomersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Customer::create([ 
            'name' => 'John', 
            'surname' => 'Doe', 
            'email' => 'john@doe.com', 
            'phone' => '862233555', 
            'town_id' => '1', 
        ]);
        \App\Models\Customer::create([ 
            'name' => 'Laura', 
            'surname' => 'Smith', 
            'email' => 'laura@smith.com', 
            'phone' => '862233666', 
            'town_id' => '2', 
        ]);
        \App\Models\Customer::create([ 
            'name' => 'Jake', 
            'surname' => 'Snow', 
            'email' => 'jake@snow.com', 
            'phone' => '862233777', 
            'town_id' => '3', 
        ]);
    }
}
