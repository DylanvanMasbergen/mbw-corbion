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
            'id'        => '3',
            'start' => Carbon::parse('11-09-2019 22:00:00'),
            'end' => Carbon::parse('12-09-2019 06:00:00'),
            'day' => Carbon::parse('11-09-2019'),
            'shift' => 3,
            'shifttime_id' => '1',
            
        ]);
    }
}
