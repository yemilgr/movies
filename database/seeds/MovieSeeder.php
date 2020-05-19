<?php

use App\User;
use Illuminate\Database\Seeder;

class MovieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::first();
        factory('App\Movie', 20)->create([
            'user_id' => $user->id
        ]);
    }
}
