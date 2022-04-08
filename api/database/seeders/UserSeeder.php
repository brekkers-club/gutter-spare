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
                'first_name' => 'League',
                'last_name' => 'Bowler',
                'password' => Hash::make('lane1234'),
            ]);

        $games = Game::factory()->create([
            'user_id' => $user->id,
        ]);

        $user->games()->save($games);
    }
}
