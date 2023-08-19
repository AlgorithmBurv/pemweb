<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Schema::disableForeignKeyConstraints();
        Category::truncate();
        Schema::enableForeignKeyConstraints();

        $data = [
            [
                'name' => 'Comic', 'slug' => 'comic',
            ],
            [
                'name' => 'Novel', 'slug' => 'novel',
            ],
            [
                'name' => 'Fantasy', 'slug' => 'fantasy',
            ],
            [
                'name' => 'Fiction', 'slug' => 'fiction',
            ],
            [
                'name' => 'Mystery', 'slug' => 'mystery',
            ],
            [
                'name' => 'Horror', 'slug' => 'horror',
            ],
            [
                'name' => 'Romance', 'slug' => 'romance',
            ],
            [
                'name' => 'Western', 'slug' => 'western',
            ],
        ];

        foreach ($data as $value) {
            Category::insert([
                'name' => $value['name'],
                'slug' => $value['slug'],

            ]);
        }
    }
}
