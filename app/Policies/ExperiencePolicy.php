<?php

namespace App\Policies;

use Illuminate\Auth\Access\Response;
use App\Models\Experience;
use App\Models\User;

class ExperiencePolicy
{
    /**
     * Determine whether the user can view any models.
     */
    public function viewAny(User $user): bool
    {
        return $user->checkPermissionTo('view-any Experience');
    }

    /**
     * Determine whether the user can view the model.
     */
    public function view(User $user, Experience $experience): bool
    {
        return $user->checkPermissionTo('view Experience');
    }

    /**
     * Determine whether the user can create models.
     */
    public function create(User $user): bool
    {
        return $user->checkPermissionTo('create Experience');
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(User $user, Experience $experience): bool
    {
        return $user->checkPermissionTo('update Experience');
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(User $user, Experience $experience): bool
    {
        return $user->checkPermissionTo('delete Experience');
    }

    /**
     * Determine whether the user can restore the model.
     */
    public function restore(User $user, Experience $experience): bool
    {
        return $user->checkPermissionTo('restore Experience');
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
    public function forceDelete(User $user, Experience $experience): bool
    {
        return $user->checkPermissionTo('force-delete Experience');
    }
}
