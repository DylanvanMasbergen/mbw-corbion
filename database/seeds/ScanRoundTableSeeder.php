<?php

use Illuminate\Database\Seeder;

class ScanRoundTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('scan_rounds')->insert([
            'id'        => '1',
            'shift_id' => '1',
            'scanned_date' => '2019-03-03',
        ]);
        DB::table('scan_rounds')->insert([
            'id'        => '2',
            'shift_id' => '2',
            'scanned_date' => '2019-03-03',
        ]);
        DB::table('scan_rounds')->insert([
            'id'        => '3',
            'shift_id' => '3',
            'scanned_date' => '2019-03-03',
        ]);
    }
}
