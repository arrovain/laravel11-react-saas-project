<?php

namespace Database\Seeders;

use App\Models\Feature;
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
    

    }
    
 }