<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('time_for_r_p_d_s', function (Blueprint $table) {
            $table->id();

            $table->integer('course')->unsigned();
            $table->integer('semester')->unsigned();
            $table->integer('c_u')->unsigned();
            $table->integer('lectures')->unsigned();
            $table->integer('laboratory')->unsigned();
            $table->integer('laboratory_inter')->unsigned();
            $table->integer('practice')->unsigned();
            $table->integer('practice_inter')->unsigned();
            $table->integer('KSP')->unsigned();
            $table->integer('OK')->unsigned();
            $table->integer('SP')->unsigned();
            $table->integer('control')->unsigned();
            
            $table->foreignId('r_p_d_s_id')->constrained('r_p_d_s');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('time_for_r_p_d_s');
    }
};
