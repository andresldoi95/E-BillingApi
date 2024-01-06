<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Role extends Model
{
    use HasFactory, SoftDeletes;
    protected $fillable = [
        'name',
        'description',
        'tenant_id'
    ];
    public function actions() {
        return $this->belongsToMany(Action::class, 'permissions', 'role_id', 'action_id');
    }
}
