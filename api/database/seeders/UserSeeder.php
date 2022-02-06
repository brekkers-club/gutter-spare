<?php

namespace Database\Seeders;

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
            $user = new User();
        $user->email = 'league@bowler.com';
        $user->name = 'League Bowler';
        $user->password = Hash::make('lane1234');
        $user->save();
    }
}
