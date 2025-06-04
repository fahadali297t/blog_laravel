<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function UserList()
    {
        $user =   User::with('blog')->get();
        return $user;
    }
    public function showDash()
    {
        $id = Auth::user()->id;
        $blogs = Blog::with('category')->where('user_id', $id)->get();

        return view('dashboard', [
            'blogs' => $blogs
        ]);
    }
    public function list_blogs()
    {
        $id = Auth::user()->id;
        $blogs = Blog::with('category')->where('user_id', $id)->get();

        return view('blogs.blog_list', [
            'blogs' => $blogs
        ]);
    }

    public function analytics()
    {
        return view('blogs.analytics');
    }
}
