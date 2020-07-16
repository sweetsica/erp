<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHRManagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('h_r_manages', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->dateTime('dateofbirth')->nullable();
            $table->integer('phone')->nullable();
            $table->string('department')->nullable();
            $table->string('daysworked')->nullable();
            $table->integer('salary')->nullable();
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
        Schema::dropIfExists('h_r_manages');
    }
}
