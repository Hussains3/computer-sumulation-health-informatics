<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $permissions = Permission::pluck('id','id')->all();
        $roles = [
            'Admin',
            'Developer',
            'Editor',
            'Reviwer',
            'Authour'
        ];

        foreach ($roles as $role) {
            $newRole = Role::create(['name' => $role]);
            $newRole->syncPermissions($permissions);
        }
    }
}
