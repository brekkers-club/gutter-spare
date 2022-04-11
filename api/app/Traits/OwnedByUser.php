<?php

/** @noinspection PhpAccessingStaticMembersOnTraitInspection */

namespace App\Traits;

use App\Models\User;
use App\Scopes\UserOwnedScope;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Support\Facades\Auth;

trait OwnedByUser
{
    protected static function bootOwnedByUser()
    {
        static::addGlobalScope(new UserOwnedScope());

        static::creating(function ($model) {
            if (Auth::user() && !$model->user_id && !$model->relationLoaded('user')) {
                $model->user_id = Auth::user()->id;
            }
        });
    }

    /**
     * @return BelongsTo
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
