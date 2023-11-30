<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Listing;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // FOR SEEDING DUMMY USER USE:- php artisan db:seed
        // \App\Models\User::factory(10)->create();
        $user = User::factory()->create([
            'name' => 'John',
            'email' => 'john@g.c'
        ]);
        
        Listing::factory(6)->create([
            'user_id' => $user->id
        ]);
        // FOR DELETING ALL DUMMY USER USE:- php artisan migrate:refresh

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
