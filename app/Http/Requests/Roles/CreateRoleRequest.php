<?php

namespace App\Http\Requests\Roles;

use App\Models\Role;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class CreateRoleRequest extends FormRequest
{
    public function authorize(): bool
    {
        return $this->user()->can('create', Role::class);
    }
    public function rules(): array
    {
        return [
            'tenant_id' => 'required|exists:tenants,id',
            'name' => ['required', 'max:100', Rule::unique('roles')->where(function ($query) {
                return $query->where('tenant_id', $this->tenant_id);
            })],
            'description' => 'nullable|max:500',
            'actions' => 'nullable|array'
        ];
    }
}
