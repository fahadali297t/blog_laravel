<?php

namespace Database\Seeders;

use App\Models\Blog;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BlogSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Blog::create([
            'title' => '10 Proven Tips to Boost Your Productivity',
            'content' => 'In today’s fast-paced world, staying productive can be a challenge. Here are 10 scientifically backed tips to help you get more done in less time. From managing your time efficiently to setting realistic goals, this guide covers it all...',
            'image_path' => 'uploads/blogs/productivity-tips.jpg',
            'view_count' => 1345,
            'like_count' => 287,
            'user_id' => 1, // Assuming user with ID 1 exists in users table
            'categories_id' => 3 // Assuming category with ID 3 exists in categories table
        ]);
    }
}
