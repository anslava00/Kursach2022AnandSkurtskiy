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
        Schema::create('rpd_and_competencies', function (Blueprint $table) {
            $table->id();
            $table->foreignId('r_p_d_s_id')->constrained('r_p_d_s');
            $table->foreignId('competencies_id')->constrained('competencies')->cascadeOnDelete();
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
        Schema::dropIfExists('rpd_and_competencies');
    }
};
