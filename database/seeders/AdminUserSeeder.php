<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class AdminUserSeeder extends Seeder
{
    public function run(): void
    {
        // Check and add role column if not exists
        if (!Schema::hasColumn('users', 'role')) {
            DB::statement('ALTER TABLE users ADD COLUMN role VARCHAR(50) DEFAULT "verifikator"');
        }

        // Create Admin user
        User::updateOrCreate(
            ['email' => 'admin@admin.com'],
            [
                'name' => 'admin',
                'email' => 'admin@admin.com',
                'password' => Hash::make('admin123'),
                'role' => 'admin',
            ]
        );

        // Create Verifikator user
        User::updateOrCreate(
            ['email' => 'verifikator@kkp.go.id'],
            [
                'name' => 'verifikator',
                'email' => 'verifikator@kkp.go.id',
                'password' => Hash::make('verifikator123'),
                'role' => 'verifikator',
            ]
        );
    }
}
