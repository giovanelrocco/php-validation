<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use \App\Models\User;
use \Spatie\Permission\Models\Role;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $user = User::factory()->create([
            'email' => 'test@email.com',
            'password' => 'test123',
            'email_verified_at' => date('Y-m-d H:i:s'),
        ]);
        $role = Role::create(['name' => User::ADMIN_ROLE]);
        $user->assignRole($role);

        Role::create(['name' => User::CLIENTE_ROLE]);

    }
}
