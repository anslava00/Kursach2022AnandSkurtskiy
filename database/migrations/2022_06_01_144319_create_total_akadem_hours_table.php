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
        Schema::create('total_akadem_hours', function (Blueprint $table) {
            $table->id();
            $table->integer('experts')->unsigned();
            $table->integer('to_plan')->unsigned();
            $table->integer('control_work')->unsigned();
            $table->integer('SR')->unsigned();
            $table->integer('kontrol')->unsigned();
            $table->integer('inter_hour')->unsigned();
            $table->integer('pr_podgot')->unsigned();

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
        Schema::dropIfExists('total_akadem_hours');
    }
};
