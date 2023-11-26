<?php

namespace App\Policies;

use App\Models\User;

use Illuminate\Auth\Access\Response;

use App\Models\Classterm;

class ClasstermPolicy
{
      /*
     public function viewAny(User $user): bool
    {
        return $user->can('view-any Classterm');
    }
*/
    /**
     * Determine whether the user can view the model.
     */
    public function view(User $user, Classterm $classterm): bool
    {
        return $user->can('view Classterm');
    }

    /**
     * Determine whether the user can create models.
     */
    public function create(User $user): bool
    {
        return $user->can('create Classterm');
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(User $user, Classterm $classterm): bool
    {
        return $user->can('update Classterm');
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(User $user, Classterm $classterm): bool
    {
        return $user->can('delete Classterm');
    }

    /**
     * Determine whether the user can restore the model.
     */
    public function restore(User $user, Classterm $classterm): bool
    {
        return $user->can('restore Classterm');
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
    public function forceDelete(User $user, Classterm $classterm): bool
    {
        return $user->can('force-delete Classterm');
    }
}
