<?php

use Illuminate\Database\Seeder;

class departmentseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('scan_departments')->insert([
            'id'        => '1',
            'name' => 'Department1',
        ]);
        DB::table('scan_departments')->insert([
            'id'        => '2',
            'name' => 'Department2',
        ]);
        DB::table('scan_departments')->insert([
            'id'        => '3',
            'name' => 'Department3',
        ]);
        DB::table('scan_departments')->insert([
            'id'        => '4',
            'name' => 'Department4',
        ]);
    }
}
