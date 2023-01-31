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
        Schema::create('workers', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('image');
            $table->string('surname');
            $table->string('fatherName');
            $table->string('phone1');
            $table->string('phone2')->nullable();
            $table->string('email');
            $table->string('gender');
            $table->string('age');
            $table->string('education');
            $table->string('experience');
            $table->string('about');
            $table->string('workDays');
            $table->string('position');
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
        Schema::dropIfExists('workers');
    }
};
