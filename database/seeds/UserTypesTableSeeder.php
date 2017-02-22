<?php

use Illuminate\Database\Seeder;

class UserTypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('user_types')->insert(['name' => 'Admin', 'created_at' => '2016-10-01 00:00:00']);
        DB::table('user_types')->insert(['name' => 'Staff', 'created_at' => '2016-10-01 00:00:00']);
        DB::table('user_types')->insert(['name' => 'Technician', 'created_at' => '2016-10-01 00:00:00']);
    }
}
