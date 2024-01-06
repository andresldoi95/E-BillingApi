<?php

namespace Database\Seeders;

use App\Models\Tenant;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TenantSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Tenant::updateOrCreate([
            'identification' => '0929866168001'
        ], [
            'name' => 'Andrés Alexander León Doylet',
            'description' => 'Software Developer'
        ]);
    }
}
