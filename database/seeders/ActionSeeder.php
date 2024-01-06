<?php

namespace Database\Seeders;

use App\Enums\ActionEnum;
use App\Models\Action;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ActionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Action::updateOrCreate([
            'name' => ActionEnum::CREATE_ROLE
        ], [
            'description' => 'Create a new user role'
        ]);
        Action::updateOrCreate([
            'name' => ActionEnum::EDIT_ROLE
        ], [
            'description' => 'Edit a new user role'
        ]);
        Action::updateOrCreate([
            'name' => ActionEnum::LIST_ROLES
        ], [
            'description' => 'List all user roles'
        ]);
        Action::updateOrCreate([
            'name' => ActionEnum::DELETE_ROLE
        ], [
            'description' => 'Delete a user role'
        ]);
    }
}
