<?php

namespace App\Policies;

use App\Models\User;

use Illuminate\Auth\Access\Response;

use App\Models\Course;

class CoursePolicy
{
     /*
     public function viewAny(User $user): bool
    {
        return $user->can('view-any Course');
    }
*/
    /**
     * Determine whether the user can view the model.
     */
    public function view(User $user, Course $course): bool
    {
        return $user->can('view Course');
    }

    /**
     * Determine whether the user can create models.
     */
    public function create(User $user): bool
    {
        return $user->can('create Course');
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(User $user, Course $course): bool
    {
        return $user->can('update Course');
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(User $user, Course $course): bool
    {
        return $user->can('delete Course');
    }

    /**
     * Determine whether the user can restore the model.
     */
    public function restore(User $user, Course $course): bool
    {
        return $user->can('restore Course');
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
    public function forceDelete(User $user, Course $course): bool
    {
        return $user->can('force-delete Course');
    }
}
