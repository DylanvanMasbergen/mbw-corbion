<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class ScannedRoundsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('scan_rounds')->insert([
            'start' => Carbon::parse('11-11-2019 22:00:00'),
            'end' => Carbon::parse('12-11-2019 01:59:59'),
            'day' => Carbon::parse('12-11-2019'),
            'round' => 1,
            'shifttime_id' => '1',
        ]);
        DB::table('scan_rounds')->insert([
            'start' => Carbon::parse('12-11-2019 02:00:00'),
            'end' => Carbon::parse('12-11-2019 05:59:59'),
            'day' => Carbon::parse('12-11-2019'),
            'round' => 2,
            'shifttime_id' => '2',
        ]);
        DB::table('scan_rounds')->insert([
            'start' => Carbon::parse('12-11-2019 06:00:00'),
            'end' => Carbon::parse('12-11-2019 09:59:59'),
            'day' => Carbon::parse('12-11-2019'),
            'round' => 3,
            'shifttime_id' => '3',
        ]);
        DB::table('scan_rounds')->insert([
            'start' => Carbon::parse('12-11-2019 10:00:00'),
            'end' => Carbon::parse('12-11-2019 13:59:59'),
            'day' => Carbon::parse('12-11-2019'),
            'round' => 4,
            'shifttime_id' => '4',
        ]);
        DB::table('scan_rounds')->insert([
            'start' => Carbon::parse('12-11-2019 14:00:00'),
            'end' => Carbon::parse('12-11-2019 17:59:59'),
            'day' => Carbon::parse('12-11-2019'),
            'round' => 5,
            'shifttime_id' => '5',
        ]);
        DB::table('scan_rounds')->insert([
            'start' => Carbon::parse('12-11-2019 18:00:00'),
            'end' => Carbon::parse('12-11-2019 21:59:59'),
            'day' => Carbon::parse('12-11-2019'),
            'round' => 6,
            'shifttime_id' => '6',
        ]);
    }
}