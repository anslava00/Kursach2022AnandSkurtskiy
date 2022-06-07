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
        Schema::create('credit_units', function (Blueprint $table) {
            $table->id();
            $table->string('experts')->unsigned();
            $table->string('fackts')->unsigned();
            $table->string('hour_in_c_u')->unsigned();

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
        Schema::dropIfExists('credit_units');
    }
};
