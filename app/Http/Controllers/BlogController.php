<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\User;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function list()
    {
        $data = Blog::with('user')->with('category')->get();
        return $data;
    }
}
