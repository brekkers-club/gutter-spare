<?php

namespace App\Models;

use App\Traits\OwnedByUser;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

/**
 * @property int $id
 * @property int $user_id
 * @property Carbon $created_at
 * @property Carbon $updated_at
 *
 * @property Collection<Frame> $frames
 * @property User $user
 */
class Game extends Model
{
    use HasFactory;
    use OwnedByUser;

    /**
     * @const int
     */
    public const FRAME_COUNT = 10;

    /**
     * @return HasMany
     */
    public function frames(): HasMany
    {
        return $this->hasMany(Frame::class, 'game_id');
    }
}
