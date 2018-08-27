<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AdminTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('admins')->truncate();
        DB::table('admins')->insert([
            ['name' => 'Admin',
                'email' => 'admin@drogenidesoftwares.in',
                'password' => bcrypt('123456'),],
            ['name' => 'Admin Demo',
                'email' => 'demo@drogenidesoftwares.in',
                'password' => bcrypt('123456'),]
        ]);
    }
}
