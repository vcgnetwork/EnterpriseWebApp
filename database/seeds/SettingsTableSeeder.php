<?php

use Illuminate\Database\Seeder;

class SettingsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('settings')->insert(['sys-category' => 'system-text', 'sys-key' => 'admin', 'sys-value' => 'admin', 'created_at' => '2016-10-01 00:00:00']);
        DB::table('settings')->insert(['sys-category' => 'system-text', 'sys-key' => 'manager', 'sys-value' => 'manager', 'created_at' => '2016-10-01 00:00:00']);
        DB::table('settings')->insert(['sys-category' => 'system-text', 'sys-key' => 'partner', 'sys-value' => 'partner', 'created_at' => '2016-10-01 00:00:00']);
    }
}
