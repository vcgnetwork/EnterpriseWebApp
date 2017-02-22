<?php

use Illuminate\Database\Seeder;

class EventsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('events')->insert([
            'title' => 'Bobs on Vacation',
            'allDay' => 0,
            'start' => '2016-12-14',
            'end' => '2016-12-14',
            'url' => '',
            'editable' => '',
            'startEditable' => '',
            'durationEditable' => '',
            'resourceEditable' => '',
            'overlap' => '',
            'color' => '',
            'backgroundColor' => '',
            'borderColor' => '',
            'textColor' => ''
        ]);

    }
}
