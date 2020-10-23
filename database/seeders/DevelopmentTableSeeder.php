<?php

declare(strict_types=1);

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DevelopmentTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
        \App\Models\User::factory(25)
            ->create()
            ->each(function ($user): void {
                /** @var \App\Models\User $user */
                \App\Models\Role::factory()
                    ->create()
                    ->each(function ($role) use ($user): void {
                        /** @var \App\Models\Role $role */
                        $user->assignRole($role);
                    });
            });
    }
}
