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
            $table->string('experts')->unsigned();
            $table->string('to_plan')->unsigned();
            $table->string('control_work')->unsigned();
            $table->string('SR')->unsigned();
            $table->string('kontrol')->unsigned();
            $table->string('inter_hour')->unsigned();
            $table->string('pr_podgot')->unsigned();

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
