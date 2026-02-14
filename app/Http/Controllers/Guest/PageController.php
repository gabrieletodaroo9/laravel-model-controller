<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use App\Models\Movie;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home()
    {

        $movies = Movie::all();
        $topRated = Movie::orderBy("vote", "desc")->limit(3)->get();
        return view("home", compact("movies","topRated"));
    }

    public function detail($id)
    {

        $movie = Movie::findOrFail($id);
        return view("detail", compact("movie"));
    }

}
