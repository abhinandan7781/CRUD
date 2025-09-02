<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Book;
class BookSeeder extends Seeder
{
    //php artisan make:model Book -mfs

    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Book::factory()->count(61)->create();
    }
}
