<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'user_type_id' => 1,
            'email' => 'bcurtis@vcgnetwork.com',
            'password' => Hash::make('admin'),
            'first_name' => 'Bill',
            'last_name' => 'Curtis',
            'contact_preference' => 'email',
            'primary_phone' => '813-815-2549',
            'is_active' => 1,
            'remember_token' => '',
            'created_at' => '2016-10-01 00:00:00'
        ]);
        DB::table('users')->insert([
            'user_type_id' => 2,
            'email' => 'manager@example.com',
            'password' => Hash::make('Zo0'),
            'first_name' => 'The',
            'last_name' => 'Manager',
            'contact_preference' => 'email',
            'primary_phone' => '000-000-0000',
            'is_active' => 1,
            'remember_token' => '',
            'created_at' => '2016-10-01 00:00:00'
        ]);
        DB::table('users')->insert([
            'user_type_id' => 3,
            'email' => 'mary@example.com',
            'password' => Hash::make('tech'),
            'first_name' => 'Mary',
            'last_name' => 'Technician',
            'contact_preference' => 'email',
            'primary_phone' => '987-654-3210',
            'is_active' => 1,
            'remember_token' => '',
            'created_at' => '2016-10-01 00:00:00'
        ]);
        DB::table('users')->insert([
            'user_type_id' => 3,
            'email' => 'bob@example.com',
            'password' => Hash::make('tech'),
            'first_name' => 'Bob',
            'last_name' => 'Technician',
            'contact_preference' => 'email',
            'primary_phone' => '800-867-5309',
            'is_active' => 1,
            'remember_token' => '',
            'created_at' => '2016-10-01 00:00:00'
        ]);
    }
}
