<?php

use Illuminate\Database\Seeder;

class EmpleadosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('empleados')->insert([
            'apellido_1' => 'Arze',
            'apellido_2' => 'Pinto',
            'nombres' => 'Jesus Marcelo',
            'interno' => '1118',
            'user_id' => 1,
            'cargo_id' => 1,
        ]);
    }
}
