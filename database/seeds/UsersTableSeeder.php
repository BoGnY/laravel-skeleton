<?php

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use TCG\Voyager\Models\Role;

class UsersTableSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $role = Role::where('name', 'admin')->firstOrFail();

        User::create([
            'first_name' => env('ADMIN_FIRST_NAME'),
            'last_name' => env('ADMIN_LAST_NAME'),
            'email' => env('ADMIN_EMAIL'),
            'password' => Hash::make(env('ADMIN_PASSWORD')),
            'remember_token' => Str::random(60),
            'role_id' => $role->id,
        ]);
    }
}
