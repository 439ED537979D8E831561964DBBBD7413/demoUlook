<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProviderTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('providers')->truncate();
        DB::table('providers')->insert([
            ['name' => 'TenStudio',
                'email' => 'provider@drogenidesoftwares.in',
                'password' => bcrypt('123456'),],
            ['name' => 'TenStudio Demo',
                'email' => 'provider@drogenidesoftwares.in',
                'password' => bcrypt('123456'),]
        ]);
    }
}
