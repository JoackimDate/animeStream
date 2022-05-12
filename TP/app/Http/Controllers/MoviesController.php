<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MoviesController extends Controller
{
    //
    public function movies()
    {
        return view('Stream.movies');
    }

    public function index()
    {
        return view('Stream.index');
    }

    public function tvshow()
    {
        return view("Stream.tvshow");
    }

    public function videos()
    {
        return view("Stream.video");
    }

    public function blog()
    {
        return view("Stream.blog");
    }

    public function blogdetail()
    {
        return view("Stream.blogdetail");
    }
}
