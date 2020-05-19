<?php

namespace App\Http\Controllers;

use App\Services\MovieRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MovieController extends Controller
{
    public function index(MovieRepository $movieRepository)
    {
        $movies = $movieRepository->getCurrentUserMovies();

        return view('movie.index', compact('movies'));
    }
}
