<?php

namespace Database\Seeders;
use App\Models\Library;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LIbrarySeeder extends Seeder
{
    //php artisan make:model Book -mfs
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        LIbrary::factory()->count(10)->create();
    }
}
