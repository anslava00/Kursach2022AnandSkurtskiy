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
        Schema::create('form_controls', function (Blueprint $table) {
            $table->id();
            $table->string('examination')->unsigned();
            $table->string('zachet')->unsigned();
            $table->string('zachet_with_grade')->unsigned();
            $table->string('KP')->unsigned();
            $table->string('KR')->unsigned();
            $table->string('control')->unsigned();
            $table->string('RGR')->unsigned(); 
            
            $table->foreignId('r_p_d_s_id')->constrained('r_p_d_s')->cascadeOnDelete();
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
        Schema::dropIfExists('form_controls');
    }
};
