<?php

namespace App\Repositories;

use App\Models\Role;

interface RoleRepositoryInterface
{
    public function create(array $data): Role;
}
