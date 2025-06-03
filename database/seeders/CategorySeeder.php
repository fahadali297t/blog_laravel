<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\File;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $file = File::get(path: 'database/json/categorie.json');
        $categories = collect(json_decode($file));
        $categories->map(function ($val) {
            Category::create([
                'name' => $val->name
            ]);
        });
    }
}
