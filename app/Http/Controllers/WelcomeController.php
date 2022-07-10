<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Movie;

class WelcomeController extends Controller
{


    public function index()
    {



        $latest_movies = Movie::latest()->limit(5)->get();
        $categories = Category::with('movies')->get();


        return view('welcome', compact('latest_movies','categories'));

    }// end of index
}
