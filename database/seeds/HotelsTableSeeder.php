<?php

use Illuminate\Database\Seeder;

class HotelsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user_id = \App\User::where('username', '=', 'yadayada')->pluck('id')->first();
        DB::table('hotels')->insert([
        	'created_at' => Carbon\Carbon::now()->toDateTimeString(),
        	'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
        	'name'		 => 'Primer hotel',
        	'address'	 => 'Carrer lepanto nro 25',
        	'hab_num'	 => 124,
        	'stars'		 => 4,
            'user_id'    => $user_id,
        ]);

        $user_id = \App\User::where('username', '=', 'nancy')->pluck('id')->first();
        DB::table('hotels')->insert([
        	'created_at' => Carbon\Carbon::now()->toDateTimeString(),
        	'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
        	'name'		 => 'Segundo hotel',
        	'address'	 => 'Carrer mallorca nro 181',
        	'hab_num'	 => 87,
        	'stars'		 => 2,
            'user_id'    => $user_id,
        ]);

        $user_id = \App\User::where('username', '=', 'miramar')->pluck('id')->first();
        DB::table('hotels')->insert([
        	'created_at' => Carbon\Carbon::now()->toDateTimeString(),
        	'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
        	'name'		 => 'Tercer hotel',
        	'address'	 => 'Carrer l\'escorial nro 44',
        	'hab_num'	 => 50,
        	'stars'		 => 3,
            'user_id'    => $user_id,
        ]);
    }
}
