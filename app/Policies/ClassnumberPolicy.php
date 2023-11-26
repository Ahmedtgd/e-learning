<?php

namespace App\Policies;

use App\Models\User;

use Illuminate\Auth\Access\Response;
use App\Models\Classnumber;

class ClassnumberPolicy
{
     /*
     public function viewAny(User $user): bool
    {
        return $user->can('view-any ClassNumber');
    }
*/
    /**
     * Determine whether the user can view the model.
     */
    public function view(User $user, ClassNumber $classNumber): bool
    {
        return $user->can('view ClassNumber');
    }

    /**
     * Determine whether the user can create models.
     */
    public function create(User $user): bool
    {
        return $user->can('create ClassNumber');
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(User $user, ClassNumber $classNumber): bool
    {
        return $user->can('update ClassNumber');
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(User $user, ClassNumber $classNumber): bool
    {
        return $user->can('delete ClassNumber');
    }

    /**
     * Determine whether the user can restore the model.
     */
    public function restore(User $user, ClassNumber $classNumber): bool
    {
        return $user->can('restore ClassNumber');
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
    public function forceDelete(User $user, ClassNumber $classNumber): bool
    {
        return $user->can('force-delete ClassNumber');
    }

}
