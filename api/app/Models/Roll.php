<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * @property int $id
 * @property int $frame_id
 * @property int $roll_number
 * @property Carbon $created_at
 * @property Carbon $updated_at
 * @property-read Frame $frame
 */
class Roll extends Model
{
    use HasFactory;

    /**
     * @return BelongsTo
     */
    public function frame(): BelongsTo
    {
        return $this->belongsTo(Frame::class, 'frame_id');
    }
}
