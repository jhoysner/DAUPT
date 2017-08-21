<?php

use Illuminate\Database\Seeder;

class DiaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('dias')->insert([
            'dia' => "Lunes",
        ]);
        DB::table('dias')->insert([
            'dia' => "Martes",
        ]);
        DB::table('dias')->insert([
            'dia' => "Miercoles",
        ]);
        DB::table('dias')->insert([
            'dia' => "Jueves"
        ]);
        DB::table('dias')->insert([
            'dia' => "Viernes",
        ]);
    }
}
