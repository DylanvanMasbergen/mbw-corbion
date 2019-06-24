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
        DB::table('Users')->insert([
            'name'        => 'admin',
            'username'  => 'admin',
            'role_id' => '1',
            'password' => bcrypt('test1234'),
        ]);
        DB::table('Users')->insert([
            'name'        => 'spillteam',
            'username'  => 'spillteam',
            'role_id' => '2',
            'password' => bcrypt('test1234'),
        ]);
        DB::table('Users')->insert([
            'name'        => 'operator',
            'username'  => 'operator',
            'role_id' => '3',
            'password' => bcrypt('test1234'),
        ]);
    }
}
