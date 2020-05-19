<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\MovieResource;
use App\Services\MovieRepository;

class MovieController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:api');
    }

    public function index(MovieRepository $movieRepository)
    {
        $movies = $movieRepository->getCurrentUserMovies();

        //return $movies;
        return MovieResource::collection($movies);
    }
}
