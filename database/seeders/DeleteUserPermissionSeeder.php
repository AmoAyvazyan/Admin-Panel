<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class DeleteUserPermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $super = Role::findByName('super');
        $admin = Role::findByName('admin');
        $deleteUser = Permission::create(['name' => 'delete user']);
        $deleteAdmin = Permission::create(['name' => 'delete admin']);

        $super->givePermissionTo([$deleteUser, $deleteAdmin]);
        $admin->givePermissionTo($deleteUser);
    }
}
