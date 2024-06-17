<?php

namespace App\Observers;

use App\Modals\User;

class UserObserver
{
    public function creating(User $user)
    {
        $user->available_credits = 10;

    }
}
