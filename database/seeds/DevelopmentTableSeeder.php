<?php

use App\Models\Role;
use App\Models\User;
use Illuminate\Database\Seeder;

class DevelopmentTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(User::class, 25)
            ->create()
            ->each(function ($user) {
                /** @var \App\Models\User $user */
                factory(Role::class)
                    ->create()
                    ->each(function ($role) use ($user) {
                        /** @var \App\Models\Role $role */
                        $user->assignRole($role);
                    });
            });
    }
}
