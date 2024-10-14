<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use DB;

class ReservationsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('reservations')->insert([
            ['client_name' => 'Jose', 'reservation_date' => '20-05-2024', 'number_people' => '5', 'state' => 'Confirmada'],
            ['client_name' => 'Alfredo', 'reservation_date' => '12-05-2024', 'number_people' => '2', 'state' => 'Pendiente'],
        ]);
    }
}
