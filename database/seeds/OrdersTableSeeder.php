<?php

use Illuminate\Database\Seeder;

class OrdersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $hotel_id = \App\Hotel::where('id', '=', '1')->pluck('id')->first();
        DB::table('orders')->insert([
        	'created_at' => Carbon\Carbon::now()->toDateTimeString(),
        	'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
        	'lug_num'    => 3,
            'terminal'   => 'T2',
            'time'       => '17:30',
            'status'     => 'pending',
            'hotel_id'   => $hotel_id,
        ]);

        DB::table('orders')->insert([
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            'lug_num'    => 2,
            'terminal'   => 'T1',
            'time'       => '15:30',
            'status'     => 'cancelled',
            'hotel_id'   => $hotel_id,
        ]);

        $hotel_id = \App\Hotel::where('id', '=', '2')->pluck('id')->first();
        DB::table('orders')->insert([
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            'lug_num'    => 4,
            'terminal'   => 'T1',
            'time'       => '19:00',
            'status'     => 'delivered',
            'hotel_id'   => $hotel_id,
        ]);

        DB::table('orders')->insert([
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            'lug_num'    => 1,
            'terminal'   => 'T1',
            'time'       => '17:00',
            'status'     => 'delivered',
            'hotel_id'   => $hotel_id,
        ]);

        $hotel_id = \App\Hotel::where('id', '=', '3')->pluck('id')->first();
        DB::table('orders')->insert([
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            'lug_num'    => 3,
            'terminal'   => 'T2',
            'time'       => '20:30',
            'status'     => 'pending',
            'hotel_id'   => $hotel_id,
        ]);
    }
}
