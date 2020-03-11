<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\App;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Eloquent::unguard();

        // Disable foreign key constraints check before running seeders
        DB::statement('SET FOREIGN_KEY_CHECKS = 0');
        $this->call(RolesTableSeeder::class);
        $this->call(UsersTableSeeder::class);

        if ('production' !== App::environment()) {
            //$this->call(VoyagerDummyDatabaseSeeder::class);
        }

        // Re-enable foreign key constraints check after running seeders
        DB::statement('SET FOREIGN_KEY_CHECKS = 1');

        Eloquent::reguard();
    }
}
