<?php

namespace Tests\Feature;

use App\Models\Game;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class GameTest extends TestCase
{
    /**
     * @test
     */
    public function games_should_have_correct_frame_count()
    {
        $user = User::factory()->create();
        $response = $this->actingAs($user)
            ->post('api/v1/games');

        $response->assertSuccessful();

        /** @var Game $game */
        $game = Game::find($response->json()['data']['id']);

        $this->assertEquals(Game::FRAME_COUNT, $game->frames()->count());
    }

    /**
     * @test
     */
    public function game_frames_should_have_correct_number_of_rolls()
    {
        $user = User::factory()->create();
        $response = $this->actingAs($user)
            ->post('api/v1/games');

        $response->assertSuccessful();

        /** @var Game $game */
        $game = Game::find($response->json()['data']['id']);

        $this->assertEquals(
            2,
            $game->frames()
            ->where('frame_number', 1)
            ->first()
            ->rolls()
            ->count()
        );

        $this->assertEquals(
            2,
            $game->frames()
            ->where('frame_number', 2)
            ->first()
            ->rolls()
            ->count()
        );

        $this->assertEquals(
            2,
            $game->frames()
            ->where('frame_number', 3)
            ->first()
            ->rolls()
            ->count()
        );

        $this->assertEquals(
            2,
            $game->frames()
            ->where('frame_number', 4)
            ->first()
            ->rolls()
            ->count()
        );

        $this->assertEquals(
            2,
            $game->frames()
            ->where('frame_number', 5)
            ->first()
            ->rolls()
            ->count()
        );

        $this->assertEquals(
            2,
            $game->frames()
            ->where('frame_number', 6)
            ->first()
            ->rolls()
            ->count()
        );

        $this->assertEquals(
            2,
            $game->frames()
            ->where('frame_number', 7)
            ->first()
            ->rolls()
            ->count()
        );

        $this->assertEquals(
            2,
            $game->frames()
            ->where('frame_number', 8)
            ->first()
            ->rolls()
            ->count()
        );

        $this->assertEquals(
            2,
            $game->frames()
            ->where('frame_number', 9)
            ->first()
            ->rolls()
            ->count()
        );

        $this->assertEquals(
            3,
            $game->frames()
            ->where('frame_number', 10)
            ->first()
            ->rolls()
            ->count()
        );
    }
}
