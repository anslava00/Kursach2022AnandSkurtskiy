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
        Schema::create('valuation_funds', function (Blueprint $table) {
            $table->id();
            $table->text('evaluation_tools');
            $table->text('general_information');
            $table->text('general_evaluation_tools');
            $table->text('methodological_instructions');
            $table->text('questions_offset');
            $table->text('grade_questions_offset');
            $table->text('oral_question');
            $table->text('grade_oral_question');
            $table->text('presentation');
            $table->text('grade_presentation');
            $table->text('ecce');
            $table->text('grade_ecce');
            $table->text('laboratory');
            $table->text('grade_laboratory');
            $table->text('coontrol_word');
            $table->text('grade_control_work');
            $table->text('creative_task');
            $table->text('grade_creative_task');

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
        Schema::dropIfExists('valuation_funds');
    }
};
