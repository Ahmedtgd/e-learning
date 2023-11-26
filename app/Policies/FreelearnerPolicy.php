<?php

namespace App\Policies;

use App\Models\User;

use Illuminate\Auth\Access\Response;

use App\Models\Freelearner;


class FreelearnerPolicy
{
    /*
     public function viewAny(User $user): bool
    {
        return $user->can('view-any Freelearner');
    }
*/
    /**
     * Determine whether the user can view the model.
     */
    public function view(User $user, Freelearner $freelearner): bool
    {
        return $user->can('view Freelearner');
    }

    /**
     * Determine whether the user can create models.
     */
    public function create(User $user): bool
    {
        return $user->can('create Freelearner');
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(User $user, Freelearner $freelearner): bool
    {
        return $user->can('update Freelearner');
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(User $user, Freelearner $freelearner): bool
    {
        return $user->can('delete Freelearner');
    }

    /**
     * Determine whether the user can restore the model.
     */
    public function restore(User $user, Freelearner $freelearner): bool
    {
        return $user->can('restore Freelearner');
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
    public function forceDelete(User $user, Freelearner $freelearner): bool
    {
        return $user->can('force-delete Freelearner');
    }
}
