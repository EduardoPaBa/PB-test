<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class mateGrado extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('materia_grados')->insert([
            'grado_id' => '1',
            'materia_id' => '1',
        ]);
        DB::table('materia_grados')->insert([
            'grado_id' => '1',
            'materia_id' => '2',
        ]);
        DB::table('materia_grados')->insert([
            'grado_id' => '2',
            'materia_id' => '1',
        ]);
        DB::table('materia_grados')->insert([
            'grado_id' => '3',
            'materia_id' => '4',
        ]);
        DB::table('materia_grados')->insert([
            'grado_id' => '3',
            'materia_id' => '5',
        ]);



    }
}
