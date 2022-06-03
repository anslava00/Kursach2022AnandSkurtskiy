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
        Schema::create('list_of_literatures', function (Blueprint $table) {
            $table->id();
            $table->text('list_literature');
            $table->text('more_literature');
            $table->text('list_internet');

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
        Schema::dropIfExists('list_of_literatures');
    }
};
