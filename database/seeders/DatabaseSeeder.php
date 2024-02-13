<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Monitoring;
use App\Models\Control;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        User::create([
            'name' => 'Khairul Aqram',
            'username' => 'khairulaqram',
            'email' => 'khairulaqram21@gmail.com',
            'password' => bcrypt('12345')
        ]);

        Monitoring::create([
            'temperature' => 28.8,
            'turbidity' => 90,
            'ph' => 7.9,
            'dissolved_oxygen' => 6.8,
            'water_pump' => 'Mati',
            'aerator' => 'Mati',
        ]);
    }
}
