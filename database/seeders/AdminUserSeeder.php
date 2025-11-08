<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class AdminUserSeeder extends Seeder
{
    public function run(): void
    {
        User::updateOrCreate(
            ['email' => 'admin@mamtours.com'],
            [
                'name' => 'MAM Tours Administratior',
                'password' => Hash::make('tours&t2025'), // change before production
                'is_admin' => true,
            ]);
        }
}