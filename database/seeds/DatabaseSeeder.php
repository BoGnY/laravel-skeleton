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
        Schema::disableForeignKeyConstraints();

        $this->call(RolesTableSeeder::class);
        $this->call(UsersTableSeeder::class);

        if ('production' !== App::environment()) {
            //$this->call(DevelopmentDatabaseSeeder::class);
        }

        // Re-enable foreign key constraints check after running seeders
        Schema::enableForeignKeyConstraints();

        Eloquent::reguard();
    }
}
