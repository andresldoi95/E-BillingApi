<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Passport\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;
    protected $fillable = [
        'name',
        'email',
        'password',
        'is_superadmin'
    ];
    protected $hidden = [
        'password',
        'remember_token',
    ];
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];
    public function isSuperadmin()
    {
        return $this->is_superadmin;
    }
    public function roles()
    {
        return $this->belongsToMany(Role::class, 'privileges', 'user_id', 'role_id');
    }
    public function hasPermission($permission)
    {
        return $this->roles()->whereHas('actions', function ($query) use ($permission) {
            $query->where('name', $permission);
        })->exists();
    }
}
