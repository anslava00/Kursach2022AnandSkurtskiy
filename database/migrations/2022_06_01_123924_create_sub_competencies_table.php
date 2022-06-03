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
        Schema::create('sub_competencies', function (Blueprint $table) {
            $table->id();
            $table->integer('competencies_id')->unsigned();
            $table->text('title');
            $table->text('description')->nullable();

            $table->foreign('competencies_id')->references('id')
                ->on('competencies')->cascadeOnDelete();
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
        Schema::dropIfExists('sub_competencies');
    }
};
