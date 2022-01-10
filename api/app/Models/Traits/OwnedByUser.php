<?php

namespace App\Models\Traits;

/**
 * @property User $user
 */
trait OwnedByUser {
    protected function bootOwnedByUser() {

    }

    public function user() {
        return $this->belongsTo(User::class, 'userID');
    }
}
