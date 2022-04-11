<?php

namespace App\Http\Controllers;

use App\Models\Game;
use Illuminate\Http\Request;

class GameController extends Controller
{
    public function index()
    {
        return Game::paginate();
    }

    public function store()
    {
        return response()
            ->json([
               'data' => [
                   'id' => Game::create()->id
               ],
            ]);
    }
}
