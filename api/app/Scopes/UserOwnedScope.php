<?php

namespace App\Scopes;

use App\Exceptions\UserNotSetException;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Scope;
use Illuminate\Support\Facades\Auth;

class UserOwnedScope implements Scope
{
    public function apply(Builder $builder, Model $model)
    {
        if (!Auth::user()) {
            throw new UserNotSetException("Models that use UserOwnedScope can't be accessed without a user.");
        }

        return $builder->where($model->getTable() . 'userID', Auth::user()->id);
    }
}
