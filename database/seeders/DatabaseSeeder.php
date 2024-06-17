<?php

namespace Database\Seeders;

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

    }
    
 }