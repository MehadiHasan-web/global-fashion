<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class RolePermission extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $role = [
            ['name' => 'admin'],
            ['name' => 'moderator'],
            ['name' => 'user'],
        ];
        foreach ($role as $item){
            Role::create($item);
        }

        $user = User::first();
        $user->assignRole('admin', 'moderator');
    }
}
