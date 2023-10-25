<?php

namespace App\Policies;

use App\Models\Chirp;
use App\Models\User;
use Illuminate\Auth\Access\Response;

class ChirpPolicy
{
    /**
     * Determine whether the user can view any models.
     */

    public function update(User $user, Chirp $chirp): bool
    {
        return $chirp->user()->is($user);
    }
}
