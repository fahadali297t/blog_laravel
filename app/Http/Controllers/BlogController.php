<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Category;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BlogController extends Controller
{
    public function list()
    {
        $data = Blog::with('user')->with('category')->get();
        return $data;
    }
    public function newBlog()
    {
        $cat = Category::get();

        return view('blogs.new', ['cat' => $cat]);
    }
    public function newBlog_submit(Request $request)
    {
        $validData = $request->validate([
            'title' => 'required',
            'content' => 'required',
            'category' => 'required',
            'image_path' => 'required'
        ]);
        $file = $request->file('image_path');
        if ($validData) {
            # code...
            $fileName = time() . '_' . $file->getClientOriginalName();
            $filePath = $file->storeAs('uploads', $fileName, 'public');

            $blog = Blog::create([
                'title' => $request->title,
                'content' => $request->content,
                'image_path' => $filePath,
                'view_count' => 0,
                'like_count' => 0,
                'user_id' => Auth::user()->id,
                'categories_id' => $request->category,
                'created_at' => now(),
                'updated_at' => now(),
            ]);




            return redirect()->route('dashboard');
        } else {
            return redirect()->route('blog.new.form');
        }
    }
}
