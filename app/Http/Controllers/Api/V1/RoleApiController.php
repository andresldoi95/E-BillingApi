<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Http\Requests\Roles\CreateRoleRequest;
use App\Services\RoleService;

class RoleApiController extends Controller
{
    protected $roleService;

    public function __construct(RoleService $roleService)
    {
        $this->roleService = $roleService;
    }

    public function store(CreateRoleRequest $request)
    {
        return $this->roleService->createRole($request->validated());
    }
}
