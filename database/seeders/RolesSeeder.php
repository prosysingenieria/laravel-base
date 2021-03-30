<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RolesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $roles = [
            'admin',
            'user',
        ];

        foreach ($roles as $role) {
            $role = Role::create(['name' => $role]);
            $role->givePermissionTo(Permission::where('name', 'like', $role . '.%')->get()->pluck('name'));
        }
    }
}
