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
        Schema::create('basic_information', function (Blueprint $table) {
            $table->id();
            $table->text('purpose')->nullable();
            $table->text('task')->nullable();

            $table->foreignId('r_p_d_s_id')->constrained('r_p_d_s')->cascadeOnDelete();
            $table->timestamps();
        });
        // Schema::create('control_achievement', function (Blueprint $table) {
        //     $table->id();

        //     $table->foreignId('basic_information_id')->constrained('basic_information');
        //     $table->timestamps();
        // });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('basic_information');
    }
};
