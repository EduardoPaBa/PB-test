<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class materia extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('materias')->insert([
            'nombre' => 'Mate',
        ]);
        DB::table('materias')->insert([
            'nombre' => 'Fisica',
        ]);
        DB::table('materias')->insert([
            'nombre' => 'Quimica',
        ]);
        DB::table('materias')->insert([
            'nombre' => 'Biologia',
        ]);
        DB::table('materias')->insert([
            'nombre' => 'Lenguaje',
        ]);
    }
}
