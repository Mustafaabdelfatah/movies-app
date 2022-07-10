<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\User;
use App\Models\Movie;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class WelcomeController extends Controller
{
    public function index(){


        $users_count = User::whereRole('user')->count();
        $categories_count = Category::count();
        $movies_count = Movie::count();

        return view('dashboard.welcome', compact('users_count', 'categories_count', 'movies_count'));

    }
}
