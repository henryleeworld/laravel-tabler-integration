<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class RoleSeed extends Seeder
{
    /**
     * Run the database seeders.
     */
    public function run(): void
    {
        $role = Role::create(['name' => 'administrator']);
        $role->givePermissionTo('users_manage');
    }
}
