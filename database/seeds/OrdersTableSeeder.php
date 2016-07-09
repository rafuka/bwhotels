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
        $hotel_id = \App\Hotel::where('name', '=', 'Primer hotel')->pluck('id')->first();
        DB::table('orders')->insert([
        	'created_at' => Carbon\Carbon::now()->toDateTimeString(),
        	'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            'client_name' => 'John McLovin',
            'id_num'     => '5304907',
            'contact'    =>  'yareyare@email.com',
        	'lug_num'    => 3,
            'terminal'   => 'T2',
            'time'       => '17:30',
            'status'     => 'pending',
            'hotel_id'   => $hotel_id,
        ]);

        DB::table('orders')->insert([
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            'client_name' => 'Ms. Rosemary Bawlz',
            'id_num'     => '5304907',
            'contact'    =>  'blah@email.com',
            'lug_num'    => 2,
            'terminal'   => 'T1',
            'time'       => '15:30',
            'status'     => 'cancelled',
            'hotel_id'   => $hotel_id,
        ]);

        $hotel_id = \App\Hotel::where('name', '=', 'Segundo hotel')->pluck('id')->first();
        DB::table('orders')->insert([
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            'client_name' => 'Ralphie From The Plains',
            'id_num'     => '5304907',
            'contact'    =>  'yareyare@email.com',
            'lug_num'    => 4,
            'terminal'   => 'T1',
            'time'       => '19:00',
            'status'     => 'delivered',
            'hotel_id'   => $hotel_id,
        ]);

        DB::table('orders')->insert([
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            'client_name' => 'Ada Lovelace',
            'id_num'     => '5304907',
            'contact'    =>  '647 564 876',
            'lug_num'    => 1,
            'terminal'   => 'T1',
            'time'       => '17:00',
            'status'     => 'delivered',
            'hotel_id'   => $hotel_id,
        ]);

        $hotel_id = \App\Hotel::where('name', '=', 'Tercer hotel')->pluck('id')->first();
        DB::table('orders')->insert([
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            'client_name' => 'Abe Lincoln',
            'id_num'     => '5304907',
            'contact'    =>  'elmio@email.com',
            'lug_num'    => 3,
            'terminal'   => 'T2',
            'time'       => '20:30',
            'status'     => 'pending',
            'hotel_id'   => $hotel_id,
        ]);

        $hotel_id = \App\Hotel::where('name', '=', 'Segundo hotel')->pluck('id')->first();
        DB::table('orders')->insert([
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            'client_name' => 'Chichi Peralta',
            'id_num'     => '243245B',
            'contact'    =>  'intensitymoon@email.com',
            'lug_num'    => 5,
            'terminal'   => 'T2',
            'time'       => '19:30',
            'status'     => 'pending',
            'hotel_id'   => $hotel_id,
        ]);

        $hotel_id = \App\Hotel::where('name', '=', 'Tercer hotel')->pluck('id')->first();
        DB::table('orders')->insert([
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            'client_name' => 'Lupe Bagwings',
            'id_num'     => '76978A',
            'contact'    =>  '978 03 86',
            'lug_num'    => 2,
            'terminal'   => 'T2',
            'time'       => '20:30',
            'status'     => 'pending',
            'hotel_id'   => $hotel_id,
        ]);

        
        DB::table('orders')->insert([
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            'client_name' => 'Filomena Rodriguez',
            'id_num'     => '78969876',
            'contact'    =>  'qloq@email.com',
            'lug_num'    => 3,
            'terminal'   => 'T1',
            'time'       => '16:30',
            'status'     => 'delivered',
            'hotel_id'   => $hotel_id,
        ]);
    }
}
