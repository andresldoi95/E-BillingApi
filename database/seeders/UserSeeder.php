<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        User::updateOrCreate([
            'email' => 'andresleondoylet@gmail.com'
        ], [
            'name' => 'Andrés Alexander León Doylet',
            'password' => bcrypt('123456')
        ]);
    }
}
