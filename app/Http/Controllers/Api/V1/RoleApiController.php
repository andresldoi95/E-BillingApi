<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Services\RoleService;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class RoleApiController extends Controller
{
    protected $roleService;

    public function __construct(RoleService $roleService)
    {
        $this->roleService = $roleService;
    }

    public function store(Request $request)
    {
        $request->validate([
            'tenant_id' => 'required|exists:tenants,id',
            'name' => ['required', 'max:100', Rule::unique('roles')->where(function ($query) use ($request) {
                return $query->where('tenant_id', $request->tenant_id);
            })],
            'description' => 'nullable|max:500',
            'actions' => 'nullable|array'
        ]);
        return $this->roleService->createRole($request->all());
    }
}
