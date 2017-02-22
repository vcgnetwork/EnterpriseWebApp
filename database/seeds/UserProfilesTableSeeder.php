<?php

use Illuminate\Database\Seeder;

class UserProfilesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('user_profiles')->insert([
            'user_id' => 1,
            'home_phone' => '813-815-2549',
            'home_address' => '27750 Cowdrey St. #302, Wesley Chapel, FL 33544',
            'title' => 'Principal Software Developer',
            'image_path' => 'user.jpg',
            'simple_note' => 'Administrator',
            'created_at' => '2016-10-01 00:00:00'
        ]);
        DB::table('user_profiles')->insert([
            'user_id' => 2,
            'image_path' => 'user.jpg',
            'simple_note' => 'Manager',
            'created_at' => '2016-10-01 00:00:00'
        ]);
        DB::table('user_profiles')->insert([
            'user_id' => 3,
            'image_path' => 'user.jpg',
            'simple_note' => 'Tech',
            'created_at' => '2016-10-01 00:00:00'
        ]);
        DB::table('user_profiles')->insert([
            'user_id' => 4,
            'image_path' => 'user.jpg',
            'simple_note' => 'Tech',
            'created_at' => '2016-10-01 00:00:00'
        ]);
    }
}
