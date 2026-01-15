<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AdminUserSeeder extends Seeder
{
    public function run(): void
    {
        User::updateOrCreate(
            ['email' => 'admin@admin.com'],
            [
                'name' => 'admin',  // name akan digunakan sebagai username untuk login
                'email' => 'admin@admin.com',
                'password' => Hash::make('admin123'),
            ]
        );
    }
}
