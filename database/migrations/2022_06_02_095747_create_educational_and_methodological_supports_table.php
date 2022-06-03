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
        Schema::create('educational_and_methodological_supports', function (Blueprint $table) {
            $table->id();
            $table->text('graph_for_independent_work');
            $table->text('recomendation_for_independent_work');
            $table->text('metodic_recomendation_for_independent_work');
            $table->text('grade_for_independent_work');
            $table->text('metodic_recomendation_for_ecce');

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
        Schema::dropIfExists('educational_and_methodological_supports');
    }
};
