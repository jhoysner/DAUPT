<?php

use Illuminate\Database\Seeder;

class TiempoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tiempos')->insert([
            'hora' => "7.15 - 8.00",
        ]);
        DB::table('tiempos')->insert([
            'hora' => "8.00 - 8.45",
        ]);
        DB::table('tiempos')->insert([
            'hora' => "8.55 - 9.40",
        ]);
        DB::table('tiempos')->insert([
            'hora' => "9.40 - 10.25"
        ]);
        DB::table('tiempos')->insert([
            'hora' => "10.30 - 11.15",
        ]);
        DB::table('tiempos')->insert([
            'hora' => "11.15 - 12.00",
        ]);
        DB::table('tiempos')->insert([
            'hora' => "1.30 - 2.15",
        ]);
        DB::table('tiempos')->insert([
            'hora' => "2.15 - 3.00",
        ]);
        DB::table('tiempos')->insert([
            'hora' => "3.05 - 3.50",
        ]);
        DB::table('tiempos')->insert([
            'hora' => "3.50 - 4.35",
        ]);
        DB::table('tiempos')->insert([
            'hora' => "4.40 - 5.25",
        ]);
        DB::table('tiempos')->insert([
            'hora' => "5.25 - 6.10",
        ]);
    }
}



