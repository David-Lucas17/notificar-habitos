<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::query()->Create([
            'name' => 'administrador',
            'email' => 'administrador@example.com',
            'password' => '12345678'
        ]);
    }
}
