<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Publication extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('publication', function (Blueprint $table) {
            $table->increments('id');
            $table->string('message');
            $table->timestamps();
            $table->unsignedInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
         Schema::drop('publication');
        DB::statement('SET FOREIGN_KEY_CHECKS = 0');
        Schema::drop('user_id');
        DB::statement('SET FOREIGN_KEY_CHECKS = 1');
    }

}
