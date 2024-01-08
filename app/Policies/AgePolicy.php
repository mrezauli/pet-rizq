<?php

namespace App\Policies;

use Illuminate\Auth\Access\Response;
use App\Models\Age;
use App\Models\User;

class AgePolicy
{
    /**
     * Determine whether the user can view any models.
     */
    public function viewAny(User $user): bool
    {
        return $user->checkPermissionTo('view-any Age');
    }

    /**
     * Determine whether the user can view the model.
     */
    public function view(User $user, Age $age): bool
    {
        return $user->checkPermissionTo('view Age');
    }

    /**
     * Determine whether the user can create models.
     */
    public function create(User $user): bool
    {
        return $user->checkPermissionTo('create Age');
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(User $user, Age $age): bool
    {
        return $user->checkPermissionTo('update Age');
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(User $user, Age $age): bool
    {
        return $user->checkPermissionTo('delete Age');
    }

    /**
     * Determine whether the user can restore the model.
     */
    public function restore(User $user, Age $age): bool
    {
        return $user->checkPermissionTo('restore Age');
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
    public function forceDelete(User $user, Age $age): bool
    {
        return $user->checkPermissionTo('force-delete Age');
    }
}
