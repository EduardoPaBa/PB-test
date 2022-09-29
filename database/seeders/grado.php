<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class grado extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('grados')->insert([
            'nombre' => 'quinto',
        ]);
        DB::table('grados')->insert([
            'nombre' => 'sexto',
        ]);
        DB::table('grados')->insert([
            'nombre' => 'septimo',
        ]);
    }
}
