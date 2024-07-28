<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeed extends Seeder
{
    /**
     * Run the database seeders.
     */
    public function run(): void
    {
        $user = User::factory()->create([
            'name' => __('Administrator'),
            'email' => 'admin@admin.com',
        ]);
        $user->assignRole('administrator');

    }
}
