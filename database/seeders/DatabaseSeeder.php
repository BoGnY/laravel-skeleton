<?php

declare(strict_types=1);

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Schema;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run(): void
    {
        // Disable foreign key constraints check before running seeders
        Schema::disableForeignKeyConstraints();

        $this->call(RolesTableSeeder::class);
        $this->call(UsersTableSeeder::class);

        if ('production' !== App::environment()) {
            //$this->call(DevelopmentDatabaseSeeder::class);
        }

        // Re-enable foreign key constraints check after running seeders
        Schema::enableForeignKeyConstraints();
    }
}
