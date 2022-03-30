<?php

namespace App\Http\Controllers;
use App\Movie;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index(){
        
        $movies = Movie::all();
        
        $ratings = Movie::where('vote', '>=', 9)->get();
        
        return view('home', compact('movies','ratings'));
    }
}
