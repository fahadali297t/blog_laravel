<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function categoryList()
    {
        $user =   Category::with('blog')->where('id', '3')->get();
        return $user;
    }
}
