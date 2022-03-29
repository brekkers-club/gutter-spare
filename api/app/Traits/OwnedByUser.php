<?php

/** @noinspection PhpAccessingStaticMembersOnTraitInspection */

namespace App\Traits;

use App\Models\User;
use App\Scopes\UserOwnedScope;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

trait OwnedByUser
{
    protected static function bootOwnedByUser()
    {
        static::addGlobalScope(new UserOwnedScope());

        static::creating(function ($model) {
            if (Auth::user() && !$model->userID && !$model->relationLoaded('user')) {
                $model->userID = Auth::user()->id;
            }
        });
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'userID');
    }
}
