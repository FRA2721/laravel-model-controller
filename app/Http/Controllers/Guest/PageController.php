<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use App\Models\Movie;
use Illuminate\Http\Request;

/**
 * PageController class
 * @author FRANCESCO CIMINO
 */
class PageController extends Controller
{
    /**
     * return 'home'
     * index function to show all
     * @author FRANCESCO CIMINO
     */
    public function index() {
        $movies = Movie::all();
        // dd($movies);
        return view('home', compact('movies'));
    }
}
