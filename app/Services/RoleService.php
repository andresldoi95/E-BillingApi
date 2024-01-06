<?php

namespace App\Services;

use App\Models\Role;
use App\Repositories\RoleRepositoryInterface;

class RoleService
{
    protected $roleRepository;

    public function __construct(RoleRepositoryInterface $roleRepository)
    {
        $this->roleRepository = $roleRepository;
    }

    public function createRole(array $data): Role
    {
        return $this->roleRepository->create($data);
    }
}
