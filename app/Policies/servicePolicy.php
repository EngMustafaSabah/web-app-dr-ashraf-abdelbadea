<?php

namespace App\Policies;

use Illuminate\Auth\Access\Response;
use App\Models\service;
use App\Models\User;

class servicePolicy
{
    /**
     * Determine whether the user can view any models.
     */
    public function viewAny(User $user): bool
    {
        return $user->can('view-any service');
    }

    /**
     * Determine whether the user can view the model.
     */
    public function view(User $user, service $service): bool
    {
        return $user->can('view service');
    }

    /**
     * Determine whether the user can create models.
     */
    public function create(User $user): bool
    {
        return $user->can('create service');
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(User $user, service $service): bool
    {
        return $user->can('update service');
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(User $user, service $service): bool
    {
        return $user->can('delete service');
    }

    /**
     * Determine whether the user can restore the model.
     */
    public function restore(User $user, service $service): bool
    {
        return $user->can('restore service');
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
    public function forceDelete(User $user, service $service): bool
    {
        return $user->can('force-delete service');
    }
}
