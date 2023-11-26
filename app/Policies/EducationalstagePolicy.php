<?php

namespace App\Policies;

use App\Models\User;

use Illuminate\Auth\Access\Response;

use App\Models\Educationalstage;

class EducationalstagePolicy
{
      /*
     public function viewAny(User $user): bool
    {
        return $user->can('view-any Educationalstage');
    }
*/
    /**
     * Determine whether the user can view the model.
     */
    public function view(User $user, Educationalstage $educationalstage): bool
    {
        return $user->can('view Educationalstage');
    }

    /**
     * Determine whether the user can create models.
     */
    public function create(User $user): bool
    {
        return $user->can('create Educationalstage');
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(User $user, Educationalstage $educationalstage): bool
    {
        return $user->can('update Educationalstage');
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(User $user, Educationalstage $educationalstage): bool
    {
        return $user->can('delete Educationalstage');
    }

    /**
     * Determine whether the user can restore the model.
     */
    public function restore(User $user, Educationalstage $educationalstage): bool
    {
        return $user->can('restore Educationalstage');
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
    public function forceDelete(User $user, Educationalstage $educationalstage): bool
    {
        return $user->can('force-delete Educationalstage');
    }
}
