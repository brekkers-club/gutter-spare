<?php

namespace Database\Seeders;

use App\Models\Game;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::factory()
            ->create([
                'email' => 'league@bowler.com',
                'name' => 'League Bowler',
                'password' => Hash::make('lane1234'),
            ]);

        $games = Game::factory()->count(3)->create([
            'userID' => $user->id,
        ]);

        $user->games()->saveMany($games);
    }
}
