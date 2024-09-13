<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        \App\Models\User::factory()->create([
            'name' => 'Test Admin',
            'email' => 'test@example.com',
        ]);   
        
        \App\Models\Study::factory(10)->create();
        \App\Models\Business::factory(10)->create();
        \App\Models\Sponsorship::factory(10)->create();
        \App\Models\General::factory(10)->create();
    }
}
