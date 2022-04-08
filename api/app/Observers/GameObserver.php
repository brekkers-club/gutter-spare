<?php

namespace App\Observers;

use App\Models\Frame;
use App\Models\Game;

class GameObserver
{
    /**
     * Handle the Game "created" event.
     *
     * @param  \App\Models\Game  $game
     * @return void
     */
    public function created(Game $game)
    {
        $frames = [];
        for ($i = 1; $i <= Game::FRAME_COUNT; $i++) {
            $frames[] = ['frame_number' => $i];
        }

        $game->frames()->createMany($frames);

        $game->frames->each(function (Frame $frame) {
            $rolls = [
                ['roll_number' => 1],
                ['roll_number' => 2]
            ];

            if ($frame->frame_number === 10) {
                $rolls[] = ['roll_number' => 3];
            }

            $frame->rolls()->createMany($rolls);
        });
    }

    /**
     * Handle the Game "updated" event.
     *
     * @param  \App\Models\Game  $game
     * @return void
     */
    public function updated(Game $game)
    {
        //
    }

    /**
     * Handle the Game "deleted" event.
     *
     * @param  \App\Models\Game  $game
     * @return void
     */
    public function deleted(Game $game)
    {
        //
    }

    /**
     * Handle the Game "restored" event.
     *
     * @param  \App\Models\Game  $game
     * @return void
     */
    public function restored(Game $game)
    {
        //
    }

    /**
     * Handle the Game "force deleted" event.
     *
     * @param  \App\Models\Game  $game
     * @return void
     */
    public function forceDeleted(Game $game)
    {
        //
    }
}
