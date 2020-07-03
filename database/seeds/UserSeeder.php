<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder {

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        DB::table('users')->insert([
            'name' => "Margarida",
            'surname' => "Silva",
            'email' => 'margarida' . '@gmail.com',
            'password' => Hash::make('teste'),
        ]);
        DB::table('users')->insert([
            'name' => "Joao",
            'surname' => "Pedro",
            'email' => 'joao' . '@gmail.com',
            'password' => Hash::make('teste2'),
        ]);
    }

}
