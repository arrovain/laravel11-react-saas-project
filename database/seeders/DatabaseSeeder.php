<?php

namespace Database\Seeders;

use App\Models\Feature;
use App\Models\Package;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder


{
    public function run(): void
    {
        User::factory()->create([
            'name' => 'icme',
            'email' => 'icme@example.com',
            'password' => bcrypt('123.321Aa'),
    ]);
        Feature::create([
            'image' => 'https://static-00.iconduck.com/assets.00/plus-icon-2048x2048-z6v59bd6.png',
            'route_name' => 'feature1.index',
            'name' => 'Calculate sum',
            'required_credits' => 1,
            'description' =>'Calculate sum of two number',
            'active' => true,
        ]);
        Feature::create([
            'image' => 'https://static-00.iconduck.com/assets.00/plus-icon-2048x2048-z6v59bd6.png',
            'route_name' => 'feature2.index',
            'name' => 'Calculate sum',
            'required_credits' => 3,
            'description' =>'Calculate sum of two number',
            'active' => true,
        ]);
        Package::create([
            'name'=>'Basic',
            'price'=> 5,
            'credits'=>20
        ]);
        Package::create([
            'name'=>'Silver',
            'price'=> 20,
            'credits'=>100
        ]);
        Package::create([
            'name'=>'Gold',
            'price'=> 50,
            'credits'=>500
        ]);


    }
    
 }