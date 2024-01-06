<?php

namespace App\Repositories;

use App\Models\Role;
use App\Repositories\RoleRepositoryInterface;
use Illuminate\Support\Facades\DB;

class RoleRepository implements RoleRepositoryInterface
{
    public function create(array $data): Role
    {
        return DB::transaction(function () use ($data) {
            $role = Role::create([
                'tenant_id' => $data['tenant_id'],
                'name' => $data['name'],
                'description' => $data['description']
            ]);
            if (isset($data['actions']))
                $role->actions()->sync($data['actions']);
            return $role;
        });
    }
}
