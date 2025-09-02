<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    
    //php artisan make:model Book -mfs
    public function run(): void
    {
        // Example user
        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);

        // Call BookSeeder
        $this->call([
            LIbrarySeeder::class,
            BookSeeder::class,
        ]);
    }
}
