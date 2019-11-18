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
            'start' => Carbon::parse('11-11-2022 22:00:00'),
            'end' => Carbon::parse('12-11-2022 01:59:59'),
            'day' => Carbon::parse('12-11-2022'),
            'round' => 1,
            'shifttime_id' => '1',
        ]);
        DB::table('scan_rounds')->insert([
            'start' => Carbon::parse('12-11-2022 02:00:00'),
            'end' => Carbon::parse('12-11-2022 05:59:59'),
            'day' => Carbon::parse('12-11-2022'),
            'round' => 2,
            'shifttime_id' => '2',
        ]);
        DB::table('scan_rounds')->insert([
            'start' => Carbon::parse('12-11-2022 06:00:00'),
            'end' => Carbon::parse('12-11-2022 09:59:59'),
            'day' => Carbon::parse('12-11-2022'),
            'round' => 3,
            'shifttime_id' => '3',
        ]);
        DB::table('scan_rounds')->insert([
            'start' => Carbon::parse('12-11-2022 10:00:00'),
            'end' => Carbon::parse('12-11-2022 13:59:59'),
            'day' => Carbon::parse('12-11-2022'),
            'round' => 4,
            'shifttime_id' => '4',
        ]);
        DB::table('scan_rounds')->insert([
            'start' => Carbon::parse('12-11-2022 14:00:00'),
            'end' => Carbon::parse('12-11-2022 17:59:59'),
            'day' => Carbon::parse('12-11-2022'),
            'round' => 5,
            'shifttime_id' => '5',
        ]);
        DB::table('scan_rounds')->insert([
            'start' => Carbon::parse('12-11-2022 18:00:00'),
            'end' => Carbon::parse('12-11-2022 21:59:59'),
            'day' => Carbon::parse('12-11-2022'),
            'round' => 6,
            'shifttime_id' => '6',
        ]);
    }
}