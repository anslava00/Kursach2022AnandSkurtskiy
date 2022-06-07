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

            $table->string('course')->unsigned();
            $table->string('semester')->unsigned();
            $table->string('c_u')->unsigned();
            $table->string('lectures')->unsigned();
            $table->string('laboratory')->unsigned();
            $table->string('laboratory_inter')->unsigned();
            $table->string('practice')->unsigned();
            $table->string('practice_inter')->unsigned();
            $table->string('KSP')->unsigned();
            $table->string('OK')->unsigned();
            $table->string('SP')->unsigned();
            $table->string('control')->unsigned();
            
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
