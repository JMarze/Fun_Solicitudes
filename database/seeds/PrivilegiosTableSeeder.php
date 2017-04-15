<?php

use Illuminate\Database\Seeder;

class PrivilegiosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('privilegios')->insert([
            'descripcion' => 'Administrador',
        ]);

        DB::table('privilegios')->insert([
            'descripcion' => 'Usuario',
        ]);

        DB::table('privilegios')->insert([
            'descripcion' => 'Reporte',
        ]);
    }
}
