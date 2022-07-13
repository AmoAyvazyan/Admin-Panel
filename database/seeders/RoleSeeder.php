<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $super = Role::create(['name' => 'super']);
        $admin = Role::create(['name' => 'admin']);
        $user = Role::create(['name' => 'user']);
        $create = Permission::create(['name' => 'create articles']);
        $edit = Permission::create(['name' => 'edit articles']);
        $read = Permission::create(['name' => 'read articles']);
        $delete = Permission::create(['name' => 'delete articles']);

        $super->givePermissionTo([$create, $edit, $read, $delete]);
        $admin->givePermissionTo([$create, $read]);
        $user->givePermissionTo($read);

        $users = \App\Models\User::factory()->create([
            'name' => 'Test',
            'email' => 'test@test.com',
        ]);
        $users->assignRole($user);

        $users = \App\Models\User::factory()->create([
            'name' => 'Admin',
            'email' => 'admin@test.com',
        ]);
        $users->assignRole($admin);

        $users = \App\Models\User::factory()->create([
            'name' => 'Super-Admin',
            'email' => 'superadmin@test.com',
        ]);
        $users->assignRole($super);

    }
}
