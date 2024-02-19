<?php

namespace App\Policies;

use App\Models\User;
use App\Models\Tower;
use Illuminate\Auth\Access\Response;

class TowerPolicy
{
    /**
     * Determine whether the user can view any models.
     */
    public function viewAny(User $user): bool
    {
        //
    }

    /**
     * Determine whether the user can view the model.
     */
    public function view(User $user, Tower $tower): bool
    {
        //
    }

    /**
     * Determine whether the user can create models.
     */
    public function create(User $user): bool
    {
        //
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(User $user, Tower $tower): bool
    {
        //
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(User $user, Tower $tower): bool
    {
        //
    }

    /**
     * Determine whether the user can resTore the model.
     */
    public function resTore(User $user, Tower $tower): bool
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
    public function forceDelete(User $user, Tower $tower): bool
    {
        //
    }
}
