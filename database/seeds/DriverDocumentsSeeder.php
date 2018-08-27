<?php

use App\Document;
use Illuminate\Database\Seeder;

class DriverDocumentsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        Document::truncate();
        Document::insert(
            [
                'name' => 'Driving Licence',
                'type' => 'DRIVER',
            ],
            [
                'name' => 'Bank Passbook',
                'type' => 'DRIVER',
            ],
            [
                'name' => 'Joining Form',
                'type' => 'DRIVER',
            ],
            [
                'name' => 'Work Permit',
                'type' => 'DRIVER',
            ],
            [
                'name' => 'Registration Certificate',
                'type' => 'VEHICLE',
            ],
            [
                'name' => 'Insurance Certificate',
                'type' => 'VEHICLE',
            ],
            [
                'name' => 'Fitness Certificate',
                'type' => 'VEHICLE',
            ]
        );
    }
}
