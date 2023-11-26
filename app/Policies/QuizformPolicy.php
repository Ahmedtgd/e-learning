<?php

namespace App\Policies;

use App\Models\User;


use Illuminate\Auth\Access\Response;

use App\Models\Quizform;

class QuizformPolicy
{
     /*
     public function viewAny(User $user): bool
    {
        return $user->can('view-any Quizform');
    }
*/
    /**
     * Determine whether the user can view the model.
     */
    public function view(User $user, Quizform $quizform): bool
    {
        return $user->can('view Quizform');
    }

    /**
     * Determine whether the user can create models.
     */
    public function create(User $user): bool
    {
        return $user->can('create Quizform');
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(User $user, Quizform $quizform): bool
    {
        return $user->can('update Quizform');
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(User $user, Quizform $quizform): bool
    {
        return $user->can('delete Quizform');
    }

    /**
     * Determine whether the user can restore the model.
     */
    public function restore(User $user, Quizform $quizform): bool
    {
        return $user->can('restore Quizform');
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
    public function forceDelete(User $user, Quizform $quizform): bool
    {
        return $user->can('force-delete Quizform');
    }
}
