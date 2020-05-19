<?php

namespace App\Services;

use Illuminate\Support\Facades\Auth;
use Psy\CodeCleaner\ReturnTypePass;

class MovieRepository
{
    public function getCurrentUserMovies()
    {
        $user = Auth::user();

        return $user->movies;
    }
}
