<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $user = User::create([
            'name' => 'saeful',
            // 'username' => 'saeful-muminin',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('admin123'),
        ]);

        $role = Role::find(1);
        $user->assignRole($role);
    }
}
