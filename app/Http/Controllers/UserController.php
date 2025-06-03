<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function UserList()
    {
        $user =   User::with('blog')->get();
        return $user;
    }
}
