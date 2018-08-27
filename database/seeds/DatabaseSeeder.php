<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        // admin table seeding
        $this->call(AdminTableSeeder::class);
        $this->call(ServiceTypeSeeder::class);
        $this->call(DriverDocumentsSeeder::class);
    }
}
