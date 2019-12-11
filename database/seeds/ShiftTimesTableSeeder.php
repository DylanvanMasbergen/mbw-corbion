<?php

use Illuminate\Database\Seeder;

class ShiftTimesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('shift_times')->insert([
            'id'        => '1',
            'shift'     => '1',
            'startTime' => '22:00',
            'endTime'    => '01:59:59',
        ]);
        DB::table('shift_times')->insert([
            'id'        => '2',
            'shift'     => '1',
            'startTime' => '02:00',
            'endTime'    => '05:59:59',
        ]);
        DB::table('shift_times')->insert([
            'id'        => '3',
            'shift'     => '2',
            'startTime' => '06:00',
            'endTime'    => '9:59:59',
        ]);
        DB::table('shift_times')->insert([
            'id'        => '4',
            'shift'     => '2',
            'startTime' => '10:00',
            'endTime'    => '13:59:59',
        ]);
        DB::table('shift_times')->insert([
            'id'        => '5',
            'shift'     => '3',
            'startTime' => '14:00',
            'endTime'    => '17:59:59',
        ]);
        DB::table('shift_times')->insert([
            'id'        => '6',
            'shift'     => '3',
            'startTime' => '18:00',
            'endTime'    => '21:59:59',
        ]);
    }
}
