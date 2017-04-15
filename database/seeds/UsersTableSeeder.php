<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'JMarze',
            'email' => 'marze@fundempresa.org.bo',
            'password' => bcrypt('123'),
        ]);

        DB::table('user_privilegio')->insert([
            'user_id' => 1,
            'privilegio_id' => 1,
        ]);
        DB::table('user_privilegio')->insert([
            'user_id' => 1,
            'privilegio_id' => 2,
        ]);
        DB::table('user_privilegio')->insert([
            'user_id' => 1,
            'privilegio_id' => 3,
        ]);
    }
}
