<?php

declare(strict_types=1);

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Seeder;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
        Role::create([
            'name' => config('core.admin_role'),
        ]);
        Role::create([
            'name' => config('core.member_role'),
        ]);
    }
}
