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
        Schema::create('material_tex_productions', function (Blueprint $table) {
            $table->id();
            $table->text('place');
            $table->text('equipment');
            $table->text('licensed_software');

            $table->foreignId('basic_information_id')->constrained('basic_information')->cascadeOnDelete();
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
        Schema::dropIfExists('material_tex_productions');
    }
};
