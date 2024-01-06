<?php

namespace App\Policies;

use App\Enums\ActionEnum;
use App\Models\User;

class RolePolicy
{
    public function before(User $user): bool|null
    {
        if ($user->isSuperadmin())
            return true;
        return null;
    }
    public function create(User $user): bool
    {
        return $user->hasPermission(ActionEnum::CREATE_ROLE);
    }
}
