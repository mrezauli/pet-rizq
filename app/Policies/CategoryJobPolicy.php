<?php

namespace App\Policies;

use Illuminate\Auth\Access\Response;
use App\Models\CategoryJob;
use App\Models\User;

class CategoryJobPolicy
{
    /**
     * Determine whether the user can view any models.
     */
    public function viewAny(User $user): bool
    {
        return $user->checkPermissionTo('view-any CategoryJob');
    }

    /**
     * Determine whether the user can view the model.
     */
    public function view(User $user, CategoryJob $categoryjob): bool
    {
        return $user->checkPermissionTo('view CategoryJob');
    }

    /**
     * Determine whether the user can create models.
     */
    public function create(User $user): bool
    {
        return $user->checkPermissionTo('create CategoryJob');
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(User $user, CategoryJob $categoryjob): bool
    {
        return $user->checkPermissionTo('update CategoryJob');
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(User $user, CategoryJob $categoryjob): bool
    {
        return $user->checkPermissionTo('delete CategoryJob');
    }

    /**
     * Determine whether the user can restore the model.
     */
    public function restore(User $user, CategoryJob $categoryjob): bool
    {
        return $user->checkPermissionTo('restore CategoryJob');
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
    public function forceDelete(User $user, CategoryJob $categoryjob): bool
    {
        return $user->checkPermissionTo('force-delete CategoryJob');
    }
}
