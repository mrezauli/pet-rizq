<?php

namespace App\Policies;

use Illuminate\Auth\Access\Response;
use App\Models\Salary;
use App\Models\User;

class SalaryPolicy
{
    /**
     * Determine whether the user can view any models.
     */
    public function viewAny(User $user): bool
    {
        return $user->checkPermissionTo('view-any Salary');
    }

    /**
     * Determine whether the user can view the model.
     */
    public function view(User $user, Salary $salary): bool
    {
        return $user->checkPermissionTo('view Salary');
    }

    /**
     * Determine whether the user can create models.
     */
    public function create(User $user): bool
    {
        return $user->checkPermissionTo('create Salary');
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(User $user, Salary $salary): bool
    {
        return $user->checkPermissionTo('update Salary');
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(User $user, Salary $salary): bool
    {
        return $user->checkPermissionTo('delete Salary');
    }

    /**
     * Determine whether the user can restore the model.
     */
    public function restore(User $user, Salary $salary): bool
    {
        return $user->checkPermissionTo('restore Salary');
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
    public function forceDelete(User $user, Salary $salary): bool
    {
        return $user->checkPermissionTo('force-delete Salary');
    }
}
