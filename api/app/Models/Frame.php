<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

/**
 * @property int $frame_number
 * @property Carbon $created_at
 * @property Carbon $updated_at
 * @property-read Collection<Roll> $rolls
 */
class Frame extends Model
{
    use HasFactory;

    protected $fillable = [
      'frame_number'
    ];

    /**
     * @return HasMany
     */
    public function rolls(): HasMany
    {
        return $this->hasMany(Roll::class, 'frame_id');
    }
}
