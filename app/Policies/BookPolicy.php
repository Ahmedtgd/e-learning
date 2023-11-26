<?php

namespace App\Policies;
use Illuminate\Auth\Access\Response;
use App\Models\Book;
use App\Models\User;

class BookPolicy
{
    /**
     * Create a new policy instance.
     */
/*
        public function viewAny(User $user): bool
        {
            return $user->can('view-any Book');
        }
*/
        /**
         * Determine whether the user can view the model.
         */
        public function view(User $user, Book $book): bool
        {
            return $user->can('view Book');
        }

        /**
         * Determine whether the user can create models.
         */
        public function create(User $user): bool
        {
            return $user->can('create Book');
        }

        /**
         * Determine whether the user can update the model.
         */
        public function update(User $user, Book $book): bool
        {
            return $user->can('update Book');
        }

        /**
         * Determine whether the user can delete the model.
         */
        public function delete(User $user, Book $book): bool
        {
            return $user->can('delete Book');
        }

        /**
         * Determine whether the user can restore the model.
         */
        public function restore(User $user, Book $book): bool
        {
            return $user->can('restore Book');
        }

        /**
         * Determine whether the user can permanently delete the model.
         */
        public function forceDelete(User $user, Book $book): bool
        {
            return $user->can('force-delete Book');
        }
    }

