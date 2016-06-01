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
        DB::table('users')->insert([
        	'created_at' => Carbon\Carbon::now()->toDateTimeString(),
        	'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
        	'username'    => 'admin',
            'email'   => 'elgue@yare.com',
            'tlf'       => '334 594 645',
            'password'     => bcrypt('123456'),
            'is_admin'   => true,
        ]);

        DB::table('users')->insert([
        	'created_at' => Carbon\Carbon::now()->toDateTimeString(),
        	'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
        	'username'    => 'yadayada',
            'email'   => 'yada@yare.com',
            'tlf'       => '334 666 645',
            'password'     => bcrypt('123456'),
            'is_admin'   => false,
        ]);

        DB::table('users')->insert([
        	'created_at' => Carbon\Carbon::now()->toDateTimeString(),
        	'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
        	'username'    => 'nancy',
            'email'   => 'mijo@yare.com',
            'tlf'       => '994 666 543',
            'password'     => bcrypt('123456'),
            'is_admin'   => false,
        ]);

        DB::table('users')->insert([
        	'created_at' => Carbon\Carbon::now()->toDateTimeString(),
        	'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
        	'username'    => 'miramar',
            'email'   => 'hello@yare.com',
            'tlf'       => '994 777 543',
            'password'     => bcrypt('123456'),
            'is_admin'   => false,
        ]);
    }
}
