<?php

use Illuminate\Database\Seeder;

class PublicationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
     public function run() {
        DB::table('publication')->insert([
            'message' => "Olá. Está tudo bem?",
            'user_id' => 1,
        ]);
        DB::table('publication')->insert([
            'message' => "Hoje está um belo dia !",
            'user_id' => 2,
        ]);
        DB::table('publication')->insert([
            'message' => "Que bom dia de praia",
            'user_id' => 1,
        ]);
        DB::table('publication')->insert([
            'message' => "Já estava a precisar de férias",
            'user_id' => 2,
        ]);
    }
}
